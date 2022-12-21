@extends('layouts.app')
@section('content')
    <div class="section">
        <div class="section-header">
            <h1>Data Lahan Berdasarkan Tanaman</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Data Lahan</div>
            </div>
        </div>
        @livewire('lahan.index')
    </div>
    @endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
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
