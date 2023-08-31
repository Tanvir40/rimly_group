<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\page;
use App\Models\narbar;
use App\Models\OurClient;
use App\Models\subnavbar;
use App\Models\websetup;


//config
use App\Models\User;
//=======
use Carbon\Carbon;
//endconfig


use Illuminate\Support\Str;
use App\Mail\messageMail;
use Illuminate\Support\Facades\Mail;

class pageController extends Controller
{

    public function send_mail(Request $req){

        $data['name']       = $req->name;
        $data['email']      = $req->email;
        $data['subject']    = $req->subject;
        $data['message']    = $req->message;
        Mail::to("ahmedsannycse@gmail.com")->send(new messageMail($data));
        return response()->json([
            "status" => "1"
        ]);
    }



    public function profile_user(){

        $User = null;
        if (user::count() > 0) {
            $User = User::find(1);
        }
        return view("backend.profile", compact("User"));
    }


    public function profile_update(Request $req){

        if ($req->isMethod("post")) {

            if (User::where("id", 1)->exists()) {

                $req->validate([
                    "name" => "required",
                    "email" => "required|email",
                    "password" => "required"
                ]);

                $user               = User::find(1);
                $user->name         = $req->name;
                $user->email        = $req->email;
                $user->password     = bcrypt($req->password);
                $user->save();
                return redirect()->back()->with("success_update","Profile added successfully!");

            }else{
                $req->validate([
                    "name" => "required",
                    "email" => "required|email",
                    "password" => "required"
                ]);

                $user               = new user();
                $user->name         = $req->name;
                $user->email        = $req->email;
                $user->password     = bcrypt($req->password);
                $user->save();
                return redirect()->back()->with("success_insert","Profile added successfully!");
            }
        }
    }





    /*For pages */

    public function page_create(){
       return view("backend.pagecreate");
    }

    public function page_insert(Request $req){
         if ($req->isMethod("post")) {
            $req->validate([
                "title" => "required|unique:pages",
                "slug" => "unique:pages",
                "description" => "required"
            ]);
            $page = new page();
            $page->title = $req->title;

            if (empty($req->slug)) {
               $page->slug = Str::slug($req->title);
            }else{
                $page->slug = Str::slug($req->slug);
            }

            $page->description = $req->description;
            $page->save();
            return redirect()->back()->with("insert_success","Image uploaded successfully!");
         }
    }

    public function page_list(){
        $page = null;
        if (page::count() > 0) {
            $page = page::get();
        }
        return view("backend.pagelist", compact("page"));
    }

    public function page_up($id){
        $page = null;
        if (page::count() > 0) {
            $page = page::find($id);
        }
        return view("backend.pageupdate", compact("page"));
    }


    public function page_update(Request $req){

        if ($req->isMethod("post")) {
            $req->validate([
                "title" => "required",
                "description" => "required"
            ]);

            $page = page::find($req->id);
            $page->title = $req->title;

            if (empty($req->slug)) {
               $page->slug = Str::slug($req->title);
            }else{
                $page->slug = Str::slug($req->slug);
            }

            $page->description = $req->description;
            $page->save();
            return redirect("/pagelist");

         }

    }


    public function page_del($id){
        page::find($id)->delete();
        return redirect()->back();
    }



    public function front_page($page){

        $narbar = null;
        if (narbar::count() > 0) {
         $narbar = narbar::get();
        }

        $websetup = null;
        if (websetup::count() > 0) {
            $websetup = websetup::find(1);
        }


        $page = page::where("slug", $page)->firstOrFail();
        return view("frontend.dynamic", compact("page","narbar","websetup"));
    }



    public function create_navbar(){
        return view("backend.createnavbar");
    }


    public function navbar_insert(Request $req){
        if ($req->isMethod("post")) {
            $req->validate([
                "name" => "required",
            ]);
            $narbar = new narbar();
            $narbar->name = $req->name;
            $narbar->link = $req->link;
            $narbar->save();
            return redirect()->back()->with("insert_success","Navbar created successfully!");
        }
    }






    public function subcreate_navbar(){
        $narbar = null;
        if (narbar::count() > 0) {
            $narbar = narbar::get();
        }
        return view("backend.subnavbarcreate", compact("narbar"));
    }

    public function subnavbar_insert(Request $req){

        if ($req->isMethod("post")) {
            $req->validate([
                "name" => "required",
                "navbar_id" => "required",
                "link" => "required"
            ]);

            $narbar = new subnavbar();
            $narbar->name = $req->name;
            $narbar->navbar_id = $req->navbar_id;
            $narbar->link = $req->link;
            $narbar->save();
            return redirect()->back()->with("insert_success","Navbar created successfully!");
        }

    }

    //nav list
    function nav_list(){
        $navlist = narbar::get();
        return view('backend.navlist',[
            'navlist'=>$navlist,
        ]);
    }

    //nav edit
    function edit_nav($id){
        $navlist = narbar::find($id);
        return view('backend.nav_edit',[
            'navlist'=>$navlist,
        ]);
    }

    //nav update
    function update_nav(Request $req){
        if ($req->isMethod("post")) {
            $req->validate([
                "name" => "required",
            ]);

            $narbar = narbar::find($req->id);
            $narbar->name = $req->name;
            $narbar->id = $req->id;
            $narbar->link = $req->link;
            $narbar->save();
            return redirect()->back()->with("success","Navbar Updated successfully!");
        }
    }

    // nav delete
     function nav_delete($id){
        narbar::find($id)->delete();
        subnavbar::where('navbar_id' , $id)->delete();
        return redirect()->back()->with("Deleted","Navbar Deleted successfully!");
    }


    //subnav list
    function subnav_list(){
        $subnavlist = subnavbar::get();
        $narbar = narbar::get();
        return view('backend.subnavlist',[
            'subnavlist'=>$subnavlist,
            'narbar'=>$narbar,
        ]);
    }

    //nav edit
    function edit_subnav($id){
        $subnavlist = subnavbar::find($id);
        $narbar = narbar::all();
        return view('backend.subnav_edit',[
            'subnavlist'=>$subnavlist,
            'narbar'=>$narbar,
        ]);
    }

    //nav update
    function update_subnav(Request $req){
        if ($req->isMethod("post")) {
            $req->validate([
                "name" => "required",
                "link" => "required",
            ]);

            $subnavbar = subnavbar::find($req->id);
            $subnavbar->name = $req->name;
            $subnavbar->navbar_id = $req->navbar_id;
            $subnavbar->link = $req->link;
            $subnavbar->save();
            return redirect()->back()->with("success","SubNavbar Updated successfully!");
        }
    }

    // nav delete
     function subnav_delete($id){
        subnavbar::find($id)->delete();
        return redirect()->back()->with("Deleted","SubNavbar Deleted successfully!");
    }


    //our clients
    //team
    function add_clients(){
        return view('backend.add_clients');
    }

    //insert team
    function insert_clients(Request $request){

        $request->validate([
            'name'=>'required',
            'position'=>'required',
            'desp'=>'required',
            'image'=>'image | max:2048 | mimes:jpeg,png,jpg',
        ]);

        if($request->image != ''){
        $uploaded_file = $request->image;
        $extension = $uploaded_file->getClientOriginalExtension();
        $file_name = substr(md5(time()), 0, 10).'.'.$extension;
        $uploaded_file->move("backend/img/clint/", $file_name);

        OurClient::insert([
            'image'=>$file_name,
            'name'=>$request->name,
            'position'=>$request->position,
            'desp'=>$request->desp,
            'created_at'=>Carbon::now(),
        ]);
            return back()->with('success' , 'Clint Added Successfully'); 

        }else{
            OurClient::insert([
                'name'=>$request->name,
                'position'=>$request->position,
                'desp'=>$request->desp,
                'created_at'=>Carbon::now(),
            ]);
            return back()->with('success' , 'Clint Added Successfully');  
        }
    }

    //team list
    function clients_list(){
        $OurClient = OurClient::get();
        return view('backend.OurClient',[
            'OurClient'=>$OurClient,
        ]);
    }

    //team delete
    function clients_list_delete($id){

        if(OurClient::where('id' , $id)->where('image' , 'NULL')){

        OurClient::find($id)->delete();

        return back()->with('delete', 'Clint Deleted Successfully!');

        }else{
            
            $client_images = OurClient::find($id);
            $client_images->image;
            @unlink('backend/img/clint/'.$client_images->image);

            OurClient::find($id)->delete();

            return back()->with('delete', 'Clint Deleted Successfully!');
        }
    }

}
