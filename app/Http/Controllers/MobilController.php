<?php

namespace App\Http\Controllers;

use App\Models\Merk_Mobil;
use App\Models\Mobil;
use App\Models\Model_Mobil;
use App\Models\Montir;
use App\Models\Varian_Mobil;
use Illuminate\Http\Request;


class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Mobil::all();
        $merk = Merk_Mobil::all();
        return view('bookings.mobil',['data' => $datas, 'merk' => $merk]);
    }
    
    public function getModelAjax($id)
    {
        # code...
        $model = Model_Mobil::where('merk-mobil_id', $id)->get();
        return response()->json($model);
    }
    public function getVarianAjax($id)
    {
        # code...
        $varian = Varian_Mobil::where('model-mobil_id', $id)->get();
        
        return response()->json($varian);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Mobil;
        $store->id_motor = $request->id_mobil;
        $store->jenis_servis = $request->jenis_servis;
        $store->merk = $request->merk;
        $store->model = $request->model;
        $store->varian = $request->varian;
        $store->tahun = $request->tahun;
        $store->pesan = $request->pesan;

        $store->save();
        $datas = Mobil::all();
        $montir = Montir::all();
        return redirect()->route('find.montir');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
