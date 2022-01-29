@extends('layouts.admin')


@section('content')

<div class="container">
  
  
  <h1>{{ $post->title }}</h1>
  <small class="d-block"> {{ $post->updated_at }} | <strong>Creato da {{ $post->user->name }}</strong> </small>
  <span class="badge rounded-pill bg-primary p-2 text-white ">{{ $post->category->name }}</span>
  <img class="py-5 d-block" src="{{ $post->coverImg }}" alt="immagine post">

  <p class="">{{ $post->content }}</p>

  <div class="d-flex mt-4">
    <button class="btn btn-success m-2"><a class=" text-white " href="{{ route("admin.posts.index") }}" ><- Torna ai post</a></button>
    <button class="btn btn-secondary m-2"><a class=" text-white " href="{{ route("admin.posts.edit", $post->id) }}" >Modifica</a></button>
    
    <form  action="{{ route("admin.posts.destroy", $post->id) }}" method="post">
        @csrf
        @method('DELETE')
        <input class="btn btn-danger m-2" type="submit" value="Elimina">
    </form>
</div>
  
</div>

@endsection