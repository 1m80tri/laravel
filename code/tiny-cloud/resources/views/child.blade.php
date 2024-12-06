@extends('layouts.app')

@section('title','Title trang con')

@section('content')
    <h1>Content home</h1>
    @if($data % 2 == 0)
        {{$data}} : la so chan
    
    @else
        {{$data}} : la so le
    @endif
@endsection

@section('sidebar')
    @parent
    <h1>sidebar</h1>
@endsection