@extends('layouts.app')

@section('content')
        <h1>{{$post->title}}</h1>
        <small>écrit le {{$post->created_at}}</small>
        <div>
          {{$post->body}}
        </div>
@endsection