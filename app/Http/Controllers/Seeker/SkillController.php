<?php

namespace App\Http\Controllers;

use App\Models\skill;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skill=skill::all();
        return view('website.SeekerPanal.skills.index',['data'=>$skill]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.SeekerPanal.skills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::validate($request->all(),[
            'title'=>['required','min:3','max:25'],
           


        ],[
            'title.required'=>'يرجى ادخال العنوان',
            'title.min'=>'جب ان يكون العنوان اكبر من 3 حرف', 
            'title.max'=>'يجب ان يكون العنوان اقل من 25 حرف', 
            

           
        ]);
        
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $skill = skill::create(['title'=>$request->title,'image'=>$imageName]);
       
         return redirect('skills')->with('completed', 'it has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $skill=skill::find($id);
        return view('website.SeekerPanal.skills.show',['data'=>$skill]);
    }

    public function edit($id)
    {
        $skill=skill::find($id);
        return view('website.SeekerPanal.skills.edit',['data'=>$skill]);
    }
    public function update(Request $request, $id)
    {
        // $storeData = $request->validate([
        //     'title' => 'required|max:255',
        //     'describe' => 'required|max:500',
        //   //  'image' => 'required',
        //     'status' => 'required',
        // ]);
        if($request->image !=""){
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        }else{
            $imageName =$request->oldimg; 
        }
        $skill = skill::where('id',$id)->update(['title'=>$request->title,'image'=>$imageName,]);
        return redirect('/skills')->with('completed', ' ithas been saved!');

    }

  
    public function destroy($id)
    {
        $old=skill::where('id',$id)->value('status');
        skill::where('id',$id)->update(['status'=>($old==1)? 0 :1]);
        return redirect('/skills')->with('completed', 'it has been deleted');

    }
}