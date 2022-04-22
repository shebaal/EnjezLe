<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;
use App\Models\Section;


class ProjectsController extends Controller
{
    //


    public function create(){
        $sections=Section::where('status',1)->get();

        return response($sections);


       // return view('website.create_project')->with('sections',$sections);
    }

   public function store(Request $request){
       $new_project=new Projects();
       $new_project->title=$request->title;
       $new_project->description=$request->desc;
       $new_project->file='default.pdf';
       $new_project->save();
       //if($new_project->save())
     //  return view('website.result')->with(['success'=>'project created successful']);
       //return view('website.result')->with(['error'=>'can not create project']);
       

   }



}
