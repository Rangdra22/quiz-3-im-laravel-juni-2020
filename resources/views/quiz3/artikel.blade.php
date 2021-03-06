@extends('layouts.master')
@section('title', 'Dashbord | Rangdra Web')
@section('content')
<div class="card">
<div class="card-header bg-primary text-white h3 mb-2">
    List of Articles
  </div>
  <div class="container">
  <a href="{{ url('/artikel/create') }}">
    <button class="btn btn-dark">New Article</button>
  </a>
    <table class="table table-bordered mt-2" >
        <thead>
            <th>No</th>
            <th>Article Title</th>
            <th>Category</th>
            <th>Article Detail</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($artikel as $art)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $art->judul }}</td>
                <td>{{ $art->category->name }}</td>
                <td>
                    <a href="{{ url('/artikel/'.$art->id)}}">
                    <button class="btn btn-primary">Show Article</button>
                    </a>
                </td>
                <td>
                    <a href="{{ url('/artikel/'.$art->id).'/edit'}}">
                        <button class="btn btn-warning btn-sm"><i class="fas fa-edit">edit</i></button>
                    </a> |
                    <form method="POST" action="{{ url('/artikel/'.$art->id) }}" style="display: inline">
                    @csrf
                    {{ method_field('delete') }}
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash">delete</i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>

</div>
@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush
