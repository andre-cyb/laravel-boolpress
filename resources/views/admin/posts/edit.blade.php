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
    <textarea type="text" class="form-control" id="content" name="content" rows="3">{{ $post->content }}</textarea>
  </div>
  <div class="mb-3">
    <label for="coverImg" class="form-label">Immagine</label>
    <input type="text" class="form-control" id="coverImg" name="coverImg"value="{{ $post->coverImg }}">
  </div>

  <div class="mb-3">
    <label for="category" class="form-label">Categoria</label>
    <select name="category_id" class="form-control">
      @foreach ($categories as $category)
        <option value="{{ $category->id }}" @if ( $category->id === $post->category_id)
          selected @endif>{{ $category->name }}</option>   
      @endforeach
    </select>
  </div>
  
  <div class="form-check">
    <label for="category" class="form-label">Tags</label>

    @foreach ($tags as $tag)
          @php
              $hasTag = $post->tags->where("id", $tag->id)->count();
              
          @endphp
    <div>
      <input class="form-check-input" name="tags[]"  type="checkbox" value="{{ $tag->id }}" id="flexCheckDefault" @if ($hasTag)
      checked @endif>
      
      <label class="form-check-label" for="flexCheckDefault">
        {{ $tag->name }}
      </label>
    </div>
      @endforeach

  </div> 
  
  <div class="text-center">
    <button type="submit" class="btn btn-success">Salva</button>
    <a href="{{ route('admin.posts.index') }}">Annulla</a>
  </div>
  </form>
</div>

@endsection