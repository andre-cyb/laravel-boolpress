@extends('layouts.admin')

@section('content')
<div style="height: 100%" class="container">
    <div style="height: 100%" class="row justify-content-center text-center align-items-stretch">
        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div> --}}
        {{-- <h2>Ciao benvenuto!</h2> --}}
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
            <h1 class="py-4">Benvenuto {{ Auth::User()->name }}</h1>
            <h2 >Area personale</h2>

        </div>
    </div>
</div>
@endsection
