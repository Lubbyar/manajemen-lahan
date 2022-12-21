<tr>
    <td>{{$index}}</td>
    <td>{{$tanaman->lokasi}}</td>
    <td>{{$tanaman->dokumen}}</td>
    <td>{{$tanaman->lintang_selatan}}<sup>°</td>
    <td>{{$tanaman->bujur_timur}}<sup>°</td>
    <td>{{$tanaman->jenis_tanah}}</td>
    <td>{{$tanaman->jenis_tanaman}}</td>
    <td>{{$tanaman->pemilik_tanaman}}</td>
    <td>{{$tanaman->petani_penggarap}}</td>
  
    <td>
        <button class="btn btn-sm btn-danger" wire:click="hapus">Hapus</button>
        <a href="{{route('tanaman.edit', ['tanaman' => $tanaman])}}" class="btn btn-sm btn-warning">Edit</a>
    </td>
</tr>
