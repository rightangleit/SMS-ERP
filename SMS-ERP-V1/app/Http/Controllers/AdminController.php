<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $student, $seeprofile;
    public function index()
    {

        $student= student::all()->toArray();
        //$rId = $request->get('rId');
       
        $student=student::where('id',1)->get();
        //return view('Admin.show_info',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.stu_info_new');
    }
    public function show_all()
    {
        return view('Admin.show_info_all');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $spreaddhouse= $request->get('spreaddhouse');
        $spreaddarea= $request->get('spreaddarea');
        $spreaddpost= $request->get('spreaddpost');
        $spreadddist= $request->get('spreadddist');
        $spreaddstation=$request->get('spreaddstation');
        $spreadddpostal= $request->get('spreadddpostal');
        $speraddvillage= $request->get('speraddvillage');
        $speraddpost= $request->get('speraddpost');
        $speraddstation= $request->get('speraddstation');
        $speradddist= $request->get('speradddist');
       // $rId = $request->get('rId');
        

        $speradd='House NO :'.$spreaddhouse.','.'Area Name :'.$spreaddarea.','.'Post Office :'.$spreaddpost.','.'District :'.$speradddist.','.'Police Station :'.$spreaddstation.','.'Postal Code :'.$spreadddpostal;
        $spreadd ='Village :'.$speraddvillage.','.'Post Office :'.$speraddpost.','.'Police Station :'.$speraddstation.','.'District :'.$speraddstation;



        $stu_info_new = new student([
          'fname' => $request->get('fname'),
          'lname' => $request->get('lname'),
          'gname' => $request->get('gname'),
          'goccup' => $request->get('goccup'),
          'gphone' => $request->get('gphone'),
          'sphone' => $request->get('sphone'),
          'sdob' => $request->get('sdob'),
          'sblood' => $request->get('sblood'),
          'sclass' => $request->get('sclass'),
          'ssection' => $request->get('ssection'),
          'sgroup' => $request->get('sgroup'),
          'sshift' => $request->get('sshift'),
          'speradd'=>$speradd,
          'spreadd'=>$spreadd
          
          

        ]);

        $stu_info_new->save();

        return redirect('stu_info_new/create');
        //show($rId);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //$student = student::all()->toArray();
        if ($request->isMethod('post')) 
        {
            //dd($request);
            $id = $request->get('rId');
            $student = student::where('id',$id)->get();
            //return view('Admin.show_info',compact('student'));
            //return $student;
            return response()->json($student);
        }
        else
        {
             $student = new student();
            return view('Admin.show_info',compact('student'));
        }
       
    }

    public function show_info_class(Request $request){
        $sclass = $request->get('sclass');
        if($sclass=="Six"){
            $student = student::where('sclass',6)->get();
            return response()->json($student);
            //return view('Admin.show_info_all',compact('student'));
        }
         else if($sclass=="Seven"){
            $student = student::where('sclass',7)->get();
            return response()->json($student);
            //return view('Admin.show_info_all',compact('student'));
        }
         else if($sclass=="Eight"){
            $student = student::where('sclass',8)->get();
            return response()->json($student);
            //return view('Admin.show_info_all',compact('student'));
        }
         else if($sclass=="Nine"){
            $student = student::where('sclass',9)->get();
            return response()->json($student);
            //return view('Admin.show_info_all',compact('student'));
        }
         else if($sclass=="Ten"){
            $student = student::where('sclass',10)->get();
            return response()->json($student);
            //return view('Admin.show_info_all',compact('student'));
        }
        

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        
            $student = student::find($id);
            $student->fname = $request->get('fname');
            $student->lname = $request->get('lname');
            $student->gname = $request->get('gname');
            $student->goccup = $request->get('goccup');
            $student->gphone = $request->get('gphone');
            $student->sphone= $request->get('sphone');
            $student->sdob = $request->get('sdob');
            $student->sblood = $request->get('sblood');
           
            $stu = $student->save(); 
            //return view('Admin.show_info',compact('student'));
            //return $student;
            return response()->json($student);
        
    }
    public function update1(Request $request, $id)
    {
       
            //return $request;            
            $student = student::find($id);
            $student->sclass = $request->get('sclass');
            $student->ssection = $request->get('ssection');
            $student->sgroup = $request->get('sgroup');
            $student->sshift = $request->get('sshift');
          
            
           
            $stu = $student->save(); 
            //return view('Admin.show_info',compact('student'));
            //return $student;
            
             return response()->json($student);
        
    }
    public function update2(Request $request, $id)
    {
       
            //return $request;            
            $student = student::find($id);
            $student->spreadd = $request->get('speradd');
            $student->speradd = $request->get('spreadd');
          
            
           
            $stu = $student->save(); 
            //return view('Admin.show_info',compact('student'));
            //return $student;
            
             return response()->json($student);
        
    }

    /**
     * Remove the specified resource from storage.
     *il em
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
