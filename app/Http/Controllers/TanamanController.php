<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTanamanRequest;
use App\Models\Tanaman;
use App\Models\Lahan;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TanamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('tanaman.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $data = ([
            'lahans' => Lahan::select('nama')->groupBy('nama')->get(),
            'tanamans' => Tanaman::get(),
        ]);

        return view('tanaman.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'              => 'required|string',
            'lokasi'            => 'required|string',
            'dokumen'           => 'required|string',
            'jenis_tanah'       => 'required|string',
            'longitude'        => 'required|string',
            'latitude'          => 'required|string',
            'jenis_tanaman'     => 'required|string',
            'pemilik_tanaman'   => 'required|string',
            'petani_penggarap'  => 'required|string',
        ]);

        $data = [
            'lokasi'            => $request->lokasi,
            'dokumen'           => $request->dokumen,
            'jenis_tanah'       => $request->jenis_tanah,
            'jenis_tanaman'     => $request->jenis_tanaman,
            'pemilik_tanaman'   => $request->pemilik_tanaman,
            'petani_penggarap'  => $request->petani_penggarap,
            'lintang_selatan'   => $request->latitude,
            'bujur_timur'       => $request->longitude,
        ];

        $create = Tanaman::create($data);

        if ($create) {
            return redirect(route('tanaman.index'))->with('sukses', 'Data Lahan Berhasil Ditambahkan!!');
        } else {
            return redirect(route('tanaman.index'))->with('gagal', 'Data Lahan Gagal Ditambahkan!!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param Tanaman $Tanaman
     * @return Response
     */
    public function show(Tanaman $tanaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tanaman $tanaman
     * @return View
     */
    public function edit(Tanaman $tanaman): View
    {
        return view('tanaman.edit', compact('tanaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTanamanRequest $request
     * @param Tanaman $tanaman
     * @return Response
     */
    public function update(Request $request, Tanaman $tanaman)
    {
        $request->validate([
            'lokasi'            => 'required|string',
            'dokumen'           => 'required|string',
            'jenis_tanah'       => 'required|string',
            'longitude'        => 'required|string',
            'latitude'          => 'required|string',
            'jenis_tanaman'     => 'required|string',
            'pemilik_tanaman'   => 'required|string',
            'petani_penggarap'  => 'required|string',
        ]);

        $data = [
            'lokasi'            => $request->lokasi,
            'dokumen'           => $request->dokumen,
            'jenis_tanah'       => $request->jenis_tanah,
            'jenis_tanaman'     => $request->jenis_tanaman,
            'pemilik_tanaman'   => $request->pemilik_tanaman,
            'petani_penggarap'  => $request->petani_penggarap,
            'lintang_selatan'   => $request->latitude,
            'bujur_timur'       => $request->longitude,
        ];

        $update = $tanaman->update($data);

        if ($update) {
            return redirect(route('tanaman.index'))->with('sukses', 'Data Lahan Berhasil Diubah!!');
        } else {
            return redirect(route('tanaman.index'))->with('gagal', 'Data Lahan Gagal Diubah!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tanaman $tanaman
     * @return Response
     */
    public function destroy(Tanaman $tanaman)
    {
        //
    }

    public function getAjax($nama)
    {
        $dataLahan = Lahan::where('nama',$nama)->first();

        $items = [];
        $items['lokasi'] = $dataLahan->lokasi;
        $items['dokumen'] = $dataLahan->dokumen;
        $items['jenis_tanah'] = $dataLahan->jenis_tanah;
        return $items;
    }
}
