<div class="section-body">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Posisi</h4>
                </div>
                <div class="card-body">
                    {{-- <div class="form-group row">
                        <label for="tanggal_pinjam" class="col-sm-3 col-form-label">Tanggal Pinjam*</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="tanggal_pinjam" type="date" class="form-control " id="tanggal_pinjam">
                        </div>
                    </div> --}}
                    <div class="form-group row" wire:ignore>
                        <label for="lahan_id" class="col-sm-3 col-form-label">No Sertif/Ajb</label>
                        <div class="col-sm-9">
                            <select id="lahan_id" name="lahan_id" class="form-control select2">
                                <option selected>--- Pilih Sertif/Ajb ---</option>
                                @foreach($list_lahan as $lahan)
                                    <option value="{{$lahan->id}}">{{$lahan->dokumen}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="garis_lintang" class="col-sm-3 col-form-label">Lintang Selatan</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="garis_lintang" placeholder="0" type="text" class="form-control "
                                   id="garis_lintang"
                                >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="garis_bujur" class="col-sm-3 col-form-label">Bujur Timur</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="garis_bujur" class="form-control" id="garis_bujur"
                                      type="text" placeholder="0"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mdpl" class="col-sm-3 col-form-label">Diatas Permukaan</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="mdpl" class="form-control" id="mdpl"
                                      type="text" placeholder="mdpl"/>
                        </div>
                    </div>
                </div>
                <div wire:click="simpan" class="card-footer text-right">
                    <button class="btn btn-primary">Simpan Data Posisi</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('javascript')
<script>
    $(document).ready(function () {
        $('.select2').on('change', function (e) {
            let elementName = $(this).attr('id');
            let data = $(this).select2("val");
            @this.set(elementName, data);
        });
    })
</script>
@endpush