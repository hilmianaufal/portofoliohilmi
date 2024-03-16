@extends('dashboard.layout')

@section('konten')
    <div class="pb-3">
    <a href="{{ route('education.index') }} " class="btn btn-success"> << Kembali </a>
    </div>
    <form action="{{ route('education.update',$data->id) }}" method="POST">
      @csrf
      @method('put')
        <div class="mb-3">
          <label for="Judul" class="form-label">Nama Universitas</label>
          <input type="text"
            class="form-control form-control-sm" name="judul" id="judul" aria-describedby="helpId" placeholder="Nama Universitas" value="{{ $data->judul }}">
  
        </div>
        <div class="mb-3">
          <label for="info1" class="form-label">Nama Fakultas</label>
          <input type="text"
            class="form-control form-control-sm" name="info1" id="info1" aria-describedby="helpId" placeholder="Nama Fakultas" value="{{ $data->info1 }}">
  
        </div>
        <div class="mb-3">
          <label for="info2" class="form-label">Nama Prodi</label>
          <input type="text"
            class="form-control form-control-sm" name="info2" id="info2" aria-describedby="helpId" placeholder="Nama Prodi" value="{{ $data->info2 }}">
  
        </div>
        <div class="mb-3">
          <label for="info3" class="form-label">IPK</label>
          <input type="text"
            class="form-control form-control-sm" name="info3" id="info3" aria-describedby="helpId" placeholder="Nama Prodi" value="{{ $data->info3 }}">
  
        </div>
        <div class="mb-3">
         <div class="row">
          <div class="col-auto">Tanggal Mulai</div>
          <div class="col-auto"><input type="date" class="form-control form-control-sm" value="{{ $data->tgl_mulai }}" name="tgl_mulai" placeholder="dd/mm/yy"></div>
          <div class="col-auto">Tanggal Akhir</div>
          <div class="col-auto"><input type="date" value="{{ $data->tg_akhir }}" class="form-control form-control-sm" name="tgl_akhir" placeholder="dd/mm/yy"></div>
         </div>
        </div>

        <button class="btn btn-primary" type="submit">Simpan</button>
    
    </form>

    
@endsection