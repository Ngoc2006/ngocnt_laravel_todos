@extends('layouts.master')
@section('content')
<div class="container">
    <a href="{{route('users.create')}}" class="btn btn-success">Add</a>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th style="text-align:center">Created at</th>
                <th style="text-align:center">Updated at</th>
                <th style="text-align:center">Action</th>
            </tr>
            </thead>
            <tbody>
            	@foreach($list as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td style="text-align:center">{{$item->created_at}}</td>
                <td style="text-align:center">{{$item->updated_at}}</td>
                <td>
                    <a style="display: inline-block; width: 67px;" href="{{route('users.show', $item->id)}}" class="btn btn-info">Show</a>
                    <a style="display: inline-block; width: 67px;" href="{{route('users.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                    <form style="display: inline-block;" action="{{ route('users.destroy', $item->id) }}" method="post" accept-charset="utf-8">
                        @csrf
                        {{method_field('delete')}}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection