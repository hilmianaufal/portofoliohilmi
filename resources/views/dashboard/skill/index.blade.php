@extends('dashboard.layout')

@section('konten')


    <form action="{{ route('skill.update') }}" method="POST">
      @csrf
        <div class="mb-3">
          <label for="Judul" class="form-label">PROGRAMING LANGUAGE AND TOOLS</label>
          <input type="text"
            class="form-control form-control-sm skill " value="{{ get_meta_value('_language') }}" name="_language" id="judul" aria-describedby="helpId" placeholder="Programming Language" >
  
        </div>
        <div class="mb-3">
          <label for="isi" class="form-label">WORKFLOW</label>
          <textarea class="form-control summernote ski"  name="_workflow" id="" cols="30" rows="5">{{ get_meta_value('_workflow') }}</textarea>
  
        </div>
        <button class="btn btn-primary" type="submit">Simpan</button>
    
    </form>

    
@endsection

@push('child-scripts')
<script>
  $(document).ready(function() {
      $('.skill').tokenfield({
          autocomplete: {
              source: [{!! $skill !!}],
              delay: 100
          },
          showAutocompleteOnFocus: true
      });
  });
</script>
    
@endpush