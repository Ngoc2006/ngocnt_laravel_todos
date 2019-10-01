<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  var $list = array(
    //     array(
    //         "name" => 'hoc lap trinh',
    //         "info" => 'hoc lap trinh',
    //         "createdAt" => 123456789,
    //         "updatedAt" => 123456789
    //     ),
    //     array(
    //         "name" => 'hoc lap trinh',
    //         "info" => 'hoc lap trinh',
    //         "createdAt" => 123456789,
    //         "updatedAt" => 123456789
    //     ),
    //     array(
    //         "name" => 'hoc HTML',
    //         "info" => 'hoc HTML',
    //         "createdAt" => 123456789,
    //         "updatedAt" => 123456789
    //     ),
    //     array(
    //         "name" => 'hoc Code Base',
    //         "info" => 'hoc Code Base',
    //         "createdAt" => 123456789,
    //         "updatedAt" => 123456789
    //     )
    // );


    public function index()
    {
        // $list = DB::table('todos')->get();
        $list = Todo::get();
        //dd($list); //tương đương vs var dump->die của php
        return view('todo.index')->with('list', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // $data = request()->all();   // get all du lieu (token, method,..)
         $data['name'] = request()->input('name');
         $data['info'] = request()->input('info');
         $data['createdAt']= time();
         $data['updatedAt']= time();

         array_push($this->list, $data);
         return view('todo.index')->with('list', $this->list);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "show: ".$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('todo.edit')->with('id', $id);
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
        return "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "destroy";
    }
}
