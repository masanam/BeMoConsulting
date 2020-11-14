<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Menus;
use App\Models\Admin\Sliders;
use App\Models\Admin\Contents;
use App\Models\Admin\Contacts;
use App\Models\Admin\Settings;

use Illuminate\Support\Facades\Mail;
use App\Mail\saveContact;

class PagesController extends Controller
{
    public function viewLanding()
    {
      $menus = Menus::get();
      $settings = Settings::get();
      $sliders = Sliders::where('orderid',1)->get();
      $contents = Contents::where('category_id',1)->get();
      $tags = Menus::where('orderid',1)->get();


      return view('pages.landing',compact('menus','sliders','contents','tags','settings'));
    }


    public function viewContact()
    {
      $menus = Menus::get();
      $settings = Settings::get();
      $sliders = Sliders::where('orderid',2)->get();
      $contents = Contents::where('category_id',2)->get();
      $tags = Menus::where('orderid',2)->get();

      return view('pages.contact',compact('menus','sliders','contents','tags','settings'));
    }

    public function UpdateContact(Request $request)
    {
        
        $this->validate($request, [
            'name'    => 'required',
            'email'   => 'required|email',
            'content' => 'required',
        ]);


        $input = $request->all();
        $contact =  \App\Models\Admin\Contacts::create($input);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content,  
          ); 
    
          try {
            $emailContact = 'masanam@gmail.com';
            Mail::to($emailContact)->send(new saveContact($data));
        } catch (\Exception $ex) {
        }

        $menus = Menus::get();
        $sliders = Sliders::where('orderid',2)->get();
        $contents = Contents::where('category_id',2)->get();
  
        return view('pages.contact',compact('menus','sliders','contents'));
    }  
    
}
