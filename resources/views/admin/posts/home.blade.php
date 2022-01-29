@extends('layouts.admin')

@section('content')
<div style="height: 100%" class="container">
    <div style="height: 100%" class="row justify-content-center text-center align-items-stretch">
        
        <div class="col-4 border border-2 bg-dark text-white">
            <h3 class="py-4">dashboard</h3>

            <ul class="text-left list-group">
                <li class="list-group-item">
                    <a href="{{ route("admin.home") }}"><span>Area personale</span></a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route("admin.users.index") }}"><span>Utenti</span></a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route("admin.posts.index") }}"><span>post</span></a>
                </li>
            </ul>

        </div>
        <div class="col-8 border border-2">
            <div class="d-flex justify-content-around align-items-center py-4">
                <h2 class="">Tutti i post </h2>
                <button class="btn btn-primary text-white">
                    <a class="text-white"  href="{{ route("admin.posts.create") }}">Crea post</a>
                </button>
            </div>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            
            <ul class="text-left list-group ">
                @foreach ($postsList as $post)
                <li class="list-group-item d-flex justify-content-between">
                    <div>
                        <span>{{ $post->title }}</span>
                        <small class="d-block"> {{ $post->updated_at }} | <strong>Creato da {{ $post->user->name }}</strong> </small>
                    </div>
                    <div>
                        <button class="btn btn-secondary my-2"><a class=" text-white " href="{{ route("admin.posts.edit", $post->id) }}" >Modifica</a></button>
                        
                        <form action="{{ route("admin.posts.destroy", $post->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Elimina">
                        </form>
                    </div>
                    
                </li>
                    
                @endforeach
            </ul>

        </div>
    </div>
</div>
@endsection
