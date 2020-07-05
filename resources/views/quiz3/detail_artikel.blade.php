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
        <li class="list-group-item">Judul Artikel: <br> {{$artikel->judul}}</li>
        <li class="list-group-item">Slug: {{$artikel->slug}}</li>
        <li class="list-group-item">Isi Artikel: <br> {{$artikel->isi}}</li>
        <ul style="display: flex">
          <li class="list-group-item"><button class="btn btn-success">{{$artikel->tag}}</button></li>
          <li class="list-group-item"><button class="btn btn-success">{{$artikel->tag}}</button></li>
          <li class="list-group-item"><button class="btn btn-success">{{$artikel->tag}}</button></li>
        </ul>
        
      </ul>
      </div>
    </div>
  </div>
@endsection