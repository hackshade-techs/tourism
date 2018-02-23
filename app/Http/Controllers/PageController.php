<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;
use App\Models\Transport;
use App\Models\Accomodation;

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
  $accomodations = Accomodation::all();
  return view('pages.accomodation',compact('accomodations'));
}
public function transport()
{


  $transports = Transport::all();
  return view('pages.transport',compact('transports'));
}

public function single_transport($id)

{

//  $transport = Transport::find($id);
     $transport = Transport::find($id);

  return view('pages.single_transport',compact('transport'));

}

public function plantrip()
{
  return view('pages.plan_trip');
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
