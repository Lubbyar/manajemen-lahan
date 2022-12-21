@extends('layouts.app')
@push('stylesheet')
    <style type="text/css">
        #isi{
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: medium;
            border-collapse:collapse ;
            margin-top: 10px;
        }

        #isi, th,td{
            padding: 5px 10px;
        }

        .nominal{
            text-align: left;
        }
    </style>
@endpush
@section('content')
    <div class="section">
        <div class="section-header">
            <h1>Jurnal Umum</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Jurnal Umum Bendahara</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Jurnal Umum Bendahara</h4>
                        </div>
                        <div class="card-body">
                           <div class="row">
                               <div class="col-md-4">
                                   <form action="{{route("laporan.jurnal-bendahara")}}">
                                       <div class="card">
                                           <div class="card-header">
                                               Filter
                                           </div>
                                           <div class="card-body">
                                               <div class="form-group">
                                                   <label for="start_date" class="control-label">Dari Tanggal</label>
                                                   <input type="date" name="start_date" class="form-control" id="start_date">
                                               </div>
                                               <div class="form-group">
                                                   <label for="end_date" class="control-label">Sampai Tanggal</label>
                                                   <input type="date" name="end_date" class="form-control"
                                                          id="start_date">
                                               </div>
                                           </div>
                                           <div class="card-body">
                                               <button type="submit" class="btn btn-primary">Terapkan</button>
                                               <a class="btn btn-danger">Batal</a>
                                           </div>
                                       </div>
                                   </form>
                               </div>
                               <div class="col-md-8">
                                   <div id="print">
                                       <div align="center">
                                           <!-- <img src="{{asset('')}}" width="130" height="150"><br> -->
                                           <span style="font-size: large; "><b>Manajemen Lahan Citra Siliwangi</b></span><br><br>
                                           <span style="font-size: medium; "><b>Bandung</b></span><br>
                                           <span style="font-size: medium; "><b></b></span><br><br><br>
                                           <span style="font-style: italic; font-size: small; ">Periode 2021-2022</span>

                                           <table border="2" style="border-color: black; border-width: 2px;"
                                                  width="720px"
                                                  class="isi">
                                               <thead>
                                               <tr>
                                                   <th>Tanggal</th>
                                                   <th>Keterangan</th>
                                                   <th>Debit</th>
                                                   <th>Posisi</th>
                                               </tr>
                                               </thead>
                                               <tbody>
                                               @foreach($list_posisi as $posisi)
                                                   <tr>
                                                       <td rowspan="2" class="tgl"> {{$posisi->tanggal_pinjam}}</td>
                                                       <td> Piutang- {{$posisi->lahan->dokumen}}</td>
                                                       <td>{{$posisi->garis_bujur}}</td>
                                                       <td></td>
                                                   </tr>
                                                   <tr>
                                                       <td>Kas</td>
                                                       <td></td>
                                                       <td>{{$posisi->garis_bujur}}</td>
                                                   </tr>
                                               @endforeach
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                               </div>
                           </div>
                        </div>
                        <div class="card-footer text-right">
                            <button id="btn_print" onclick="printElement('print')" class="btn btn-primary">Print
                                Jurnal Umum</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('javascript')
    <script>
        function printElement(idElement){
            let printContents = document.getElementById(idElement).innerHTML;
            let originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endpush