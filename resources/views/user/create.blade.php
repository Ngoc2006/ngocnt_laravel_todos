@extends('layouts.master')
@section('content')
<div class="container">
    <form action="{{ route('users.store') }}" method="POST" class="" role="form">
            @csrf
            <div class="form-group">
                <legend>Add user</legend>
            </div>
            <div class="form-group">
                <label class="control-label" for="user">User:</label>
                <input name="name" type="text" class="form-control" id="user" placeholder="Enter user">
            </div>
            <div class="form-group">
                <label class="control-label" for="user">Email:</label>
                <textarea name="email" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label class="control-label" for="user">Password:</label>
                <textarea name="password" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label class="control-label" for="user">Trạng thái:</label>
                <select name="status" class="form-control">
                    <option value="0">Đang làm</option>
                    <option value="1">Chưa làm</option>
                    <option value="2">Đã làm</option>
                </select>
            </div>
            <div class="form-group">
                <div class="">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
</div>
@endsection