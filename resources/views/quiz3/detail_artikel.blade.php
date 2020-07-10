@extends('layouts.master')
@section('title', 'Article Detail | Rangdra Web')
@section('content')
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header bg-primary">
        <h5 class="card-title text-white h3">Article Detail</h5>
      </div>
      <div class="card-body">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Article Title: {{$artikel->judul}}</li>
        <li class="list-group-item">slug: {{$artikel->slug}}</li>
        <li class="list-group-item">Content: <br> {!! $artikel->isi !!}</li>
        <li class="list-group-item">Category: <br> {{ $artikel->category->name }}</li>
      </ul>
      <div class="mt-3 container">
        @foreach($artikel->tags as $tag)
        <button class="btn btn-success btn-sm">{{$tag->tag_name}}</button>
        @endforeach
      </div>
      </div>
    </div>
  </div>
@endsection