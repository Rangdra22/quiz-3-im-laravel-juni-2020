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
    <label for="">Judul Artikel</label>
    <input class="form-control" type="text" name="judul" value="{{ $artikel->judul }}"> <br>
    <label for="">Isi Artikel</label>
   <textarea class="form-control" type="text" name="isi" cols="30" rows="10">{{ $artikel->isi}}</textarea> <br>
    <label for="">Slug</label>
   <input type="text" class="form-control" name="slug" value="{{ $artikel->slug }}"> <br>
   <label for="">Tag 1</label>
   <input type="text" class="form-control" name="tag1" value="{{ $artikel->tag1 }}">
   <label for="">Tag 2</label>
   <input type="text" class="form-control" name="tag2" value="{{ $artikel->tag2 }}">
   <label for="">Tag 3</label>
   <input type="text" class="form-control" name="tag3" value="{{ $artikel->tag3 }}">
    
    <button class="btn btn-success mb-3 mt-3" type="submit">Update Artikel</button>
  </form>
  </div>
  
</div>

@endsection