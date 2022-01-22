@extends('layouts.all')

@section('header')
@section('section')

    <div class="container mt-4 mb-4">

        {{-- <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                                aria-controls="pills-home" aria-selected="true">Servis Berat</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">Servis Ringan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <h3 class="mt-2 mb-6 font-weight-bold text-center">Isi Form Berikut</h3>
        <div class="d-flex justify-content-center mt-4">
            <div class="row w-50">
                <div class="col-12">
                            <div class="card">
                                <div class="card-body shadow-lg">
                                    <center>
                                        <form action="{{ route('mobil.store') }}" class="" method="POST">
                                            @csrf
                                            <br>
                                            <div class="form-group">
                                                <label class="font-weight-bold">Jenis Servis</label>
                                                <select name="jenis_servis" id="jenis_servis" class="text-center form-control w-50">
                                                    <option value="">--Pilih Jenis Servis--</option>
                                                    <option value="Servis Ringan">Servis Ringan</option>
                                                    <option value="Servis Berat">Servis Berat</option>
                                                </select>
                                                <br>
                                                <label class="font-weight-bold">Merk</label>
                                                <select name="merk"
                                                    class="d-flex justify-content-center form-control w-50 text-center"
                                                    id="parent" required>
                                                    <option value="" class="text-center">--Pilih Merk Mobil--</option>
                                                    @foreach ($merk as $mer)
                                                        <option value="{{ $mer->id }}">{{ $mer->merk_mobil }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <br>
                                                <label class="font-weight-bold">Model</label>
                                                <select name="model"
                                                    class="d-flex justify-content-center form-control w-50 text-center"
                                                    id="child1" required>
                                                    <option value="" class="text-center">--Pilih Model--</option>
                                                </select>

                                                <br>
                                                <label class="font-weight-bold">Varian</label>
                                                <select name="varian"
                                                    class="d-flex justify-content-center form-control w-50 text-center"
                                                    id="child2" required>
                                                    <option value="" class="text-center">--Pilih Varian--</option>

                                                </select>
                                                <br>
                                                <label class="font-weight-bold">Tahun</label> <br>
                                                <input type="number" name="tahun" id="tahun"
                                                    class="form-control w-50 text-center" min="1900" max="2099"
                                                    maxlength="4" step="1" value="2016" required>
                                                <br>
                                                <label class="font-weight-bold">Catatan untuk montir</label> <br>
                                                <textarea class="form-control" name="pesan" id="pesan" rows="4"
                                                    placeholder="Tuliskan detail kerusakan/request anda disini..."></textarea></textarea>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </form>
                                    </center>
                                </div>
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script>
        $( "#parent" ).change(function(e) {
        var a = document.getElementById("parent").value;
        var b = document.getElementById("child1");
        var option = '';
        var arr = [];
        $('#child1').html('<option value="">--Pilih Model--</option>');
        if(a=='1')
        {
            arr=["Vario","Supra","Beat","CB,CG & CBR","ADV","Sonic","Genio","Revo","PCX","Scoopy","CRF","Super Cub","Tiger"];
            console.log(arr);
            
        }
        else if(a=='2')
        {
            arr=["MX King","Mio","Fino","Jupiter","Vixion","Vega","Byson","Scorpio","MT","Xabre","YZF R","XSR","Soul","Aerox","XMAX","NMAX","WR"];
            console.log(arr);
        }
        else if(a=='3')
        {
            arr=["Address","NEX","Smash","Satria","GSX","Gixxer SF"];
            console.log(arr);
        }
        else if(a=='4')
        {
            arr=["Ninja","Ninja H2","Ninja ZX","KLX","D-Tracker","ZH2","W175","KX","Versys","Vulcan","KSR"];
            console.log(arr);
        }
        else if(a=='5')
        {
            arr=["Duke","Adventure","RC","SX-F"];
            console.log(arr);
        }
        else if(a=='6')
        {
            arr=["Max","Neo","Rocks","Dazz","Apache RTR","Callisto"];
            console.log(arr);
        }
        else if(a=='7')
        {
            arr=["BMW S","BMW R","BMW F","BMW C","BMW K","BMW G","BMW HP4"];
            console.log(arr);
        }
        else if(a=='8')
        {
            arr=["Star ","Cross","Q1","Vortex","E Cross"];
            console.log(arr);
        }
        else if(a=='9')
        {
            arr=["Bonneville","Speed","Tiger","Scrambler","Street","Trident","Rocket"];
            console.log(arr);
        }
        else if(a=='10')
        {
            arr=["Sprint","LX","Vespa S","Primavera","Exclusive","GTS","PTS","946","GTV","Vespa 98","Circuito","Montlhery","Siluro","VBA","Dali","Super Sprint","Special","ET3","PX"];
            console.log(arr);
        }
        else if(a=='11')
        {
            arr=["Classic","Himalayan","Continental","Interceptor","Meteor"];
            console.log(arr);
        }
        else if(a=='12')
        {
            arr=["Scrambler","Monster","Panigale","Multistrada","Hypermotard","Diavel"];
            console.log(arr);
        }
        else if(a=='13')
        {
            arr=["Pulsar","Rouser"];
            console.log(arr);
        }
        else if(a=='14')
        {
            arr=["Iron","FXDR","Forty Eight","Street Bob","Fat Bob","Fat Boy","Breakout","Road King","Street Glide","Road Glide","CVO"];
            console.log(arr);
        }
        else
        {
            console.log('')
        }
        for(var i=0;i<arr.length;i++)
        {
            option += '<option value="'+ (i+1) + '">' + arr[i] + '</option>';
            console.log(option);
        }

        console.log($('#child1'))
        $('#child1').append(option);
        });
    
    </script> 
    <script>
        $( "#child1" ).change(function(e) {
        var parent = document.getElementById("parent").value;
        var a = document.getElementById("child1").value;
        var b = document.getElementById("child2");
        var option = '';
        var arr = [];
        $('#child2').html('<option value="">--Pilih Varian--</option>');
        if(a=='1')
        {   
            arr=["Vario Techno/CBS 110","Vario FI/eSP 110","Vario 125","Vario 150"];
            console.log(arr);
        }
        else if(a=='2')
        {
            arr=["Astrea Supra 100","Astrea Supra X 100","Supra Fit 100","Supra X 125","Supra GTR 150"];
            console.log(arr);
        }
        else if(a=='3')
        {
            arr=["Beat 110","Beat CBS 110","Beat Deluxe 110"];
            console.log(arr);
        }
        else if(a=='4')
        {
            arr=["CB 100","CB 125","CB 150 Verza","CB 175","CB 200","CB 500X","CBR 150","CBR 250RR","CBR 600","CBR 1000","CG 110","CG 125"];
            console.log(arr);
        }
        else if(a=='5')
        {
            arr=["ADV 150"];
            console.log(arr);
        }
        else if(a=='6')
        {
            arr=["Sonic 150"];
            console.log(arr);
        }
        else if(a=='7')
        {
            arr=["Genio 125"];
            console.log(arr);
        }
        else if(a=='8')
        {
            arr=["Revo 110 ","Revo Fit 125","Revo X 125"];
            console.log(arr);
        }
        else if(a=='9')
        {
            arr=["PCX ESP/Hybrid 150","PCX ABS/CBS 150"];
            console.log(arr);
        }
        else if(a=='10')
        {
            arr=["Scoopy Sporty","Scoopy Stylish","Scoopy Fashion","Scoopy Prestige"];
            console.log(arr);
        }
        else if(a=='11')
        {
            arr=["CRF 150","CRF 250","CRF 1100"];
            console.log(arr);
        }
        else if(a=='12')
        {
            arr=["Super Cub C125"];
            console.log(arr);
        }
        else if(a=='13')
        {
            arr=["Tiger Super Cruiser","Tiger New Super Cruiser","Tiger Revolution Cruiser","Tiger New Revolution Cruiser"];
            console.log(arr);
        }
        else
        {
            console.log('')
        }
        for(var i=0;i<arr.length;i++)
        {
            option += '<option value="'+ i + '">' + arr[i] + '</option>';
            console.log(option);
        }
        console.log($('#child2'))
        $('#child2').append(option);
        });
    
    </script> --}}
    <script>
        $("#parent").change(function() {
            console.log($(this).val());
            $("#child1").html('')
            var url = '/bookings/model-mobil/' + $(this).val();
            $.ajax({
                type: "get",
                url: url,
                success: function(response) {
                    $("#child1").append(`<option value="" class="text-center">--Pilih Model Mobil--</option>`)
                    response.forEach(function(params) {
                        $("#child1").append(`<option value="${params.id}">${params.model_mobil}</option>`)
                        // console.log(params.tipe_motor);
                    });
                }
            });
        });

        $("#child1").change(function() {
            console.log($(this).val());
            $("#child2").html('')
            var url = '/bookings/varian-mobil/' + $(this).val();
            $.ajax({
                type: "get",
                url: url,
                success: function(response) {
                    $("#child2").append(`<option value="" class="text-center">--Pilih Varian Mobil--</option>`)
                    response.forEach(function(params) {
                        $("#child2").append(`<option value="${params.id}">${params.varian_mobil}</option>`)
                        // console.log(params.tipe_motor);
                    });
                }
            });
        });
    </script>
@endsection

@push('js')


@endpush
