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
        <div class="form-group">
            <label class="form-label">Telefono</label>
            <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}" required autocomplete="phone">
            
            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            
        </div>
        <div class="form-group">
            <label class="form-label">Indirizzo</label>
            <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $user->address }}" required autocomplete="address">
            
            @error('address')
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