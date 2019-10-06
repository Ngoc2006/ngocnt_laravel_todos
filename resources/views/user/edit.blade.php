@extends('layouts.master')
@section('content')
<div class="container">
<form action="{{route('users.update', $item->id)}}" method="post" class="" role="form">
        @csrf
            <input name="_method" type="hidden" value="PUT">
            {{--{{ method_field('PUT') }}--}}
            <div class="form-group">
                <legend>Update user</legend>
            </div>
            <div class="form-group">
                <label class="control-label" for="user">User:</label>
                <input name="name" type="text" value="{{ $item->name }}" class="form-control" id="todo" placeholder="Enter user">
            </div>
            <div class="form-group">
                <label class="control-label" for="user">Mô tả:</label>
                <textarea name="email" class="form-control">{{ $item->email }}</textarea>
            </div>
            <div class="form-group">
                <label class="control-label" for="user">Trạng thái:</label>
                <select name="status" class="form-control">
                    <option value="0" @if($item->status == 0) selected @endif>Chưa làm</option>
                    <option value="1" @if($item->status == 1) selected @endif>Đang làm</option>
                    <option value="2" @if($item->status == 2) selected @endif>Đã làm</option>
                </select>
            </div>
            <div class="form-group">
                <div class="">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
    </form>
    <a href="{{route('users.index')}}" class="btn btn-danger">Back</a>
</div>
@endsection