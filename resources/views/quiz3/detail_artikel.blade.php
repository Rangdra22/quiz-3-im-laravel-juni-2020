@extends('layouts.master')
@section('content')
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header bg-primary">
        <h5 class="card-title text-white h3">Detail Artikel</h5>
      </div>
      <div class="card-body">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Judul Artikel: {{$artikel->judul}}</li>
        <li class="list-group-item">slug: {{$artikel->slug}}</li>
        <li class="list-group-item">Isi Artikel: <br> {{$artikel->isi}}</li>
        <li class="list-group-item">Kategory: <br> {{ $artikel->category->name }}</li>
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