@extends('layouts.app')
@section('content')
    <div class="section">
        <div class="section-header">
            <h1>Edit Lahan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Edit Lahan</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form action="{{route('lahan.update', ['lahan' => $lahan])}}" method="POST" >
                        @csrf
                        @method("PUT")
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Lahan</h4>
                            </div>
                            <div class="card-body">
                            <div class="form-group row">
                                    <label for="nama" class="col-sm-3 col-form-label">Nama Pemilik</label>
                                    <div class="col-sm-9">
                                        <input name="nama" value="{{$lahan->nama}}" type="text" class="form-control" id="nama" placeholder="Nama Pemilik" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lokasi" class="col-sm-3 col-form-label">Lokasi Lahan</label>
                                    <div class="col-sm-9">
                                    <input name="lokasi"  value="{{$lahan->lokasi}}" type="text" class="form-control"  id="lokasi" placeholder="Desa, Kecamatan, Kabupaten" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="dokumen" class="col-sm-3 col-form-label">Dokumen</label>
                                    <div class="col-sm-9">
                                        <input name="dokumen" value="{{$lahan->dokumen}}" type="text" class="form-control " id="dokumen" placeholder="Dokumen" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sppt" class="col-sm-3 col-form-label">No. SPPT (NOP)</label>
                                     <div class="col-sm-9">
                                    <input name="sppt" value="{{$lahan->sppt}}" type="text" class="form-control"  placeholder="No. SPPT (NOP)" autocomplete="off">
                                     </div>
                                </div>
                                <div class="form-group row">
                                    <label for="luas" class="col-sm-3 col-form-label">Luas Lahan</label>
                                    <div class="col-sm-9">
                                        <input name="luas" value="{{$lahan->luas}}" type="text" class="form-control " id="luas" placeholder="Luas Lahan" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jenis_tanah" class="col-sm-3 col-form-label">Jenis Tanah</label>
                                    <div class="col-sm-9">
                                    <select name="jenis_tanah" value="{{$lahan->jenis_tanah}}" type="text" class="form-control"  id="jenis_tanah" placeholder="Jenis Tanah" autocomplete="off">
                                      <option value=" " ></option>
                                      <option value="-">-</option>
                                      <option value="Darat">Darat</option>
                                      <option value="Tanah Kosong">Tanah Kosong</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                                    <div class="col-sm-9">
                                        <input name="keterangan" value="{{$lahan->keterangan}}" type="text" class="form-control" id="keterangan" placeholder="Keterangan" autocomplete="off">
                                    </div>
                                </div>
                            <div  class="card-footer text-right">
                                <a href="{{ url()->previous() }}" class="btn btn-danger mr-2">Kembali</a>
                                <button class="btn btn-primary" type="submit">Simpan Data Lahan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
