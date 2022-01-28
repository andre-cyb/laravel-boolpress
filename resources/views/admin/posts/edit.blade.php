@extends('layouts.admin')


@section('content')

<div class="container">

  <form action="{{route('admin.posts.update', $post->id)}}" method="post">
  @csrf
  @method("patch")
  <div class="mb-3">
    <label for="title" class="form-label">Titolo</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
  </div>
  <div class="mb-3">
    <label for="subtitle" class="form-label">Sottotitolo</label>
    <input type="text" class="form-control" id="subtitle" name="subtitle"value="{{ $post->subtitle }}">
  </div>
  <div class="mb-3">
    <label for="content" class="form-label">Contenuto</label>
    <textarea type="text" class="form-control" id="content" name="content" rows="3"value="{{ $post->content }}"></textarea>
  </div>
  <div class="mb-3">
    <label for="coverImg" class="form-label">Immagine</label>
    <input type="text" class="form-control" id="coverImg" name="coverImg"value="{{ $post->coverImg }}">
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Categoria</label>
    <input type="text" class="form-control" id="category" name="category"value="{{ $post->category }}">
  </div>
  
  <div class="text-center">
    <button type="submit" class="btn btn-success">Salva</button>
    <a href="{{ route('admin.posts.index') }}">Annulla</a>
  </div>
  </form>
</div>

@endsection