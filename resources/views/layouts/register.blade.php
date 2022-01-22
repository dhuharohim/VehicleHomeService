<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link href="{{asset('assets/css/login.css')}}" rel="stylesheet">
</head>
<body>
    <div class="loginBox"> <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
        <h3>Sign in here</h3>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="inputBox"> 
                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password"> 
                @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div> 
                {{-- <input type="submit" name="" value="Login"> --}}
                <button type="submit">
                    {{ __('Login') }}
                </button>
        </form> 
        <div class="text-center">
            <a href="{{ route('register') }}" class="btn btn-primary">Sign Up</a>
        </div>
    </div>			                            			                            
</body>
</html>



