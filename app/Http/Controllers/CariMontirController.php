<?php

namespace App\Http\Controllers;

use App\Models\Montir;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CariMontirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('montirs')
            ->join('users', 'montirs.id_user', '=', 'users.id')
            ->select('users.*', 'montirs.*')
            ->get();
        return view('find.index', ['data' => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = DB::table('montirs')
            ->join('users', 'montirs.id_user', '=', 'users.id')
            ->select('users.*', 'montirs.*')
            ->get();
        return view('map-chat.index', ['data' => $datas]);
    }

    public function mapmontir()
    {
        $datas = DB::table('montirs')
            ->join('users', 'montirs.id_user', '=', 'users.id')
            ->select('users.*', 'montirs.*')
            ->get();
        return view('map-chat.montir', ['data' => $datas]);
    }
    public function ordersum()
    {
        $datas = Transaction::all();
        return view('ordersum.index',['data'=>$datas]);
    }

    public function input()
    {
        $datas = Transaction::all();
        return view('input-order.index',['data'=>$datas]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Transaction;
        $store->date = $request->date;
        $store->detail = $request->detail;
        $store->satuan = $request->satuan;
        $store->spesifikasi = $request->spesifikasi;
        $store->save();

        $datas = Transaction::all();
        return view('ordersum.index',['data'=>$datas]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
