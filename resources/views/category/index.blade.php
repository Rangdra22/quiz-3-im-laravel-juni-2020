@extends('layouts.master')
@section('content')
<div class="card">
<div class="card-header bg-primary text-white h3 mb-2">
    List Category
  </div>
  <div class="container">
  <a href="{{ url('/categories/create') }}">
    <button class="btn btn-dark">New Category</button>
  </a>
    <table class="table table-bordered mt-2" >
        <thead>
            <th>No</th>
            <th>Category</th>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name}}</td>
                <td>
                <a href="{{ url('/categories/'.$category->id).'/edit'}}">
                        <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                    </a>
                <form method="POST" action="{{ url('/categories/'.$category->id) }}" style="display: inline">
                    @csrf
                    @method('delete')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>

</div>
@endsection
