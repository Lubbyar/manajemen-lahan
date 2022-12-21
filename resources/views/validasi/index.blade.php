@extends('layouts.app')
@section('content')
    <div class="section">
        <div class="section-header">
            <h1>Data posisi Validasi</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Data posisi Validasi</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data posisi Validasi</h4>
                            <div class="ml-auto card-header-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control"
                                               placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <th>No</th>
                                        {{-- <th>Tanggal Pinjam</th> --}}
                                        <th>Nama Lahan</th>
                                        <th>Jangka Waktu</th>
                                        {{-- <th>Jumlah Angsuran</th> --}}
                                        <th>Jumlah Pinjaman</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @if($list_posisi->isEmpty())
                                        <tr>
                                            <td colspan="6" class="text-center">Data posisi belum tersedia</td>
                                        </tr>
                                    @else
                                        @foreach($list_posisi as $index => $posisi)
                                           <tr>
                                               <td>{{$index+1}}</td>
                                               {{-- <td>{{$posisi->tanggal_pinjam}}</td> --}}
                                               <td>{{$posisi->lahan->dokumen}}</td>
                                               <td>{{$posisi->garis_litang}} </td>
                                               <td>{{$posisi->garis_bujur}}</td>
                                               <td>{{$posisi->mdpl}}</td>
                                               <td>{{$posisi->validasi ? "Sudah Validasi" : "Belum Validasi"}}</td>
                                               <td>@if($posisi->validasi)
                                                       <a disabled class="btn btn-dark">Validasi</a>
                                                   @else
                                                       <a href="{{route('validasi', ['posisi' => $posisi])}}" class="btn
                                                       btn-primary">Validasi</a>
                                                   @endif
                                               </td>
                                           </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-center">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
