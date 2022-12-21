<div class="section-body">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Lahan</h4>
                </div>
                <div class="card-body">

                    <!-- <div class="form-group row">
                        <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="lokasi" type="text" class="form-control " id="lokasi"
                                   placeholder="Lokasi Lahan">
                        </div>
                    </div> -->

                    <div class="form-group row">
                        <label for="lokasi" class="col-sm-3 col-form-label">Nama Pemilik</label>
                        <div class="col-sm-9">
                            <select wire:model.lazy="nama" class="form-control @error('nama') is-invalid @enderror"
                                id="nama" placeholder="Nama Pemilik">
                                <option value="" selected>--- Pilih Nama Pemilik ---</option>
                                @php
                                    $lahans = DB::table('lahans')->get();
                                @endphp
                                @foreach ($lahans as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
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
                            <textarea wire:model.lazy="lokasi" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi"
                                placeholder="Desa, Kecamatan, Kabupaten" rows="3000" required></textarea>
                            {{-- <select wire:model.lazy="lokasi" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" placeholder="Lokasi Lahan">
                                <option value="" selected>--- Pilih Lokasi Lahan ---</option>
                                @foreach ($lahans as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach --}}
                            </select>
                            @error('lokasi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="dokumen" class="col-sm-3 col-form-label">dokumen</label>
                        <div class="col-sm-9">
                            <textarea wire:model.lazy="dokumen" class="form-control @error('dokumen') is-invalid @enderror" id="dokumen"
                                placeholder="Dokumen" rows="3000"></textarea>

                            @error('dokumen')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jenis_tanaman" class="col-sm-3 col-form-label">Jenis Tanaman</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="jenis_tanaman" type="text"
                                class="form-control @error('jenis_tanaman') is-invalid @enderror" id="jenis_tanaman"
                                placeholder="Jenis Tanaman">

                            @error('jenis_tanaman')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lintang_selatan" class="col-sm-3 col-form-label">Lintang Selatan</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="lintang_selatan" type="text"
                                class="form-control @error('lintang_selatan') is-invalid @enderror" id="lintang_selatan"
                                placeholder="°">

                            @error('lintang_selatan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="bujur_timur" class="col-sm-3 col-form-label">Bujur Timur</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="bujur_timur" type="text"
                                class="form-control @error('bujur_timur') is-invalid @enderror" id="bujur_timur"
                                placeholder="°">
                            @error('bujur_timur')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jenis_tanah" class="col-sm-3 col-form-label">Jenis Tanah</label>
                        <div class="col-sm-9">
                            <select wire:model.lazy="jenis_tanah"
                                class="form-control @error('jenis_tanah') is-invalid @enderror" id="jenis_tanah"
                                placeholder="Jenis Tanah">
                                <option value=" "></option>
                                <option value="-">-</option>s
                                <option value="Darat">Darat</option>
                                <option value="Tanah Kosong">Tanah Kosong</option>
                            </select>
                            @error('jenis_tanah')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pemilik_tanaman" class="col-sm-3 col-form-label">Pemilik Tanaman</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="pemilik_tanaman" type="text"
                                class="form-control @error('pemilik_tanaman') is-invalid @enderror" id="pemilik_tanaman"
                                placeholder="Pemilik Tanaman">
                            @error('pemilik_tanaman')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- <div class="form-group row">
                        <label for="jenis_tanah" class="col-sm-3 col-form-label">Jenis Tanah</label>
                        <div class="col-sm-9">
                        <select wire:model.lazy="jenis_tanah" class="form-control" id="jenis_tanah"
                                      placeholder="Jenis Tanah">
                                      <option value=" " ></option>
                                      <option value="-">-</option>
                                      <option value="Darat">Darat</option>
                                      <option value="Tanah Kosong">Tanah Kosong</option>
                                    </select>
                        </div>
                    </div> -->

                    <div class="form-group row">
                        <label for="petani_penggarap" class="col-sm-3 col-form-label">Petani Penggarap</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="petani_penggarap" type="text"
                                class="form-control @error('petani_penggarap') is-invalid @enderror"
                                id="petani_penggarap" placeholder="Petani Penggarap">
                            @error('petani_penggarap')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="card-footer text-center">
                    <div class="container-fluid">
                        <div class="row">
                            {{-- <div class="col-md-8"> --}}
                            <div wire:ignore id='map' style='width: 100%; height: 400px;'>
                            </div>
                        </div>

                        <div class="card-body">
                            <h4>Koordinat</h4>
                            <div class="form-group">
                                <label>Longtitude</label>
                                <input wire:model="long" type="text" class="form-control">
                                <label>Lattitude</label>
                                <input wire:model="lat" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div id="map"></div> --}}

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

                {{-- @push('scripts')
                    <script>
                        var map = L.map('map').setView([-6.954044, 107.6612245], 13);
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            maxZoom: 19,
                            attribution: '© OpenStreetMap'
                        }).addTo(map);
                    </script>


                    <script>
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
                                @this.long = longtitude
                                @this.lat = lattitude
                            })


                        })
                    </script>
                @endpush --}}

                <div wire:click="simpan" class="card-footer text-right">
                    <button class="btn btn-primary">Simpan Data Lahan</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
