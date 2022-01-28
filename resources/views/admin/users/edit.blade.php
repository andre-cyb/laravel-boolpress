@extends('layouts.admin')

@section('content')


<div class="container">

    <form action="{{ route("admin.users.update", $user->id) }}" method="POST">
        @csrf
        @method("put")
        
        <div class="form-group">
            <label class="form-label">Nome</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name">
            
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
            
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            
        </div>

        <a href="{{ route("admin.home") }}" class="btn btn-secondary" type="reset" >Annulla</a>
        <button class="btn btn-success px-2" type="submit" >Salva</button>
        
    </form>
</div>



@endsection