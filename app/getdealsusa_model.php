<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class getdealsusa_model extends Model
{
    //

    function getsubcats(){


    	$allcategories = DB::table('categories')->where('parent_category_id','!=',0)
        ->select('*')->limit(7)
        ->get();

        $allcategories = json_decode(json_encode($allcategories), true);

        return $allcategories;


    }


     function getallcategories(){


    	$allcategories = DB::table('categories')->where('parent_category_id',0)
        ->select('*')
        ->get();

        //print_r($allcategories);

        $finalcategories=array();

        foreach ($allcategories as $key => $value) {
        	# code...

        	$temp=array(
            'category_id'=>$value->category_id,
            'category_name'=>$value->category_name,
            'category_slug'=>$value->category_slug,
            'amazon_category_id'=>$value->amazon_category_id,
            'parent_category_id'=>$value->parent_category_id

        	);

        	
        	

        	$childcategories = DB::table('categories')->where('parent_category_id',$value->category_id)
        ->select('*')
        ->get();

        $children = json_decode(json_encode($childcategories), true);

        $temp['children']=$children;

   array_push($finalcategories,$temp);

        }

   // echo '<pre>';
   // print_r($finalcategories);
   // echo '</pre>';


        //exit();

        return $finalcategories;
    }


    function homepagecatproducts(){

     	$allcategories = DB::table('categories')->where('parent_category_id',0)->where('is_featured',1)->orderby('category_name','asc')
        ->select('*')->limit(9)
        ->get();

        //print_r($allcategories);

        $finalcatproducts=array();

        foreach ($allcategories as $key => $value) {
        	# code...

        	$temp=array(
            'category_id'=>$value->category_id,
            'category_name'=>$value->category_name,
            'amazon_category_id'=>$value->amazon_category_id,
            'parent_category_id'=>$value->parent_category_id

        	);


        	$catproducts = DB::select("select products.*,categories.category_id,categories.category_name,categories.category_slug from products,categories,products_categories where products.product_id=products_categories.product_id and categories.category_id=products_categories.category_id and categories.parent_category_id=$value->category_id and products.is_featured=1 limit 16");


   //      	echo '<pre>';
   // print_r($catproducts);
   // echo '</pre>';

   $products = json_decode(json_encode($catproducts), true);

        $temp['products']=$products;

   array_push($finalcatproducts,$temp);


}

 // echo '<pre>';
 //   print_r($finalcatproducts);
 //   echo '</pre>';


 //        exit();

        return $finalcatproducts;


    }


    function get_product_details($product_slug){

     // $productdetails = DB::table('products')->where('product_slug',$product_slug)
     //    ->select('*')
     //    ->get();


    	$productdetails = DB::select("select products.*,categories.category_id,categories.category_name,categories.category_slug from products,categories,products_categories where products.product_id=products_categories.product_id and categories.category_id=products_categories.category_id and products.product_slug='$product_slug'");

        //print_r($productdetails);

        return $productdetails;

    }


    function get_category_tree($categoryid){

     $categorytree = DB::select("SELECT T2.category_id, T2.category_name, T2.category_slug
FROM (
    SELECT
        @r AS _id,
        (SELECT @r := parent_category_id FROM categories WHERE category_id = _id) AS parent_id,
        @l := @l + 1 AS lvl
    FROM
        (SELECT @r := $categoryid, @l := 0) vars,
        categories h
    WHERE @r <> 0) T1
JOIN categories T2
ON T1._id = T2.category_id
ORDER BY T1.lvl DESC");

        //print_r($productdetails);

        return $categorytree;

    }



    function get_featured_products(){


     $featured = DB::select("select products.*,categories.category_id,categories.category_name,categories.category_slug from products,categories,products_categories where products.product_id=products_categories.product_id and categories.category_id=products_categories.category_id and products.is_featured=1 limit 10");

        //print_r($productdetails);

        return $featured;


    }

    function get_top_deals(){
      
       $topdeals = DB::select("select products.*,categories.category_id,categories.category_name,categories.category_slug from products,categories,products_categories where products.product_id in (select product_id from products_categories group by product_id) and categories.category_id=products_categories.category_id and products.top_deals=1 and products.is_featured=1 limit 16");

        //print_r($productdetails);

        return $topdeals;

    }


    function get_category_by_slug($category_slug){

     $speccat = DB::table('categories')->where('category_slug',$category_slug)
        ->select('*')
        ->get();

        return $speccat;

    }

    function get_products_by_category_id($catid){

          $products = DB::table('products')
        ->where('categories.category_id',$catid)->where('products.product_price','!=','')
        ->Join('products_categories', 'products.product_id','=', 'products_categories.product_id')
        ->Join('categories', 'categories.category_id', '=', 'products_categories.category_id')
        ->select('products.*','categories.category_id','categories.category_name','categories.category_slug')->orderby('is_featured','desc')
        ->paginate(24);

        

        // $products = json_decode(json_encode($products), true);

        // echo $products->total();

        // print_r($products);exit();

        return $products;

    }


     function get_products_by_search($text,$catid){


     	if($catid=='All'){

     		     $products = DB::table('products')
        ->where('products.product_title', 'like', '%'.$text.'%')->where('products.product_price','!=','')
        ->Join('products_categories', 'products.product_id','=', 'products_categories.product_id')
        ->Join('categories', 'categories.category_id', '=', 'products_categories.category_id')
        ->select('products.*','categories.category_id','categories.category_name','categories.category_slug')->orderby('is_featured','desc')
        ->paginate(24);


     	}

        else{

        	  $products = DB::table('products')->where('products.product_price','!=','')
        ->where('categories.category_id',$catid)->where('products.product_title', 'like', '%'.$text.'%')
        ->Join('products_categories', 'products.product_id','=', 'products_categories.product_id')
        ->Join('categories', 'categories.category_id', '=', 'products_categories.category_id')
        ->select('products.*','categories.category_id','categories.category_name','categories.category_slug')->orderby('is_featured','desc')
        ->paginate(24);

        }

        

        // $products = json_decode(json_encode($products), true);

        // echo $products->total();

        // print_r($products);exit();

        return $products;

    }
}
