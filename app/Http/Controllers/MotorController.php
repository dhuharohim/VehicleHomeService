<?php

namespace App\Http\Controllers;

use App\Models\Merk as ModelsMerk;
use App\Models\Montir;
use App\Models\Motor;
use App\Models\Tipe;
use App\Models\Varian;
use Illuminate\Http\Request;
use Merk;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Motor::all();
        $merk = ModelsMerk::all();
        return view('bookings.motor', ['data' => $datas, 'merk' => $merk]);
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
        $store = new Motor;
        $store->id_motor = $request->id_motor;
        $store->jenis_servis = $request->jenis_servis;
        $store->merk = $request->merk;
        $store->model = $request->model;
        $store->varian = $request->varian;
        $store->tahun = $request->tahun;
        $store->pesan = $request->pesan;

        $store->save();
        $datas = Motor::all();
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

    public function getTipeAjax($id)
    {
        # code...
        $tipe = Tipe::where('merk_id', $id)->get();
        return response()->json($tipe);
    }
    public function getVarianAjax($id)
    {
        # code...
        $varian = Varian::where('model_id', $id)->get();
        return response()->json($varian);
    }
}
