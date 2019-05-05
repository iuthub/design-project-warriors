@extends('layouts.app')

@section('content')

@guest

<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
@if (Route::has('register'))
<br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
  </li>
  
@endif
@else
{{-- <div class="row" id="mainsrow2">
    <div class="col-md-3 col-sm-6">
        <div class="cards">
            <img class="cardimg"  id="menuimg4" src="" alt="menu">
            <h5 class="card-title">Card title1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the 
                bulk of the card's content.
            </p>
        </div>
    </div> --}}
    <br>
    <br>
    <br>
    
<div class="container">
  
<h2 style="text-align: center; font-weight: bold; ">Menu</h2>
  <div class="row">
    
      @foreach($menus as $menu)
      <div class="col-md-3 col-sm-6">
        <div class="card " style="max-height: 350px; margin-top:23px;">
                  <img src="{{$menu->image_url}}" width="255" height="150" alt="" srcset="" class="card-image">
                  <h3 class="dish-name" style="text-align: center; font-weight: bold; margin-top:15px">{{$menu->title}}</h3>
                  <p class="ingredients" style="text-align:center; font-weight: bold; margin-top:5px">{{$menu->body}}</p>
                  <p class="cost" style="font-weight: bold;">$ {{$menu->cost}}</p>
                  <div class="btn-group btn-group-sm" role="group" aria-label="...">
                   <a href="/admin/{{$menu->id}}/edit"  class="btn btn-warning ">Edit</a>
                   {!!Form::open(['action' => ['MenuController@destroy', $menu->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                   {{Form::hidden('_method', 'DELETE')}}
                   {{Form::submit('Delete', ['class' => 'btn btn-danger '])}}
                   {!!Form::close()!!}
                  </div>
                </div>
              </div>                        
              @endforeach 
              
          </div>
        </div>
        @endguest
      @endsection
          <!--
            <div class="col-md-12">
              <div class="col-md-3">
                <div class="card">
                  <img src="image/credit-card.png" alt="" srcset="" class="">
                  <h3 class="dish-name">Title</h3>
                  <p class="ingredients">Body</p>
                  <p class="cost">price</p> 
                  <hr>
                  <a href="/admin/create" class="btn btn-success btn-lg ">Create</a>
                  
                </div>
              </div>
              
              
              
            </div> 
          -->