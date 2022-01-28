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
            <h2 class="py-4">Utenti registrati </h2>
            
            <ul class="text-left list-group">
                @foreach ($usersList as $user)
                <li class="list-group-item">{{ $user->name }} - {{ $user->email }}</li>
                    
                @endforeach
            </ul>

        </div>
    </div>
</div>
@endsection
