<!-- 

<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="name">
                        {{ __('Name') }}:
                    </label>

                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                    @error('name')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">
                        {{ __('E-Mail Address') }}:
                    </label>

                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                    @error('email')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">
                        {{ __('Password') }}:
                    </label>

                    <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="Password">

                    @error('password')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password-confirm">
                        {{ __('Confirm Password') }}:
                    </label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirmation">
                </div>


                <button type="submit" class="btn btn-black">
                    {{ __('Register') }}
                </button>

                <p>
                    {{ __('Already have an account?') }}
                    <a href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                </p>

            </form>


        </div>
    </div>
</div>
    </body> -->
