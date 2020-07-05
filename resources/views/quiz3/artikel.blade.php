@extends('layouts.master')
@section('content')
<div class="card">
<div class="card-header bg-primary text-white h3 mb-2">
    Daftar Artikel
  </div>
  <div class="container">
  <a href="{{ url('/artikel/create') }}">
    <button class="btn btn-dark">New Article</button>
  </a>
    <table class="table table-bordered mt-2" >
        <thead>
            <th>No</th>
            <th>Judul Artikel</th>
            <th>Tag</th>
            <th>Detail Artikel</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($artikel as $art)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $art->judul }}</td>
                <td> <span class="badge badge-success mr-1">{{ $art->tag1 }}</span><span class="badge badge-success mr-1">{{ $art->tag2 }}</span><span class="badge badge-success">{{ $art->tag3 }}</span></td>
                <td>
                    <a href="{{ url('/artikel/'.$art->id)}}">
                    <button class="btn btn-primary">Show Artikel</button>
                    </a>
                </td>
                <td>
                    <a href="{{ url('/artikel/'.$art->id).'/edit'}}">
                        <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                    </a>
                    <form method="POST" action="{{ url('/artikel/'.$art->id) }}" style="display: inline">
                    @csrf
                    {{ method_field('delete') }}
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
