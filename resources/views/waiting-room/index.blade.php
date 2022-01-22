@extends('layouts.all')

@section('section')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cari Pelanggan</title>
    <link href="{{asset('assets/css/wait.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <section>
          <div class="loader loader-1">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
          </div>
          <h6>Mohon tunggu...</h6>
          <h6>Kami sedang mencari pelanggan</h6>
          <br>
          <a href="{{ route('map-montir') }}" class="btn btn-success btn-sm"  data-aos="fade-out" data-aos-delay="1500">Pencarian Cepat</a>
         

        </section>
        
       
    </div>
    
    
</body>
</html>
@endsection