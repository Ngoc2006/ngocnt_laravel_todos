@extends('layouts.master')
@section('content')
<div class="container">
    
    <form action="{{route('todos.store')}}" method="POST" class="" role="form">
        @csrf {{--  tránh việc lặp lại form --}}
        <div class="form-group">
            <legend>Create todo</legend>
        </div>
        <div class="form-group">
            <label class="control-label" for="todo">Todo:</label>
            <input name="title" type="text" class="form-control" id="name" placeholder="Enter todo">
        </div>
        <div class="form-group">
            <label class="control-label" for="todo">Mô tả:</label>
            <textarea name="content" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label class="control-label" for="todo">Trạng thái:</label>
            <select name="status" class="form-control">
                <option value="0">Đang làm</option>
                <option value="1">Chưa làm</option>
                <option value="2">Đã làm</option>
            </select>
        </div>

        <div class="form-group">
            <div class="">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </div>
    </form>
    {{-- <a href="{{route('todos.index')}}" class="btn btn-danger">Back</a> --}}
</div>
@endsection


{{-- Giao dien trang create --}}