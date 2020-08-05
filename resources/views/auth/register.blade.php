@extends('layouts.reg')

@section('content')

    <div class="register-left-section">
        <img src="{{asset('public/assets/global/images/prince_logo.png')}}" alt="logo-image">
        <h2>Welcome to the Prince</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
    </div>
    <!--  START REGISTER -->
    <div class="register-page">
        <div class="main-register-contain">
            <div class="register-form">
                <form id="form-validation" method="post" action="{{ route('register') }}">
                    @csrf
                    <h4>Create a new account</h4>
                    <p class="register-title-text"></p>
                    <div class="form-group">
                        <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <label class="control-label" for="name">Enter Name</label><i class="bar"></i>
                    </div>
                    <div class="form-group">
                        <input  type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <label class="control-label" for="email">Enter Email</label><i class="bar"></i>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <label class="control-label" for="password">Enter Password</label><i class="bar"></i>
                    </div>

                    <div class="form-group">
                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <label class="control-label" for="input-confirm">Confirm Password</label><i class="bar"></i>
                    </div>

                    <div class="goto-register">
                        
                        <button type="submit" class="btn btn-register float-button-light">Submit</button>
                    </div>

                    <div class="social-media-section">
                        
                        <div class="register-bottom-text">
                            <p>Already have an account?</p>
                            <a href="{{route('login')}}">Login</a>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
  
@endsection
