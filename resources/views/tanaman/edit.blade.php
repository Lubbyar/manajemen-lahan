@extends('layouts.app')
@section('css-self')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.1.0/dist/geosearch.css" />
    {{-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha512-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" /> --}}

    <style>
        #map {
            width: 100%;
            height: 400px;
        }
    </style>
@endsection
@section('content')
    <div class="section">
        <div class="section-header">
            <h1>Edit Lahan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Edit Lahan</div>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="section-body">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form action="{{route('tanaman.update', ['tanaman' => $tanaman])}}" method="POST" >
                        @csrf
                        @method("PUT")
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Lahan</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
                                    <div class="col-sm-9">
                                        <input name="lokasi" value="{{$tanaman->lokasi}}" type="text" class="form-control" id="lokasi" placeholder="Desa, Kecamatan, Kabupaten" autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="dokumen" class="col-sm-3 col-form-label">Dokumen</label>
                                    <div class="col-sm-9">
                                        <input name="dokumen" value="{{$tanaman->dokumen}}" type="text" class="form-control" id="dokumen" placeholder="Dokumen" autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div id="map"></div>
                                </div>

                                <div class="form-group row">
                                    <label for="lintang_selatan" class="col-sm-3 col-form-label">Latitude</label>
                                    <div class="col-sm-9">
                                        <input name="latitude" value="{{$tanaman->lintang_selatan}}" data-latitude="{{ $tanaman->lintang_selatan }}" type="text" class="form-control " id="latitude" placeholder="Latitude" autocomplete="off" required readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="bujur_timur" class="col-sm-3 col-form-label">Longitude</label>
                                    <div class="col-sm-9">
                                        <input name="longitude" value="{{$tanaman->bujur_timur}}" data-longitude="{{$tanaman->bujur_timur}}" type="text" class="form-control " id="longitude" placeholder="Longitude" autocomplete="off" required readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_tanah" class="col-sm-3 col-form-label">Jenis Tanah</label>
                                    <div class="col-sm-9">
                                        <input name="jenis_tanah"  value="{{$tanaman->jenis_tanaman}}" type="text" class="form-control" id="jenis_tanah" placeholder="Jenis Tanah" autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_tanaman" class="col-sm-3 col-form-label">Jenis Tanaman</label>
                                    <div class="col-sm-9">
                                        <input name="jenis_tanaman" value="{{$tanaman->jenis_tanaman}}" type="text" class="form-control " id="jenis_tanaman" placeholder="Jenis Tanaman" autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="pemilik_tanaman" class="col-sm-3 col-form-label">Pemilik Tanaman</label>
                                     <div class="col-sm-9">
                                        <input name="pemilik_tanaman" value="{{$tanaman->pemilik_tanaman}}" type="text" class="form-control" placeholder="Pemilik Tanaman" autocomplete="off" required>
                                     </div>
                                </div>

                                <div class="form-group row">
                                    <label for="petani_penggarap" class="col-sm-3 col-form-label">Petani Penggarap</label>
                                    <div class="col-sm-9">
                                        <input name="petani_penggarap" value="{{$tanaman->petani_penggarap}}" type="text" class="form-control " id="petani_penggarap" placeholder="Petani Penggarap" autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="card-footer text-right">
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
@section('js')
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
        <script src="https://unpkg.com/leaflet-geosearch@3.1.0/dist/geosearch.umd.js"></script>

        <script>
            let x = $('#longitude').attr('data-longitude');
            let y = $('#latitude').attr('data-latitude');
            // you want to get it of the window global
            const providerOSM = new GeoSearch.OpenStreetMapProvider();

            //leaflet map
            var leafletMap = L.map('map', {
                fullscreenControl: true,
                // OR
                fullscreenControl: {
                    pseudoFullscreen: false // if true, fullscreen to page width and height
                },
                minZoom: 2
            }).setView([y, x], 17);

            L.tileLayer('//{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(leafletMap);

            let theMarker = {};

            leafletMap.on('click', function(e) {
                let latitude = e.latlng.lat.toString().substring(0, 15);
                let longitude = e.latlng.lng.toString().substring(0, 15);
                document.getElementById("latitude").value = latitude;
                document.getElementById("longitude").value = longitude;
                let popup = L.popup()
                    .setLatLng([latitude, longitude])
                    .setContent("Kordinat : " + latitude + " - " + longitude)
                    .openOn(leafletMap);

                if (theMarker != undefined) {
                    leafletMap.removeLayer(theMarker);
                };
                theMarker = L.marker([latitude, longitude]).addTo(leafletMap);
            });

            const search = new GeoSearch.GeoSearchControl({
                provider: providerOSM,
                style: 'bar',
                searchLabel: 'Cari Daerah.. (Cth: Buah Batu, Bandung)',
            });

            leafletMap.addControl(search);
        </script>
    @endsection
