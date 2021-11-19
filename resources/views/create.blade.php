@extends('layout/layout')

@section('title', 'Halaman 2')
@section('container')

<!-- Include stylesheet -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<div class="container">
    <form method="post" action="/" class="my-3">
        @csrf
        <div class="form-group">
            <label for="title" class="form-label">Judul</label>
            <div class="input-group mb-3">
                <input 
                    type="text" 
                    class="form-control"
                    id="title" 
                    name="title">
            </div>
        </div>
        <div class="form-group">
            <label for="body" class="form-label">Content</label>
            <textarea id="editor" type="text" name="body"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>


<!-- MathJax -->
<script type="text/javascript" id="MathJax-script" async
  src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
</script>

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
var quill = new Quill('#editor', {
  modules: {
    toolbar: [
      [{ header: [1, 2, false] }],
      ['bold', 'italic', 'underline'],
      ['image', 'code-block']
    ]
  },
  placeholder: 'Compose an epic...',
  theme: 'snow'
});
</script>