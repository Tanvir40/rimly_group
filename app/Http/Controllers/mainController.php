<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aboutus;
use App\Models\slider;
use App\Models\websetup;

class mainController extends Controller
{

    public function about_us(){
        $aboutus = null;
        if (aboutus::where("id", 1)->exists()) {
           $aboutus = aboutus::find(1);
        }
        return view("backend.aboutus", compact("aboutus"));
    }


    public function webset_up(){
        $websetup = null;
        if (websetup::where("id", 1)->exists()) {
           $websetup = websetup::find(1);
        }
        return view("backend.websetup", compact("websetup"));
    }



    public function websetup_insert(Request $req){


       if ($req->isMethod("post")) {

            if (websetup::where("id", 1)->exists()) {
                $req->validate([
                    "email" => "required",
                    "phone" => "required",
                    "address" => "required",
                    "description" => "required",
                ]);
                $exfile = null;
                if ($req->hasFile("icon")) {
                    $req->validate([
                        "icon" => "required|image"
                    ]);
                    $websetup = websetup::find(1);
                    @unlink($websetup->name);
                    $file               = $req->icon;
                    $ext                = $file->getClientOriginalExtension();
                    $exfile             = substr(md5(time()), 0, 10).".".$ext;
                }

            
                $websetup           = websetup::find(1);
                $websetup->email    = $req->email;
                $websetup->phone    = $req->phone;
                $websetup->address  = $req->address;
                $websetup->fb       = $req->fb;
                $websetup->tw       = $req->tw;
                $websetup->ins      = $req->ins;
                $websetup->ldin     = $req->ldin;
                $websetup->description  = $req->description;
                if (isset($exfile)) {
                   $websetup->icon = "Image/icon/".$exfile;
                   $file->move("Image/icon/", $exfile);
                }
                $websetup->save();
                return redirect()->back()->with("success_update","About us update successfully!");

            }else{

                $req->validate([
                    "email" => "required",
                    "phone" => "required",
                    "address" => "required",
                    "description" => "required",
                    "icon" => "required|image"
                ]);

                $file               = $req->icon;
                $ext                = $file->getClientOriginalExtension();
                $exfile             = substr(md5(time()), 0, 10).".".$ext;

                $websetup           = new websetup();
                $websetup->email    = $req->email;
                $websetup->phone    = $req->phone;
                $websetup->address  = $req->address;
                $websetup->fb       = $req->fb;
                $websetup->tw       = $req->tw;
                $websetup->ins      = $req->ins;
                $websetup->ldin = $req->ldin;
                $websetup->description  = $req->description;
                $websetup->icon = "Image/icon/".$exfile;
                $websetup->save();
                $file->move("Image/icon/", $exfile);
                return redirect()->back()->with("success_insert","About us added successfully!");

            }
        }


    }




    public function about_insert(Request $req){

        if ($req->isMethod("post")) {
            if (aboutus::where("id", 1)->exists()) {
                $aboutus = aboutus::find(1);
                $aboutus->description = $req->description;
                $aboutus->save();
                return redirect()->back()->with("success_update","About us update successfully!");
            }else{
                $aboutus = new aboutus();
                $aboutus->description = $req->description;
                $aboutus->save();
                return redirect()->back()->with("success_insert","About us added successfully!");
            }
        }
    }


/*For Slider */

    public function slider_add(){
         return view("backend.slider");
    }

    public function slider_list(){
        $slider = null;
        if (slider::count() > 0) {
            $slider = slider::get();
        }
        return view("backend.sliderlist", compact("slider"));
    }


    public function slider_del($id){
        slider::find($id)->delete();
        return redirect()->back();
    }

    public function slider_up($id){
        return view("backend.sliderupdate", compact("id"));
    }


    public function sli_Img_Up(Request $req){

        if ($req->isMethod("post")) {

            $req->validate([
                //"tea_img" => "required|mimes:jpg,png|max:300",
                "image" => "required|image"
            ]);

            $slider = slider::find($req->id);
            @unlink($slider->name);

            $file   = $req->image;
            $ext    = $file->getClientOriginalExtension();
            $exfile = substr(md5(time()), 0, 10).".".$ext;

            $slider = slider::find($req->id);
            $slider->name = "Image/slider/".$exfile;
            $slider->save();
            $file->move("Image/slider/", $exfile);
            return redirect("/sliderlist");

         }
        
    }







    public function slider_upload(Request $req){
         

         if ($req->isMethod("post")) {

            $req->validate([
                //"tea_img" => "required|mimes:jpg,png|max:300",
                "image" => "required|image"
            ]);

            $file   = $req->image;
            $ext    = $file->getClientOriginalExtension();
            $exfile = substr(md5(time()), 0, 10).".".$ext;

            $slider = new slider();
            $slider->name = "Image/slider/".$exfile;
            $slider->save();

            $file->move("Image/slider/", $exfile);

            return redirect()->back()->with("image_sucess","Image uploaded successfully!");

         }


    }




}
