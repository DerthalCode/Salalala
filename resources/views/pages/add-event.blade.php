@extends('main')
@section('content')
<h2>Prideti nauja imone</h2>
@include('_partials/errors')
<form action="/store" method="post" enctype="multipart/form-data">
  @csrf
    <div class="mb-3">
      <input type="text" name="kabinetas" class="form-control" placeholder="Kabineto numeris">
    </div>
    <div class="mb-3">
      <input type="tel" name="telefonas" class="form-control" placeholder="Telefono numeris">
    </div>
    <div class="mb-3">
      <input type="text" name="dirbanuo" class="form-control" placeholder="Dirba nuo">
    </div>
    <div class="mb-3">
      <input type="text" name="dirbaiki" class="form-control" placeholder="Dirba iki">
    </div>
    <div class="mb-3">
      <select class="form-select" aria-label="Default select example" name="miestas">
        <option value="" selected disabled>Pasirinkite miesta</option>
        <option value="Birštonas">Birštonas</option>
        <option value="Druskininkai">Druskininkai</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Saugoti</button>
  </form>
@endsection