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
            <h1>Cetak Slip Pencairan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Cetak Slip Pencairan</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Cetak Slip Pencairan</h4>
                        </div>
                        <div class="card-body p-0">
                            <div id="print">
                                <div align="center">
                                    <table width="720px">
                                        <tr>
                                            <td><img src="{{asset('')}}" width="120"></td>
                                            <td id="">
                                                <div align="center">
                                                    <span style="font-size: large; ">SLIP PENCAIRAN POSISI LAHAN</span><br>
                                                    <span style="font-size: large; ">NO : SPP/X.VI/2020/12</span><br>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <hr style="border-width: 3px; border-color: black;">
                                            </td>
                                        </tr>

                                    </table>
                                    <table>
                                        <tr class="text2">
                                            <td>Nama</td>
                                            <td width="572">: {{$posisi->lahan->dokumen}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah</td>
                                            <td width="564">: {{$posisi->garis_bujur}}</td>
                                        </tr>
                                    </table>
                                    <br><br><br><br><br><br>

                                    <table width="625">
                                        <tr>
                                            <td width="50%"></td>
                                            <td width="50%" class="text" align="center">Cirebon {{Carbon\Carbon::now()->format('d-m-Y')}}</td>
                                        </tr>
                                    </table>
                                    <br>

                                    <table width="625">
                                        <tr>
                                            <td width="50%" class="text" align="center">{{$posisi->lahan->dokumen}}</td>
                                            <td width="50%" class="text" align="center">Ketua</td>
                                        </tr>


                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button id="btn_print" onclick="printElement('print')" class="btn btn-primary">Print
                                Slip Pencairan</button>
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