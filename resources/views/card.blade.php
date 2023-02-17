@extends('layout')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="card">
            <img class="thumb" src="{{$single['thumb']}}" alt="{{$single['title']}}">
        </div>
    </div>
</div>
@endsection