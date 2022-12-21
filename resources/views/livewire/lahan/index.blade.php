<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Lahan</h4>
                    <div class="card-header-form">
                        <form>
                            <div class="input-group">
                                <input type="text" wire:model="search" class="form-control" placeholder="Search"
                                    aria-label="search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary" id="cari"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="ml-auto card-header-action">
                        <a href="{{ route('lahan.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Lahan</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pemilik</th>
                                    <th>Lokasi</th>
                                    <th>Dokumen</th>
                                    <th>Luas Lahan</th>
                                    <th>Jenis Tanah</th>
                                    <th>No. SPPT (NOP)</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                                @if ($list_lahan->isEmpty())
                                    <tr>
                                        <td colspan="6" class="text-center">Data lahan belum tersedia</td>
                                    </tr>
                                @else
                                    @foreach ($list_lahan as $index => $lahan)
                                        <livewire:lahan.single :lahan="$lahan" :index="$index + 1" :key="time() . $lahan->id" />
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <div class="card-body p-0">
                            <div class="col-md-4">
                                {{ $list_lahan->links() }} Jumlah Data : {{ $list_lahan->total() }}
                            </div>
                            <br>
                            <br />
                        </div>
                    </div>
                </div>
                {{-- <div class="card-footer text-center">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div wire:ignore id='map' style='width: 100%; height: 400px;'></div>
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
                    @push('scripts')
                        <script>
                            document.addEventListener('livewire:load', () => {
                                const defaultLocation = [107.59553394562141, -6.951939580144085]
                                mapboxgl.accessToken = '{{ env('MAPBOX_KEY') }}';
                                var map = new mapboxgl.Map({
                                    container: 'map',
                                    center: defaultLocation,
                                    zoom: 11.15,
                                    style: 'mapbox://styles/mapbox/streets-v11'
                                });


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
                    @endpush
                </div> --}}
            </div>
        </div>
    </div>
</div>
