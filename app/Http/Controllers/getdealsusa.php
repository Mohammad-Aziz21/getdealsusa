<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\getdealsusa_model;

class getdealsusa extends Controller
{
    //


    function index(){

    //echo 'xdxdxdxdxd';
    $get = new getdealsusa_model();
    $allcategories=$get->getallcategories();
    $subcats=$get->getsubcats();
    $homepagecatproducts=$get->homepagecatproducts();
    $featuredproducts=$get->get_featured_products();
    $topdeals=$get->get_top_deals();
    return view('index',['allcategories'=>$allcategories,'homepagecatproducts'=>$homepagecatproducts,'featuredproducts'=>$featuredproducts,'topdeals'=>$topdeals,'subcats'=>$subcats]);
    }

    function product($product_slug){

    	//echo $product_slug;
    	$get = new getdealsusa_model();
    	$allcategories=$get->getallcategories();
    	$subcats=$get->getsubcats();
    	$product_details=$get->get_product_details($product_slug);
    	$categorytree=$get->get_category_tree($product_details[0]->category_id);
    	return view('product',['product_details'=>$product_details,'allcategories'=>$allcategories,'categorytree'=>$categorytree,'subcats'=>$subcats]);
    }


    function category($category_slug){

      $get = new getdealsusa_model();
      $allcategories=$get->getallcategories();
      $subcats=$get->getsubcats();
      $specificcat=$get->get_category_by_slug($category_slug);
      $categorytree=$get->get_category_tree($specificcat[0]->category_id);
      $productsbycat=$get->get_products_by_category_id($specificcat[0]->category_id);

   //    echo '<pre>';
   // print_r($productsbycat);
   // echo '</pre>';
   // exit();

      return view('category',['allcategories'=>$allcategories,'specificcat'=>$specificcat,'categorytree'=>$categorytree,'productsbycat'=>$productsbycat,'subcats'=>$subcats]);

    }

    function search($searchquery,$categoryid){

    	//echo $searchquery.$categoryid;exit();


    	$get = new getdealsusa_model();
      $allcategories=$get->getallcategories();
      $subcats=$get->getsubcats();
      $productsbycat=$get->get_products_by_search($searchquery,$categoryid);


      //print_r($productsbycat);

       return view('search',['allcategories'=>$allcategories,'productsbycat'=>$productsbycat,'subcats'=>$subcats,'text'=>$searchquery]);
    }

     public function about(){


      $get1 = new getdealsusa_model();
      $allcategories=$get1->getallcategories();
      $subcats=$get1->getsubcats();
      

      return view('about',['allcategories'=>$allcategories,'subcats'=>$subcats]);
    }


      public function terms(){


      $get1 = new getdealsusa_model();
      $allcategories=$get1->getallcategories();
      $subcats=$get1->getsubcats();
      

      return view('terms-condition',['allcategories'=>$allcategories,'subcats'=>$subcats]);
  }

    public function cookie_policy(){


      $get1 = new getdealsusa_model();
      $allcategories=$get1->getallcategories();
      $subcats=$get1->getsubcats();
      

      return view('cookie_policy',['allcategories'=>$allcategories,'subcats'=>$subcats]);
    }


    public function privacy_policy(){


      $get1 = new getdealsusa_model();
      $allcategories=$get1->getallcategories();
      $subcats=$get1->getsubcats();
      

      return view('privacy_policy',['allcategories'=>$allcategories,'subcats'=>$subcats]);
    }

  public function faq(){
      $get1 = new getdealsusa_model();
      $allcategories=$get1->getallcategories();
      $subcats=$get1->getsubcats();
      

      return view('faq',['allcategories'=>$allcategories,'subcats'=>$subcats]);
  }

  public function contact(){

      $get1 = new getdealsusa_model();
      $allcategories=$get1->getallcategories();
      $subcats=$get1->getsubcats();
      

      return view('contact',['allcategories'=>$allcategories,'subcats'=>$subcats]);

}

  public function sitemap(){

      $get1 = new getdealsusa_model();
      $allcategories=$get1->getallcategories();
      $subcats=$get1->getsubcats();
      

      return view('sitemap',['allcategories'=>$allcategories,'subcats'=>$subcats]);
    
  }



}
