@extends('dashboard.layout')

@section('konten')

<p class="card-title">Halaman</p>
<div class="pb-3">
    <a href="{{ route('halaman.create') }}" class="btn btn-primary white">Tambah Halaman</a>
</div>
<div class="table-responsive">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th class="col-1">No</th>
                <th >Judul</th>
                <th class="col-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>
            @foreach ($data as $dt)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $dt->judul }}</td>
                <td>
                    <a href="{{ route('halaman.edit', $dt->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form method="POST" onsubmit="return confirm('Yakin ingin Menghapus Data Ini?')" action="{{ route('halaman.destroy', $dt->id) }}" class="d-inline">
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
