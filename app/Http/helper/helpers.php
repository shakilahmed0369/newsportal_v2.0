<?php

use App\Models\Ad;
use App\Models\Category;
use App\Models\ContactInfo;
use App\Models\News;
use App\Models\HomeSectionElement;
use App\Models\Webinfo;
use App\Models\Webproperties;


//uniq id generator
function uId($min,$max){
  $numbers = range($min, $max);
  shuffle($numbers);
  return $final = array_slice($numbers, 0, 200);
}
  
//bangla number convener
function bnNum($number)
{
  $bn = ["১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০", "ক"];
  $en = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "a"];
    return str_replace($en, $bn, $number);
}

// Slug generator
function makeSlug($string, $separator = '-') {
  $re = "/(\\s|\\".$separator.")+/mu";
  $str = @trim($string);
  $subst = $separator;
  $result = preg_replace($re, $subst, $str);
  return $result;
}

// helper query for (frontend) home index
function mainNews($catId, $offset, $limit){
  $news = News::with('category')->where('category_id', $catId)->where('status', 1)->offset($offset)->limit($limit)->latest()->get();
 
  return $news;
}
// breaking news
function breakingNews(){
  $news = News::where('on_breaking', 1)->orderBy('id', 'DESC')->get();
  return $news;
}
//ads
function ad(){
  $ad = Ad::all();
  return $ad;
}
//Webproperties
function webLogo(){
  $weblogo = Webproperties::first();
  return $weblogo;
}

//webinfo
function webInfo(){
  $webinfo = Webinfo::first();
  return $webinfo;
}

//webinfo
function contactInfo(){
  $contacinfo = ContactInfo::first();
  return $contacinfo;
}

function footer_cat(){
  $contacinfo = Category::all();
  return $contacinfo;
}




