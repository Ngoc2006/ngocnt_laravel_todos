<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = User::get();
        return view('user.index')->with('list', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');
        $status= $request->get('status');
        // Lưu dữ liệu vào đối tượng $user
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->status = $status;
        $user->save();
        // Chuyển hướng về trang danh sách
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = User::find($id);
        return view('user.show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Lấy dữ liệu với $id
        $item = User::find($id);
        // Gọi đến view edit
        return view('user.edit')->with('item', $item);
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
        // Nhận dữ liệu từ $request
        $name = $request->get('name');
        $email = $request->get('email');

        // dump($id);
        // dump($name);
        // dump($email);

        // dd();
        
        // Tìm user tương ứng với id
        $user = User::find($id);
        //Cập nhật dữ liệu mới
        $user->name = $name;
        $user->email = $email;


        // Lưu dữ liệu
        $user->save();
        //Chuyển hướng đến trang danh sách
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Xoá với id tương ứng 
        User::destroy($id);
        // Chuyển hướng về trang danh sách
        return redirect()->route('users.index');
    }
}
