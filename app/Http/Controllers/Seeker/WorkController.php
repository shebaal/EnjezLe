<?php

namespace App\Http\Controllers\Seeker;
use App\Http\Controllers\Controller;
use App\Models\work;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $work=work::where([['status',1]])->get();
        return view('website.SeekerPanal.works.index',['data'=>$work]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.SeekerPanal.works.create');
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
            'describe'=>['required','min:70','max:250'],
            'date_end'=>['required']


        ],[
            'title.required'=>'يرجى ادخال العنوان',
            'title.min'=>'جب ان يكون العنوان اكبر من 3 حرف', 
            'title.max'=>'يجب ان يكون العنوان اقل من 25 حرف', 
            'describe.required'=>'يرجى ادخال الوصف',
            'describe.min'=>'يجب ان يكون الوصف اكبر  من 70 حرف', 
            'describe.max'=>'يجب ان يكون الوصف اقل من 250 حرف',
            'date_end.required'=>'يرجى ادخال التاريخ',

           
        ]);
        
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $work = work::create(['title'=>$request->title,'date_end'=>$request->date_end,'image'=>$imageName,'describe'=>$request->describe]);
       
         return redirect('works')->with('completed', 'it has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $work=work::find($id);
        return view('website.SeekerPanal.works.show',['data'=>$work]);
    }

    public function edit($id)
    {
        $work=work::find($id);
        return view('website.SeekerPanal.works.edit',['data'=>$work]);
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
        $work = work::where('id',$id)->update(['title'=>$request->title,'date_end'=>$request->date_end,'image'=>$imageName,'describe'=>$request->describe]);
        return redirect('/works')->with('completed', ' ithas been saved!');

    }

  
    public function destroy($id)
    {
        $old=work::where('id',$id)->value('status');
        work::where('id',$id)->update(['status'=>($old==1)? 0 :1]);
        return redirect('/works')->with('completed', 'it has been deleted');

    }
}
