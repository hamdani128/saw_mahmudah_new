<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\DetailAlternatif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alternatif = Alternatif::all();
        return view('pages.alternatif', compact('alternatif'));
    }

    public function add_alternatif(Request $request)
    {
        Auth::user()->alternatif()->create($request->all());
        return back();
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
        //
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
        $alternatif = Alternatif::find($id);
        return view('pages.edit.edit_alternatif', compact('alternatif'));
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
       
    }

    public function ubah(Request $request, $id)
    {
        $alternatif = Alternatif::find($id);
        $alternatif->user_id = Auth::user()->id;
        $alternatif->update($request->all());
        return redirect('/alternatif');
    }

    public function delete($id)
    {
        $alternatif = Alternatif::find($id);
        $alternatif->delete($alternatif);
        return back();
    }


    public function show_detail($id)
    {   
        $alternatif = Alternatif::find($id);
        $detail = $alternatif->detail_alternatif()->latest()->get();
        return view('pages.detail_alternatif',  compact('alternatif', 'detail'));
    }

    public function add_detail(Alternatif $alternatif)
    {
        $detail = request()->all();
        $detail['alternatif_id'] = $alternatif->id;
        Auth::user()->detail_alternatif()->create($detail);
        return back();
    }

    public function nama_tim($id)
    {
        $data = Alternatif::find($id)->nama;
        return response()->json($data);
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
