@extends('layouts.all')

@section('header')
  
@section('section')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="{{asset('assets/css/order.css')}}" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
  
<div class="container">
   <div class="col-md-12">
      <div class="invoice">
         <!-- begin invoice-company -->
         <div class="invoice-company text-inverse f-w-600">
            <span class="pull-right hidden-print">
            <a href="javascript:;" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-file t-plus-1 text-danger fa-fw fa-lg"></i> Export as PDF</a>
            <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
            </span>
            VHS Service
         </div>
         <!-- end invoice-company -->
         <!-- begin invoice-header -->
         <div class="invoice-header">
            <div class="invoice-from">
               <small>from</small>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse">Rafi Nurathallah</strong><br>
                  Universitas Pertamina<br>
                  Jakarta Selatan<br>
                  Phone: (+62) 823412314<br>
                  
               </address>
            </div>
            <div class="invoice-to">
               <small>to</small>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse">Dhuha</strong><br>
                  Jl. Kebon Nanas III No.24<br>
                  Jakarta Selatan<br>
                  Phone: (+62) 82229011758<br>
               </address>
            </div>
            <div class="invoice-date">
               <small>Invoice</small>
               <div class="date text-inverse m-t-5">04/01/2022</div>
               <div class="invoice-detail">
                  Servis Bulanan
               </div>
            </div>
         </div>
         <!-- end invoice-header -->
         <!-- begin invoice-content -->
         <div class="invoice-content">
            <!-- begin table-responsive -->
            <div class="table-responsive">
               <table class="table table-invoice">
                  <thead>
                     <tr>
                        <th>DETAIL PESANAN</th>
                        <th class="text-center" width="10%">SATUAN</th>
                        <th class="text-center" width="10%">SPESIFIKASI</th>
                        <th class="text-right" width="20%">TOTAL</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>
                           <span class="text-inverse">Jasa Servis Bulanan</span><br>
                           
                        </td>
                        <td class="text-center">Rp.25.000</td>
                        <td class="text-center">1 Kali</td>
                        <td class="text-right">Rp.25.000</td>
                     </tr>
                     <tr>
                        <td>
                           <span class="text-inverse">Ganti Oli</span><br>
                           
                        </td>
                        <td class="text-center">Rp.65.000</td>
                        <td class="text-center">1 Buah</td>
                        <td class="text-right">Rp.65.000</td>
                     </tr>
                     <tr>
                        <td>
                           <span class="text-inverse">Ganti kampas rem</span><br>
                           
                        </td>
                        <td class="text-center">Rp.35.000</td>
                        <td class="text-center">2 Buah</td>
                        <td class="text-right">Rp.70.000</td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <!-- end table-responsive -->
            <!-- begin invoice-price -->
            <div class="invoice-price">
               <div class="invoice-price-left">
                  <div class="invoice-price-row">
                     <div class="sub-price">
                        <small>SUBTOTAL</small>
                        <span class="text-inverse"></span>
                     </div>
                     <div class="sub-price">
                        <i class="fa fa-plus text-muted"></i>
                     </div>
                     <div class="sub-price">
                        <small>Biaya Admin</small>
                        <span class="text-inverse">Rp.2.500</span>
                     </div>
                  </div>
               </div>
               <div class="invoice-price-right">
                  <small>TOTAL</small> <span class="f-w-600">Rp.162.500</span>
               </div>
            </div>
            <!-- end invoice-price -->
         </div>
         <!-- end invoice-content -->
         <!-- begin invoice-note -->
         <div class="invoice-note">
            <a href="{{ route('home') }}" class="btn btn-info btn-sm">Kembali</a>
         </div>
         <!-- end invoice-note -->
         <!-- begin invoice-footer -->
         <div class="invoice-footer">
            <p class="text-center m-b-5 f-w-600">
               TERIMA KASIH TELAH MENGGUNAKAN JASA SERVIS KAMI
            </p>
            <p class="text-center">
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i> vehiclehomesolidarity.com</span>
               
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i> happyreading00@gmail.com</span>
            </p>
         </div>
         <!-- end invoice-footer -->
      </div>
   </div>
</div>
</body>
</html>
@endsection

