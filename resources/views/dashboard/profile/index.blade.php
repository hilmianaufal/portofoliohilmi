@extends('dashboard.layout')

@section('konten')


    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row justify-content-between">
        <div class="col-5">
          <h3>Profile</h3>
          @if (get_meta_value('_foto'))
          <img style="max-width: 100px;max-height:100px" src="{{ asset('foto')."/".get_meta_value('_foto') }}" alt="">
              
          @endif
          <div class="mb-3">
            <label for="_foto" class="form-label">FOTO</label>
            <input type="file"
              class="form-control form-control-sm skill "  name="_foto" id="_foto" aria-describedby="helpId" placeholder="Masukan Foto" >
          </div>
          <div class="mb-3">
            <label for="_kota" class="form-label">KOTA</label>
            <input type="text"
              class="form-control form-control-sm " value="{{ get_meta_value('_kota') }}" name="_kota" id="_kota" aria-describedby="helpId" placeholder="Masukan Kota" >
          </div>
          <div class="mb-3">
            <label for="_provinsi" class="form-label ">PROVINSI</label>
            <input type="text" class="form-control form-control-sm " value="{{ get_meta_value('_provinsi') }}" name="_provinsi" id="_provinsi" aria-describedby="helpId" placeholder="Masukan Provinsi" >
          </div>
          <div class="mb-3">
            <label for="_nohp" class="form-label">Nomer Hp</label>
            <input type="text"
              class="form-control form-control-sm " value="{{ get_meta_value('_nohp') }}"  name="_nohp" id="_nohp" aria-describedby="helpId" placeholder="Masukan Nomer Hp" >
          </div>
          <div class="mb-3">
            <label for="_email" class="form-label">EMAIL</label>
            <input type="email"
              class="form-control form-control-sm " value="{{ get_meta_value('_email') }}" name="_email" id="_email" aria-describedby="helpId" placeholder="Masukan Email" >
          </div>
         
        </div>
        <div class="col-5">
          <h3>Akun Media Sosial</h3>
          <div class="mb-3">
            <label for="_facebook" class="form-label">FACEBOOK</label>
            <input type="text"
              class="form-control form-control-sm " value="{{ get_meta_value('_facebook') }}" name="_facebook" id="_facebook" aria-describedby="helpId" >
          </div>
          <div class="mb-3">
            <label for="_twiter" class="form-label">TWITER</label>
            <input type="text"
              class="form-control form-control-sm " value="{{ get_meta_value('_twiter') }}"  name="_twiter" id="_twiter" aria-describedby="helpId" >
          </div>
          <div class="mb-3">
            <label for="_linkedin" class="form-label">LINKEDIN</label>
            <input type="text"
              class="form-control form-control-sm " value="{{ get_meta_value('_linkedin') }}" name="_linkedin" id="_linkedin" aria-describedby="helpId" >
          </div>
          <div class="mb-3">
            <label for="_github" class="form-label">GITHUB</label>
            <input type="text"
              class="form-control form-control-sm " value="{{ get_meta_value('_github') }}"  name="_github" id="_github" aria-describedby="helpId" >
          </div>
        </div>
      </div>
       
        <button class="btn btn-primary" type="submit">Simpan</button>
    
    </form>

    
@endsection

