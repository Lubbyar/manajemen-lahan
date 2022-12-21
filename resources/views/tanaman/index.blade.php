@extends('layouts.app')
@section('content')
    <div class="section">
        <div class="section-header">
            <h1>Daftar Lahan Berdasarkan Jenis Tanaman</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Data Lahan</div>
            </div>
        </div>
        @livewire('tanaman.index')
    </div>
@endsection
@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('sukses'))
        <script>
            Swal.fire({
                icon: 'success',
                text: '{{ session("sukses") }}',
                showCloseButton: true,
                timer: 1700,
            })
        </script>
    @endif
    @if (session('gagal'))
        <script>
            Swal.fire({
                icon: 'error',
                text: '{{ session("gagal") }}',
                showCloseButton: true,
                timer: 1700,
            })
        </script>
    @endif
@endsection
