@extends('layouts.admin')


@section('content')

<div class="container">

  <form action="{{route('admin.posts.store')}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Titolo</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="mb-3">
    <label for="subtitle" class="form-label">Sottotitolo</label>
    <input type="text" class="form-control" id="subtitle" name="subtitle">
  </div>
  <div class="mb-3">
    <label for="content" class="form-label">Contenuto</label>
    <textarea type="text" class="form-control" id="content" name="content" rows="3"></textarea>
  </div>
  <div class="mb-3">
    <label for="coverImg" class="form-label">Immagine</label>
    <input type="text" class="form-control" id="coverImg" name="coverImg">
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Categoria</label>
    <select name="category_id" class="form-control">
      @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>   
      @endforeach
    </select>
  </div>
  
  <div class="text-center">
    <button type="submit" class="btn btn-success">Crea</button>
    <a href="{{ route('admin.posts.index') }}">Annulla</a>
  </div>
  </form>
</div>

@endsection