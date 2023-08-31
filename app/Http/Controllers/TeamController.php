<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //team
    function add_team(){
        return view('backend.add_team');
    }

    //insert team
    function insert_team(Request $request){

        $request->validate([
            'name'=>'required',
            'position'=>'required',
            'desp'=>'required',
            'image'=>'image | max:2048 | mimes:jpeg,png,jpg',
        ]);

        $uploaded_file = $request->image;
        $extension = $uploaded_file->getClientOriginalExtension();
        $file_name = substr(md5(time()), 0, 10).'.'.$extension;
        $uploaded_file->move("backend/img/team/", $file_name);

        Team::insert([
            'image'=>$file_name,
            'name'=>$request->name,
            'position'=>$request->position,
            'desp'=>$request->desp,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success' , 'Team Member Added Successfully'); 
    }

    //team list
    function teams(){
        $teams = Team::get();
        return view('backend.team',[
            'teams'=>$teams,
        ]);
    }

    //team delete
    function teams_delete($id){
        $team_images = Team::find($id);
        $team_images->image;
        @unlink('backend/img/team/'.$team_images->image);

        Team::find($id)->delete();

        return back()->with('delete', 'Team Deleted Successfully!');
    }

    //team edit page view
    function edit_team($id){
        $teams = Team::find($id);
        return view('backend.edit_team',[
            'teams'=>$teams,
        ]);
    }

    function update_team(Request $request){
        $request->validate([
            'name'=>'required',
            'position'=>'required',
            'desp'=>'required',
        ]);
        if($request->image != ''){

        $team_images = Team::find($request->id);
        $team_images->image;
        @unlink('backend/img/team/'.$team_images->image);
        

        $uploaded_file = $request->image;
        $extension = $uploaded_file->getClientOriginalExtension();
        $file_name = substr(md5(time()), 0, 10).'.'.$extension;
        $uploaded_file->move("backend/img/team/", $file_name);

            Team::find($request->id)->update([
                'image'=>$file_name,
                'name'=>$request->name,
                'position'=>$request->position,
                'desp'=>$request->desp,
                'updated_at'=>Carbon::now(),
            ]);
            return redirect('/teams')->with('updated' , 'Team Member Updated Successfully');

        }else{
                 Team::find($request->id)->update([
                'name'=>$request->name,
                'position'=>$request->position,
                'desp'=>$request->desp,
                'updated_at'=>Carbon::now(),
            ]);
        }
        
        return redirect('/teams')->with('updated' , 'Team Member Updated Successfully');

    }

}
