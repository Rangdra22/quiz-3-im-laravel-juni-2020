@extends('layouts.master')
@section('content')
<div class="card">
<div class="card-header bg-primary text-white h3">
    create artikel
  </div>
 <form action="{{ url('/artikel') }}" method="POST" style="padding: 15px">
   @csrf
   <label for="judul">Judul Artikel</label>
   <input type="text" class="form-control" id="judul" name="judul">
   <label for="isi">Isi Artikel</label>
   <textarea class="form-control" name="isi" id="isi" cols="30" rows="10"></textarea> <br>
   <label for="slug">Slug</label>
   <input type="text" class="form-control" id="slug" name="slug"> <br>
   <label for="category_id">Kategori</label>
   <select name="category_id" id="category_id" class="form-control">
      @foreach( $categories as $category)
        <option value="{{ $category->id }}"> {{ $category->name }}</option>
      @endforeach
   </select>
   <label for="tag">Tags</label>
   <input type="text" class="form-control" name="tag" id="tag">
   <br>
   <button class="btn btn-primary" type="submit">Create</button>
 </form>

</div>
@endsection