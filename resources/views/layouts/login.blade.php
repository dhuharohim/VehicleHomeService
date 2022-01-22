<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vehicle Home Solidarity Service</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans|Ubuntu:400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="{{asset('assets/css/login.css')}}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    
    <div class="wrapper">
        
        <div class="background">
          <div class="left">
            <h2 class="back-header">Belum punya akun?</h2>
            <p class="back-p">Hayu daftar disini!</p>
            <button class="back-btn signup-but">SIGN UP</button>
          </div>
          <div class="right">
            <h2 class="back-header">Udah punya akun?</h2>
            <p class="back-p">Mari sini kawan</p>
            <button class="back-btn login-but">LOGIN</button>
          </div>
        </div>
        <div class="form-container">
                <div class="sign-up">
                    <h2 class="form-header">SIGN UP</h2>
                    <br>
                    <div class="selection">
                        <select name="role" id="role" onchange="filterRole()">
                            <option value="">--Pilih Tipe Pengguna--</option>
                            <option value="user">Pelanggan</option>
                            <option value="montir">Montir</option>
                        </select>
                    </div>
                    
                    <form method="POST" action="{{ route('register') }}" id="form-pelanggan">
                        @csrf
                        <input id="role" type="hidden" class="form-control @error('role') is-invalid @enderror" name="role" value="montir" required autocomplete="role" autofocus>
                        
                        <input placeholder="Masukan Nama Lengkap" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        <input placeholder="Nomor Telepon" id="mobilenum" type="text" class="form-control @error('mobilenum') is-invalid @enderror" name="mobilenum" value="{{ old('mobilenum') }}" required autocomplete="mobilenum" autofocus>
                        
                        <input placeholder="Alamat lengkap" id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                        <button type="submit" class="form-btn">
                            {{ __('Register') }}
                        </button>
                        
                        
                    </form>
                    <form method="POST" action="{{ route('register') }}" id="form-montir">
                        @csrf
                        
                        <input id="role" type="hidden" class="form-control @error('role') is-invalid @enderror" name="role" value="montir" required autocomplete="role" autofocus>
                        <input placeholder="Masukan Nama Lengkap" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        <input placeholder="Nomor Telepon" id="mobilenum" type="text" class="form-control @error('mobilenum') is-invalid @enderror" name="mobilenum" value="{{ old('mobilenum') }}" required autocomplete="mobilenum" autofocus>
                        
                        <input placeholder="Alamat lengkap" id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                        <input placeholder="Perusahaan" id="perusahaan" type="text" class="form-control @error('perusahaan') is-invalid @enderror" name="perusahaan" value="{{ old('perusahaan') }}" required autocomplete="perusahaan" autofocus>
                        
                        <input placeholder="Posisi ('Contoh : Senior Mekanik')" id="posisi" type="text" class="form-control @error('posisi') is-invalid @enderror" name="posisi" value="{{ old('posisi') }}" required autocomplete="posisi" autofocus>

                        <input placeholder="Pengalaman Kerja ('Contoh : 4 Tahun')" id="pengalaman" type="text" class="form-control @error('pengalaman') is-invalid @enderror" name="pengalaman" value="{{ old('pengalaman') }}" required autocomplete="pengalaman" autofocus>

                        
                        <button type="submit" class="form-btn">
                            {{ __('Register') }}
                        </button>
                        
                        
                    </form>
                  </div>
                  <div class="login hide">
                    <h2 class="form-header">LOGIN</h2>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
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
                    
                    
                         <button type="submit" class="form-btn">
                            {{ __('Login') }}
                        </button>
                    
                    <a class="forgot" href="#">Forgot password</a>
                    </form>
                    
                    
                  </div>

            
          
        </div>
      </div>






















    {{-- <div class="loginBox"> <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
        <h3>Sign in here</h3>
        <form action="{{ route('login') }}" method="post">
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
                {{-- <button type="submit">
                    {{ __('Login') }}
                </button>
        </form> 
        <div class="text-center">
            <a href="{{ route('register') }}" class="btn btn-primary">Sign Up</a>
        </div>
    </div>			                            			                              --}}
</body>

<script>
    $('#form-pelanggan').hide();
    $('#form-montir').hide();
    function filterRole(){
        
        console.log($('#role').val());
        if($('#role').val()=='user'){
            $('#form-pelanggan').show();
            $('#form-montir').hide();
        }
        else if($('#role').val()=='montir'){
            $('#form-montir').show();
            $('#form-pelanggan').hide();
        }
        else{
            $('#form-montir').hide();
            $('#form-pelanggan').hide();
        }
        
    }
    $(document).ready(function(){
    
    


    var signUp = $('.signup-but');
    var logIn = $('.login-but');
    
    signUp.on('click', function(){
      $('.login').fadeOut('slow').css('display', 'none');
      $('.sign-up').fadeIn('slow');
      
      $('.form-container').animate({left: '10px'}, 'slow');
    });
    
    logIn.on('click', function(){
      $('.login').fadeIn('slow');
      $('.sign-up').fadeOut('slow').css('display', 'none');
      
      $('.form-container').animate({left: '400px'}, 'slow');
    });
  });
</script>
</html>



