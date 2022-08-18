@extends('main')
@section('content')
<h2>Redaguoti duomenis</h2>
@include('_partials/errors')
<form action="{{route('admin.update.post.kabinetas',['kabinetas' => $kabinetas->id])}}" method="post" enctype="multipart/form-data">
  @csrf
    <div class="mb-3">
      <input type="text" name="kabinetas" class="form-control" placeholder="Kabineto numeris" value="{{$kabinetas->kabinetas}}">
    </div>
    <div class="mb-3">
      <input type="text" name="telefonas" class="form-control" placeholder="Telefono numeris" value="{{$kabinetas->telefonas}}">
    </div>
    <div class="mb-3">
      <input type="text" name="dirba_nuo" class="form-control" placeholder="Dirba nuo" value="{{$kabinetas->dirba_nuo}}">
    </div>
    <div class="mb-3">
      <input type="text" name="dirba_iki" class="form-control" placeholder="Dirba iki" value="{{$kabinetas->dirba_iki}}">
    </div>
    <div class="mb-3">
      <select class="form-select" aria-label="Default select example" name="miestas">
        @if($kabinetas->miestas == 'Birštonas')
        <option value="Birštonas" selected>Birštonas</option>
        <option value="Druskininkai">Druskininkai</option>
        @else
        <option value="Birštonas">Birštonas</option>
        <option value="Druskininkai" selected>Druskininkai</option>
        @endif
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Atnaujinti</button>
  </form>
@endsection