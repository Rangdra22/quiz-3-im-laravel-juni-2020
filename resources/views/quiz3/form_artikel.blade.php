@extends('layouts.master')
@section('content')
<div class="card">
<div class="card-header bg-primary text-white h3">
    create artikel
  </div>
 <form action="{{ url('/artikel') }}" method="POST" style="padding: 15px">
   @csrf
   <label for="">Judul Artikel</label>
   <input type="text" class="form-control" name="judul">
   <label for="">Isi Artikel</label>
   <textarea class="form-control" name="isi" id="" cols="30" rows="10"></textarea> <br>
   <label for="">Slug</label>
   <input type="text" class="form-control" name="slug"> <br>
   <label for="">Tag 1</label>
   <input type="text" class="form-control" name="tag1">
   <label for="">Tag 2</label>
   <input type="text" class="form-control" name="tag2">
   <label for="">Tag 3</label>
   <input type="text" class="form-control" name="tag3">
   <br>
   <button class="btn btn-primary" type="submit">Create</button>
 </form>

</div>
@endsection