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
    public function index()
    {
        //
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


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
          'spreaddhouse' => $request->get('spreaddhouse'),
          'spreaddarea' => $request->get('spreaddarea'),
          'spreaddpost' => $request->get('spreaddpost'),
          'spreadddist' => $request->get('spreadddist'),
          'spreadddpostal' => $request->get('spreadddpostal'),
          'speraddvillage' => $request->get('speraddvillage'),
          'speraddpostal' => $request->get('speraddpostal'),
          'speraddstation' => $request->get('speraddstation'),
          'speradddist' => $request->get('speradddist')

        ]);

        $stu_info_new->save();
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
