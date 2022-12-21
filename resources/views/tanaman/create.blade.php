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
        <div class="section-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Lahan</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('tanaman.store') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="lokasi" class="col-sm-3 col-form-label">Nama Pemilik</label>
                                    <div class="col-sm-9">
                                        <select class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Pemilik" autocomplete="off" required>
                                            <option value="" selected disabled>--- Pilih Nama Pemilik ---</option>
                                            @foreach ($lahans as $item)
                                                <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                                            @endforeach
                                        </select>

                                        @error('nama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lokasi" class="col-sm-3 col-form-label">Lokasi Lahan</label>
                                    <div class="col-sm-9">
                                        <input class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" placeholder="Desa, Kecamatan, Kabupaten" rows="3000" autocomplete="off" required readonly>

                                        @error('lokasi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="dokumen" class="col-sm-3 col-form-label">dokumen</label>
                                    <div class="col-sm-9">
                                        <input class="form-control @error('dokumen') is-invalid @enderror" id="dokumen" name="dokumen" placeholder="Dokumen" rows="3000" autocomplete="off" required readonly>

                                        @error('dokumen')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_tanah" class="col-sm-3 col-form-label">Jenis Tanah</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('jenis_tanah') is-invalid @enderror" id="jenis_tanah" name="jenis_tanah" placeholder="Jenis Tanah" autocomplete="off" required readonly>

                                        @error('jenis_tanah')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div id="map"></div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_tanah" class="col-sm-3 col-form-label">Longitude</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="longitude" name="longitude" autocomplete="off" required readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jenis_tanah" class="col-sm-3 col-form-label">Lattitude</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="latitude" name="latitude" autocomplete="off" required readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_tanaman" class="col-sm-3 col-form-label">Jenis Tanaman</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('jenis_tanaman') is-invalid @enderror" id="jenis_tanaman" name="jenis_tanaman" placeholder="Jenis Tanaman" autocomplete="off" required>

                                        @error('jenis_tanaman')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="pemilik_tanaman" class="col-sm-3 col-form-label">Pemilik Tanaman</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('pemilik_tanaman') is-invalid @enderror" id="pemilik_tanaman" name="pemilik_tanaman" placeholder="Pemilik Tanaman" autocomplete="off" required>
                                        @error('pemilik_tanaman')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="petani_penggarap" class="col-sm-3 col-form-label">Petani Penggarap</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('petani_penggarap') is-invalid @enderror" id="petani_penggarap" name="petani_penggarap" placeholder="Petani Penggarap" autocomplete="off" required>
                                        @error('petani_penggarap')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="card-footer text-right">
                                    <a href="{{ url('tanaman') }}" class="btn btn-danger mr-2">Kembali</a>
                                    <button class="btn btn-primary">Simpan Data Lahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div id="menu">
            <!-- See a list of Mapbox-hosted public styles at -->
            <!-- https://docs.mapbox.com/api/maps/styles/#mapbox-styles -->
            <input id="satellite-v9" type="radio" name="rtoggle" value="satellite" checked="checked">
            <label for="satellite-v9">satellite</label>
            <input id="light-v10" type="radio" name="rtoggle" value="light">
            <label for="light-v10">light</label>
            <input id="dark-v10" type="radio" name="rtoggle" value="dark">
            <label for="dark-v10">dark</label>
            <input id="streets-v11" type="radio" name="rtoggle" value="streets">
            <label for="streets-v11">streets</label>
            <input id="outdoors-v11" type="radio" name="rtoggle" value="outdoors">
            <label for="outdoors-v11">outdoors</label>
            </div> --}}

            @push('scripts')
                {{-- <script>
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
                }).setView([0,0], 2);

                L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(leafletMap);

                let theMarker = {};

                leafletMap.on('click',function(e) {
                    let latitude  = e.latlng.lat.toString().substring(0,15);
                    let longitude = e.latlng.lng.toString().substring(0,15);
                    // document.getElementById("latitude").value = latitude;
                    // document.getElementById("longitude").value = longitude;
                    let popup = L.popup()
                        .setLatLng([latitude,longitude])
                        .setContent("Kordinat : " + latitude +" - "+  longitude )
                        .openOn(leafletMap);

                    if (theMarker != undefined) {
                        leafletMap.removeLayer(theMarker);
                    };
                    theMarker = L.marker([latitude,longitude]).addTo(leafletMap);
                });

                const search = new GeoSearch.GeoSearchControl({
                    provider: providerOSM,
                    style: 'bar',
                    searchLabel: 'Sinjai',
                });

                leafletMap.addControl(search);
                </script> --}}

                    {{-- <script>
                    var map = L.map('map').setView([-6.954044, 107.6612245], 13);
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        maxZoom: 19,
                        attribution: '© OpenStreetMap'
                    }).addTo(map);
                </script> --}}

                    {{-- <script>
                    document.addEventListener('livewire:load', () => {
                        const defaultLocation = [107.59553394562141, -6.951939580144085]
                        mapboxgl.accessToken =
                            "pk.eyJ1IjoieWFlbGFoYW1tIiwiYSI6ImNrdjU1Y3pwdTEyNWoyb3A2cjN4OThnb3IifQ.HWnu302_FDy6RCACyGFHCw";
                        var map = new mapboxgl.Map({
                            container: 'map',
                            center: defaultLocation,
                            zoom: 11.15,
                            style: 'mapbox://styles/mapbox/streets-v11'
                        });

                        const layerList = document.getElementById('menu');
                        const inputs = layerList.getElementsByTagName('input');

                        for (const input of inputs) {
                            input.onclick = (layer) => {
                                const layerId = layer.target.id;
                                map.setStyle('mapbox://styles/mapbox/' + layerId);
                            };
                        }


                        //search
                        map.addControl(
                            new MapboxGeocoder({
                                accessToken: mapboxgl.accessToken,
                                mapboxgl: mapboxgl
                            })
                        )





                        map.addControl(new mapboxgl.NavigationControl())

                        map.on('click', (e) => {
                            const longtitude = e.lngLat.lng
                            const lattitude = e.lngLat.lat

                            console.log({
                                longtitude,
                                lattitude
                            });
                        })


                    })
                </script> --}}
            @endpush
            {{-- @livewire('tanaman.create') --}}
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

    <script>
        $("#nama").change(function() {
            var nama = $("#nama").val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "get",
                url: '{{ url('tanaman/create/ajax_show') }}/' + nama,
                success: function(data, status, xhr) {
                    $('#lokasi').val(data.lokasi);
                    $('#dokumen').val(data.dokumen);
                    $('#jenis_tanah').val(data.jenis_tanah);
                },
            });

        });
    </script>
@endsection
