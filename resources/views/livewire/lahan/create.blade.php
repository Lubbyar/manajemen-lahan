<div class="section-body">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Lahan</h4>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Pemilik</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Pemilik" autocomplete='off'>
                            @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lokasi" class="col-sm-3 col-form-label">Lokasi Lahan</label>
                        <div class="col-sm-9">
                            <textarea wire:model.lazy="lokasi" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" placeholder="Desa, Kecamatan, Kabupaten" rows="3000" autocomplete='off'></textarea>
                            @error('lokasi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dokumen" class="col-sm-3 col-form-label">Dokumen</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="dokumen" type="text" class="form-control @error('dokumen') is-invalid @enderror" id="dokumen" placeholder="Dokumen" autocomplete='off'>
                            @error('dokumen') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sppt" class="col-sm-3 col-form-label">No. SPPT (NOP)</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="sppt" type="text" class="form-control @error('sppt') is-invalid @enderror" id="sppt" placeholder="No. SPPT (NOP)" autocomplete='off'>
                            @error('sppt') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="luas" class="col-sm-3 col-form-label">Luas Lahan</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="luas" type="text" class="form-control @error('luas') is-invalid @enderror" id="luas" placeholder="Luas Lahan" autocomplete='off'>
                            @error('luas') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_tanah" class="col-sm-3 col-form-label">Jenis Tanah</label>
                        <div class="col-sm-9">
                        <select wire:model.lazy="jenis_tanah" class="form-control @error('jenis_tanah') is-invalid @enderror" id="jenis_tanah" autocomplete='off'>
                            <option value=" " selected>--- Pilih Jenis Tanah ---</option>
                            <option value="-">-</option>
                            <option value="Darat">Darat</option>
                            <option value="Tanah Kosong">Tanah Kosong</option>
                        </select>
                        @error('jenis_tanah') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" placeholder="Keterangan" autocomplete='off'>
                            @error('keterangan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>
                <div wire:click="simpan" class="card-footer text-right">
                    <a href="{{ url('lahan') }}" class="btn btn-danger mr-2">Kembali</a>
                    <button class="btn btn-primary">Simpan Data Lahan</button>
                </div>
            </div>
        </div>
    </div>
</div>

