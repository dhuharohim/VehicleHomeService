@extends('layouts.all')

@section('section')

<div class="container mt-4 mb-4">

        
    <h3 class="mt-2 mb-6 font-weight-bold text-center">Isi Form detail order</h3>
    <div class="d-flex justify-content-center mt-4">
        <div class="row w-25">
            <div class="col-12">
                        <div class="card">
                            <div class="card-body shadow-lg">
                                <center>
                                    <form action="{{ route('input-order.store') }}" class="" method="POST">
                                        @csrf
                                        <br>
                                        <div class="form-group">
                                            
                                                <label class="font-weight-bold">Masukan Tanggal</label>
                                            <input type="date" id="date" name="date" class="d-flex justify-content-center form-control">
                                            <br>
                                            <label class="font-weight-bold">Detail Pesanan</label>
                                            <input type="text" id="detail" name="detail" class="d-flex justify-content-center form-control" > 
                                            <br>
                                            <label class="font-weight-bold">Satuan</label>
                                            <input type="text" id="satuan" name="satuan" class="d-flex justify-content-center form-control" >
                                            <br>
                                            <label class="font-weight-bold">Spesifikasi</label>
                                            <input type="text" id="spesifikasi" name="spesifikasi" class="d-flex justify-content-center form-control" >
                                            
                                                   
                                    
                                            
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
    
@endsection