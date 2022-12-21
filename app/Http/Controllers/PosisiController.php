<?php

namespace App\Http\Controllers;

use App\Models\Posisi;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PosisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('posisi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('posisi.create');
    }


    /**
     * Display the specified resource.
     *
     * @param Posisi $Posisi
     * @return View
     */
    public function show(Posisi $posisi): View
    {
        return view('posisi.show', compact('posisi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Posisi $posisi
     * @return Response
     */
    public function edit(Posisi $posisi)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Posisi $posisi
     * @return Response
     */
    public function update(Request $request, Posisi $posisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Posisi $posisi
     * @return Response
     */
    public function destroy(Posisi $posisi)
    {
        //
    }
}
