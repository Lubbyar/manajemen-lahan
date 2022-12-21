@extends('layouts.app')
@section('css-self')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.1.0/dist/geosearch.css" />
    {{-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha512-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" /> --}}

    <style>
        #map {
            width: 150%;
            height: 400px;
        }
    </style>
@endsection
@section('content')
    <div class="section">
        <div class="section-header">
            <h1>Posisi</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Posisi</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Posisi</h4>
                        </div>

                        <div class="card-footer text-center">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div id="map"></div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h4>Koordinat</h4>
                                        <div class="form-group">
                                            <label>Longtitude</label>
                                                <input type="text" id="longitude" style="text-align: center" class="form-control" placeholder="Titik x" autocomplete="off">
                                            <label>Lattitude</label>
                                                <input type="text" id="latitude" style="text-align: center" class="form-control" placeholder="Titik Y" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- @livewire('posisi.index') --}}
    </div>
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="https://unpkg.com/leaflet-geosearch@3.1.0/dist/geosearch.umd.js"></script>
    {{-- <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha512-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script> --}}

    <script>
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
        }).setView([-7.0734812, 108.1790837], 17);

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
