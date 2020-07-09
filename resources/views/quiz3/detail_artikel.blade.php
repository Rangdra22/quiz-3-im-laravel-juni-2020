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
      </ul>
      <div class="mt-3 container">
        <button class="btn btn-success">{{$artikel->tag}}</button>
      </div>
      </div>
    </div>
  </div>
@endsection