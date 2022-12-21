<tr>
    <td>{{$index}}</td>
    <td>{{$lahan->nama}}</td>
    <td>{{$lahan->lokasi}}</td>
    <td>{{$lahan->dokumen}}</td>
    <td>{{$lahan->luas}} m<sup>2 </td>
    <td>{{$lahan->jenis_tanah}}</td>
    <td>{{$lahan->sppt}}</td>
    <td>{{$lahan->keterangan}}</td>
    <td>
        <button class="btn btn-sm btn-danger" wire:click="hapus" >Hapus</button>
        <a href="{{route('lahan.edit', ['lahan' => $lahan])}}" class="btn btn-sm btn-warning">Edit</a>
    </td>
</tr>

