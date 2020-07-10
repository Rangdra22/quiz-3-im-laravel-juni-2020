@extends('layouts.master')
@section('title', 'Edit Category | Rangdra Web')
@section('content')
<div class="card">
<div class="card-header bg-primary text-white h3 mb-2">
    Edit Artikel
  </div>
  <div class="container">
    <form action="{{ url('/categories/'.$id ?? '') }}" method="POST">
   {{ method_field('put') }}
   @csrf
   <input hidden name="id" value="{{ $id ?? ''}}">
    <label for="">Nama Kategori</label>
    <input class="form-control" type="text" name="name" value="{{ $category->name }}">
    
    <button class="btn btn-success mb-3 mt-3" type="submit">Update Kategori</button>
  </form>
  </div>
  
</div>

@endsection