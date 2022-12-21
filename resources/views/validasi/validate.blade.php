@extends('layouts.app')
@section('content')
    <div class="section">
        <div class="section-header">
            <h1>Validasi Data posisi</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Validasi posisi</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Validasi Data posisi</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row" wire:ignore>
                                <label for="lahan_id" class="col-sm-3 col-form-label">Nama Lahan</label>
                                <div class="col-sm-9">
                                    <input id="lahan_id" disabled class="form-control"
                                           value="{{$posisi->lahan->dokumen}}"
                                           type="text"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="garis_lintang" class="col-sm-3 col-form-label">Garis Lintang</label>
                                <div class="col-sm-9">
                                    <input value="{{$posisi->garis_lintang}}" placeholder="0" type="text"
                                           class="form-control "
                                           id="garis_lintang" disabled
                                    >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="garis_bujur" class="col-sm-3 col-form-label">Garis Bujur</label>
                                <div class="col-sm-9">
                                    <input value="{{$posisi->garis_bujur}}" class="form-control" id="garis_bujur"
                                           type="text" placeholder="0"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mdpl" class="col-sm-3 col-form-label">Diatas Permukaan</label>
                                <div class="col-sm-9">
                                    <input value="{{$posisi->mdpl}}" class="form-control" id="mdpl"
                                           type="text" placeholder="0"/>
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <label for="jumlah_angsuran" class="col-sm-3 col-form-label">Jumlah Angsuran</label>
                                <div class="col-sm-9">
                                    <input disabled class="form-control" id="jumlah_angsuran"
                                           type="text" placeholder="0" value="($posisi->jumlah_ansuran)"/>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="{{route('validate',['posisi' => $posisi])}}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="card">
                            <div class="card-header">
                                <h4>Status Pinjaman</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="validasi" class="col-sm-3 col-form-label">Status Validasi</label>
                                    <div class="col-sm-9">
                                        <select name="validasi"
                                                class="form-control "
                                                id="validasi">
                                            <option value="1" @if($posisi->validasi) selected @endif>Sudah Validasi
                                            </option>
                                            <option value="0" @if(!$posisi->validasi) selected @endif>Belum
                                                Validasi
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Simpan Data</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection