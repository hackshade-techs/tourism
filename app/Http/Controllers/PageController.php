<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;

class PageController extends Controller
{
  public function index($slug)
  {
      $page = Page::findBySlug($slug);

      if (!$page)
      {
          abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
      }

      $this->data['title'] = $page->title;
      $this->data['page'] = $page->withFakes();

      return view('pages.'.$page->template, $this->data);
  }


public function about(){

  return view('pages.about_us');


}
public function contact()
{
  return view('pages.contact_us');
}
public function accomodation()
{
  return view('pages.accomodation');
}
public function transport()
{
  return view('pages.transport');
}

public function plantrip()
{
  return view('pages.plantrip');
}
public function scenery(){
  return view('pages.scenery');
}
public function safaris()
{
  return view('pages.safaris');
}
public function single_safaris(){
  return view('pages.single_safaris');
}

}
