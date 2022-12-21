<tr>
    <td>{{$index}}</td>
    {{-- <td>{{$posisi->tanggal_pinjam}}</td> --}}
    <td>{{$posisi->lahan->dokumen}}</td>
    <td>{{$posisi->garis_lintang}} <sup>° </td>
    <td>{{$posisi->garis_bujur}} <sup>° </td>
    {{-- <td>{{$posisi->status}}</td> --}}
    <td>{{$posisi->mdpl}}</td>
    <td>
        <a class="btn btn-sm btn-warning" href="{{route('posisi.show', ['posisi' => $posisi])}}">Lihat</a>
        <button class="btn btn-sm btn-danger" wire:click="hapus">Hapus</button>
    </td>
</tr>