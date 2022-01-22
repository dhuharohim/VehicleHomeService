@extends('layouts.all')

@section('header')

@section('section')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Pilih Montir</title>
        <link href="{{ asset('assets/css/find.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="mb-3 mt-3">
            <div class="card">
                <div class="card-body overflow">
                    <h3 class="text-center">Pilih Montir</h3>
                    <hr>
                    <div class=" d-flex justify-content-center">
                        @foreach ($data as $datas)
                            <div class="card m-2" style="cursor: pointer">
                                <div class="hoper card-body">
                                    <div class="media">
                                            <a class="pull-left">
                                                <img class="media-object dp img-circle" src="assets/img/rafi.jpg"
                                                    style="width: 100px;height:100px;">
                                            </a>
                                            <hr style="margin:8px auto">
                                            <div class="media-body">
                                                <h4 class="media-heading">{{ $datas->name }}</h4>
                                                <h5>{{ $datas->posisi }} di {{ $datas->perusahaan }}</a></h5>
                                                <hr style="margin:8px auto">
                                                <div class="description">
                                                    <p>{{ $datas->pengalaman }} Pengalaman</p>
                                                </div>
                                                <a href="{{ route('map-chat') }}" class="stretched-link"></a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>












@endsection

@section('footer')
