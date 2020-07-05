@extends('layouts.master')
@section('content')
<div class="card">
<div class="card-header bg-primary text-white h3 mb-2">
    Edit Artikel
  </div>
  <div class="container">
    <form action="{{ url('/artikel/'.$id) }}" method="POST">
   {{ method_field('put') }}
   @csrf
   <input hidden name="id" value="{{ $id}}">
    <label for="">Judul</label>
    <input class="form-control" type="text" name="judul" value="{{ $artikel->judul }}"> <br>
    <label for="">Isi</label>
    <input class="form-control" type="text" name="isi" value="{{ $artikel->isi }}"> <br>
    <label for="">Slug</label>
   <input type="text" class="form-control" name="slug" value="{{ $artikel->slug }}">
   <label for="">Tag</label>
   <input type="text" class="form-control" name="tag" value="{{ $artikel->tag }}">
    
    <button class="btn btn-success mb-3 mt-3" type="submit">Update Artikel</button>
  </form>
  </div>
  
</div>

@endsection