<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog Laravel | Edit Postingan</title>
  <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <h1>Edit Postingan</h1>
    
    <form action="{{ url("post/$post->id") }}" method="post" class="form-control">
      @method('patch')
      @csrf
      
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{ $post->title }}">
      </div>
      <div class="mb-3">
        <label for="content" class="form-label">Konten</label>
        <textarea class="form-control" id="content" rows="3" name="content">{{ $post->content }}</textarea>
        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
      </div>
    </form>

    <a href="{{ url("posts") }}">Kembali</a>
  </body>
</div>
</html>