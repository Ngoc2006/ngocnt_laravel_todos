@extends('layouts.master')
@section('content')
    <div class="container">

        <h1><b>{{$item->name}}</b></h1>

        <h3>{{$item->email}}</h3>

    </div>  
    <br>
    <a href="{{route('users.index')}}" class="btn btn-danger" style="margin-left: 209px;">Back</a>
@endsection


{{-- giao diện show detail --}}