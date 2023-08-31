<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ourbrands;
use App\Models\bannersection;

class ourbrandsController extends Controller
{


    /*For Our Brands */

    public function our_Brands(){
        return view("backend.ourbrandsadd");
    }


    public function banner_section(){
        $bannersection = null;
        if (bannersection::count() > 0) {
            $bannersection = bannersection::find(1);
        }
        
        return view("backend.bannersection", compact("bannersection"));
    }

    public function banner_section_update(Request $req){

        if ($req->isMethod("post")) {

            if (bannersection::where("id", 1)->exists()) {
                    $req->validate([
                        "name" => "required",
                        "description" => "required"
                    ]);

                    $exfile = null;

                    if ($req->hasFile("image")) {
                        $req->validate([
                            "image" => "required|image"
                        ]);
                        $bannersection = bannersection::find(1);
                        @unlink($bannersection->image);
                        $file               = $req->image;
                        $ext                = $file->getClientOriginalExtension();
                        $exfile             = substr(md5(time()), 0, 10).".".$ext;
                    }

                    $bannersection           = bannersection::find(1);
                    $bannersection->name    = $req->name;
                    $bannersection->description  = $req->description;
                    if (isset($exfile)) {
                       $bannersection->image = "Image/banner/".$exfile;
                       $file->move("Image/banner/", $exfile);
                    }
                    $bannersection->save();
                    return redirect()->back()->with("success_update","Banner section update successfully!");

                }else{

                    $req->validate([
                        "name" => "required",
                        "description" => "required",
                        "image" => "required|image"
                    ]);

                    $file               = $req->image;
                    $ext                = $file->getClientOriginalExtension();
                    $exfile             = substr(md5(time()), 0, 10).".".$ext;

                    $bannersection           = new bannersection();
                    $bannersection->name    = $req->name;
                    $bannersection->description  = $req->description;
                    $bannersection->image = "Image/banner/".$exfile;
                    $bannersection->save();
                    $file->move("Image/banner/", $exfile);
                    return redirect()->back()->with("success_insert","Banner added successfully!");

                }
        }
    }
    





    public function ourBrnad_insert(Request $req){
         if ($req->isMethod("post")) {
            $req->validate([
                //"tea_img" => "required|mimes:jpg,png|max:300",
                "image" => "required|image"
            ]);
            $file   = $req->image;
            $ext    = $file->getClientOriginalExtension();
            $exfile = substr(md5(time()), 0, 10).".".$ext;
            $slider = new ourbrands();
            $slider->name = "Image/brands/".$exfile;
            $slider->save();
            $file->move("Image/brands", $exfile);
            return redirect()->back()->with("image_sucess","Image uploaded successfully!");
         }

    }


    public function brand_list(){
        $ourbrands = null;
        if (ourbrands::count() > 0) {
            $ourbrands = ourbrands::get();
        }
        return view("backend.ourbrandslist", compact("ourbrands"));
    }

    public function ourbrands_up($id){
        return view("backend.ourbrandsupdate", compact("id"));
    }

    public function brands_update(Request $req){

        if ($req->isMethod("post")) {
            $req->validate([
                //"tea_img" => "required|mimes:jpg,png|max:300",
                "image" => "required|image"
            ]);
            $ourbrands = ourbrands::find($req->id);
            @unlink($ourbrands->name);

            $file   = $req->image;
            $ext    = $file->getClientOriginalExtension();
            $exfile = substr(md5(time()), 0, 10).".".$ext;

            $ourbrands = ourbrands::find($req->id);
            $ourbrands->name = "Image/brands/".$exfile;
            $ourbrands->save();
            $file->move("Image/brands/", $exfile);
            return redirect("/brandlist");
         }

    }
    

    public function ourbrand_del($id){
        ourbrands::find($id)->delete();
        return redirect()->back();
    }













}
