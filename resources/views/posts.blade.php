@extends('layout/layout')

@section('title', 'Halaman Post')
@section('container')

<h1>{{ $post->title }}</h1>
{!! $post->body !!}

@endsection

<script type="text/javascript" id="MathJax-script" async
  src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
</script>