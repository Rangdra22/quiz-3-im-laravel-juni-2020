@extends('layouts.master')
@section('title', 'Create Category | Rangdra Web')
@section('content')
<div class="ml-3 mt-3">
  <form action="/categories" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Category Name</label>
    <input type="text" class="form-control" placeholder="Isi Kategory" name="name">
    </div>
    
   <button class="btn btn-primary" type="submit">Create Category</button>
  </form>
</div>
@endsection