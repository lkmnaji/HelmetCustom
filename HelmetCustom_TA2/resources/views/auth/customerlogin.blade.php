@extends('layouts.app')

@section('content')

    <body id="bg1">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card" id="card"><br>
                        <span id="card-title">
                            <h4 style="text-align: center">Customer Login</h4>
                            <p class="underline-title"></p>
                        </span>
                        <div class="card-body">
                            <form action="{{ route('customer.login') }}" method="POST">
                                @csrf

                                <div class="form-group row">
                                    <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Username ') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="username"
                                        class="form-content @error('email') is-invalid @enderror" name="username"
                                        value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <p class="form-border"></p>
                                </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input type="password" id="password"
                                            class="form-content{{ $errors->has('password') ? 'is-invalid' : '' }}"
                                            name="password" value="{{ old('password') }}" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                        <p class="form-border"></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" id="forgot-pass" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif

                                    @if (Route::has('customer.register'))
                                        <a class="btn btn-link" id="forgot-pass"
                                            href="{{ route('customer.register') }}">{{ __('Register') }}</a>
                                    @endif
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <input id="submit-btn" type="submit" name="submit" value="LOGIN" /><a href="#"
                                            id="signup"></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
