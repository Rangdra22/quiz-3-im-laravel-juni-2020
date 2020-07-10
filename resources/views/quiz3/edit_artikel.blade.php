@extends('layouts.master')
@section('title', 'Update Article | Rangdra Web')
@push('script-head')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@endpush

@section('content')
<div class="card">
<div class="card-header bg-primary text-white h3 mb-2">
    Update Article
  </div>
  <div class="container">
    <form action="{{ url('/artikel/'.$id) }}" method="POST">
   {{ method_field('put') }}
   @csrf
   <input hidden name="id" value="{{ $id}}">
    <label for="">Article Title</label>
    <input class="form-control" type="text" name="judul" value="{{ $artikel->judul }}"> <br>
    <label for="">Content</label>
   <!-- <textarea class="form-control" type="text" name="isi" cols="30" rows="10">{{ $artikel->isi}}</textarea> <br> -->
   <textarea name="isi" class="form-control my-editor">{{ $artikel->isi}}</textarea> <br>
    <label for="">Slug</label>
   <input type="text" class="form-control" name="slug" value="{{ $artikel->slug }}"> <br>
   <label for="category_id">Category</label>
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

@push('scripts')
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
@endpush