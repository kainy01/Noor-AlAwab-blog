@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}" />
    <link rel="stylesheet" href="{{ url('/bootstrap/css/bootstrap.min.css') }}" />

</head>

<body>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <div>
                            <label>Email</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                            @error('email')
                            <p>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">

                        <div>
                            <label>Password</label>
                            <input id="password" type="password" class="form-control" name="password" required placeholder="password">

                            @error('password')
                            <p>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="remember">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('Remember Me') }}</span>
                        </label>

                        <!-- @if (Route::has('password.request'))
                        <div id="formFooter">
                            <a class="underlineHover" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                        @endif -->
                    </div>

                    <div>
                        <button type="submit" class="btn btn-black">
                            {{ __('Login') }}
                        </button>

                        <!-- @if (Route::has('register'))

                        <p class="">
                            {{ __("Don't have an account?") }}


                            <a class="" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        </p>
                        @endif -->
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
@endsection
