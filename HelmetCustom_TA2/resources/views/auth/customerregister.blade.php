@extends('layouts.app')

@section('content')

    <body id="bg1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            <span>{{ session()->get('success') }}</span>
                        </div>
                    @endif
                    <div class="card" id="card">
                        <span id="card-title">
                            <h4 style="text-align: center">REGISTER CUSTOMER</h4>
                            <p class="underline-title"></p>
                        </span>
                        <div class="card-body">
                            <form action="{{ route('customer.register') }}" method="POST">
                                @csrf

                                <div class="form-group row">
                                    <label for="username" class="col-sm-4 col-form-label text-md-right">{{ __('Username') }}
                                    </label>

                                    <div class="col-md-6">
                                        <input type="text" id="username"
                                            class="form-content{{ $errors->has('username') ? 'is-invalid' : '' }}"
                                            name="username" value="{{ old('username') }}" required autofocus>

                                        @if ($errors->has('username'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                        <p class="form-border"></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input type="email" id="email"
                                            class="form-content{{ $errors->has('email') ? 'is-invalid' : '' }}" name="email"
                                            value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                        <p class="form-border"></p>
                                    </div>
                                </div>

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
                                    <label for="password_confirm"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input type="password" id="password-confirm" class="form-content"
                                            name="password_confirmation" required>

                                        @if ($errors->has('password_confirm'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password_confirm') }}</strong>
                                            </span>
                                        @endif
                                        <p class="form-border"></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-4">
                                        <input id="submit-btn" type="submit" name="submit" value="REGISTER" /><a href="#"
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
