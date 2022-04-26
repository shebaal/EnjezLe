<?php

namespace App\Http\Controllers\Seeker;

use App\Models\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile=profile::all();
        return view('website.SeekerPanal.personalinfo.index',['data'=>$profile]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.SeekerPanal.personalinfo.create');
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
            'first_name'=>['required'],
            'last_name'=>['required'],
            'image'=>['mimes:jpg,png,jpeg','size:512'],
            'phone'=>['required','regex:/^(009677)[0-9]{8}$/'],
            'country'=>['required'],
            'major'=>['required'],
            'Job_title'=>['required'],
            'describe'=>['required','min:70','max:250']


        ],[
            'first_name.required'=>'يرجى ادخال الاسم الاول',
            'last_name.required'=>'يرجى ادخال اللقب',
            'phone.required'=>'يرجى ادخال رقم التلفون ',
            'country.required'=>'يرجى ادخال الدولة ',
            'major.required'=>'يرجى ادخال الاسم التخصص',
            'Job_title.required'=>'يرجى ادخال المسمي الوظيفي ',
            'describe.required'=>'يرجى ادخال وصف عنك',
            'image.size'=>'حجم الصوره يجب ان يكون اقل من 512 كيلوبايت',
            'image.mimes'=>'jpg او png او jpeg يجب ان تكون الصوره من صيغة',
            'describe.min'=>'يجب ان يكون الوصف اكثر  من 70 حرف', 
            'describe.max'=>'يجب ان يكون الوصف اقل من 250 حرف',
            'phone.required'=>' يرجى ادخال رقم التلفون بشكل صحيح حجمه 14رقم ويبدا ب009677 ',           
        ]);
        
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $profile = profile::create(['first_name'=>$request->first_name,'last_name'=>$request->last_name,
        'phone'=>$request->phone,'gander'=>$request->gander,
        'country'=>$request->country,'major'=>$request->major,
        'Job_title'=>$request->Job_title,'image'=>$imageName,'describe'=>$request->describe]);
       
         return redirect('personalinfo')->with('completed', 'it has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile=profile::find($id);
        return view('website.SeekerPanal.personalinfo.show',['data'=>$profile]);
    }

    public function edit($id)
    {
        $profile=profile::find($id);
        return view('website.SeekerPanal.personalinfo.edit',['data'=>$profile]);
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
        $profile = profile::where('id',$id)->update(['first_name'=>$request->first_name,'last_name'=>$request->last_name,
        'phone'=>$request->phone,'gander'=>$request->gander,
        'country'=>$request->country,'major'=>$request->major,
        'Job_title'=>$request->Job_title,'image'=>$imageName,'describe'=>$request->describe]);
        return redirect('/personalinfo')->with('completed', ' ithas been saved!');

    }

  
    public function destroy($id)
    {
        $old=profile::where('id',$id)->value('status');
        profile::where('id',$id)->update(['status'=>($old==1)? 0 :1]);
        return redirect('/personalinfo')->with('completed', 'it has been deleted');

    }
}