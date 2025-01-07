@extends('layouts.app')

@section('title', 'Blog')

@section('content')
  <h1>Blog Codepolitan</h1>
  <a href="{{ url("posts/create") }}" class="btn btn-success mb-4">Tambah Post</a>

  @foreach($posts as $post)
    <div class="card mb-3">
      <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ $post->content }}</p>
        <p class="card-text"><small class="text-body-secondary">Created : {{ date("d m Y H:i", strtotime($post->created_at)) }}</small></p>
        <a href="{{ url("posts/$post->id") }}" class="btn btn-primary">Selengkapnya</a>
        <a href="{{ url("post/$post->id/edit") }}" class="btn btn-primary">Edit</a>
        <form action="{{ url("post/delete/$post->id") }}" method="post">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  @endforeach
@endsection