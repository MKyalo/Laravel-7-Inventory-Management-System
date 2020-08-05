@extends('layouts.login')

@section('content')
 <!--  START LOGIN -->
    <div class="login-page">
        <div class="main-login-contain">
            <div class="login-form">
                <form id="form-validation" method="post" action="{{ route('login') }}">
                    @csrf
                    <h4>Login to your account</h4>
                    <p class="login-title-text"></p>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="form-group">

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                
                        <label class="control-label" for="input-email">Enter Email</label><i class="bar"></i>
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <label class="control-label" for="input-password">Enter Password</label><i class="bar"></i>
                    </div>

                    <div class="goto-login">
                        <div class="forgot-password-login">
                            <a href="#">
                                <i class="icon icon_lock"></i> Forgot password?
                            </a>
                        </div>
                        <button type="submit" class="btn btn-login float-button-light">Submit</button>
                    </div>

                    

                </form>
            </div>
        </div>
    </div>
    <!--  END LOGIN -->
@endsection
