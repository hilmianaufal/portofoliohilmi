@extends('dashboard.layout')

@section('konten')

<p class="card-title">Education</p>
<div class="pb-3">
    <a href="{{ route('education.create') }}" class="btn btn-primary white">Tambah Education</a>
</div>
<div class="table-responsive">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th class="col-1">No</th>
                <th >Nama Universitas</th>
                <th >Nama Fakultas</th>
                <th >Nama Prodi</th>
                <th >IPK</th>
                <th >Tgl Mulai</th>
                <th >Tgl Akhir</th>
                <th class="col-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>
            @foreach ($data as $dt)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $dt->judul }}</td>
                <td>{{ $dt->info1 }}</td>
                <td>{{ $dt->info2 }}</td>
                <td>{{ $dt->info3 }}</td>
                <td>{{ $dt->tgl_mulai_indo }}</td>
                <td>{{ $dt->tgl_akhir_indo }}</td>
                <td>
                    <a href="{{ route('education.edit', $dt->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form method="POST" onsubmit="return confirm('Yakin ingin Menghapus Data Ini?')" action="{{ route('education.destroy', $dt->id) }}" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit" >Hapus</button>
                    </form>
                    
                </td>
            </tr>   
            <?php $i++ ?>  
            @endforeach
           
        </tbody>
    </table>

</div>
    
@endsection
