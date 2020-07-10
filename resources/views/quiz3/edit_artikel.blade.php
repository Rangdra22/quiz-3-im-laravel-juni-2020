@extends('layouts.master')
@section('title', 'Edit Artikel | Rangdra Web')
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
   <label for="category_id">Kategori</label>
   <select name="category_id" id="category_id" class="form-control">
      @foreach( $categories as $category)
      @if ($category->id == $artikel->category_id)
        <option value="{{ $category->id }}" selected> {{ $category->name }}</option>
      @else
        <option value="{{ $category->id }}"> {{ $category->name }}</option>
      @endif
        
      @endforeach
   </select>
   <label for="">Tags</label>
   <input type="text" class="form-control" name="tag" value="{{ $artikel->tag }}">
    
    <button class="btn btn-success mb-3 mt-3" type="submit">Update Artikel</button>
  </form>
  </div>
  
</div>

@endsection