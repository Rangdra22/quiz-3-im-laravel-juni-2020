@extends('layouts.master')
@section('title', 'Create Article | Rangdra Web')
@push('script-head')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@endpush
@section('content')
<div class="card">
<div class="card-header bg-primary text-white h3">
    Create Article
  </div>
 <form action="{{ url('/artikel') }}" method="POST" style="padding: 15px">
   @csrf
   <label for="judul">Article Title</label>
   <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul"> <br>
   <label for="isi">Content</label>
   <textarea name="isi" class="form-control my-editor">{!! old('isi', $content ?? '') !!}</textarea> <br>
   <label for="slug">Slug</label>
   <input type="text" class="form-control" id="slug" name="slug" placeholder="slug"> <br>
   <label for="category_id">Category</label>
   <select name="category_id" id="category_id" class="form-control" placeholder="Kategori">
      @foreach( $categories as $category)
        <option value="{{ $category->id }}"> {{ $category->name }}</option>
      @endforeach
   </select> <br>
   <label for="tags">Tags</label>
   <input type="text" class="form-control" name="tags" id="tags" placeholder="Tags">
   <br>
   <button class="btn btn-primary" type="submit">Create</button>
 </form>

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