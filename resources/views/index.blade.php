@extends('layout/layout')

@section('title', 'Halaman 1')
@section('container')

<div class="container">
    <a href="/create" class="btn btn-primary mb-3 mt-3">Tambah Data</a>
    <table class="table">
        <thead>
            <tr class="table-dark">
                <th scope="col">Judul</th>
                <th scope="col">Path</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td scope="col"><a href="blog/{{ $post["id"] }}">{{ $post["title"] }}</a></td>
                <td scope="col">Path 1</td>
                <td>
                    <form action="blog/{{ $post->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection