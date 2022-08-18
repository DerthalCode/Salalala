
@extends('main')
@section('content')
<div class="container-fluid">
    @include('_partials.top-nav')
    <h1 class="mt-4">Birštonas</h1>
    <table class="table table-bordered table-responsive">
        <tr>
            <th>Kabineto nr.</th>
            <th>Telefono nr.</th>
            <th>Darbo laikas nuo</th>
            <th>Darbo laikas iki</th>
            <th>Miestas</th>
        </tr>
        @foreach($bir as $v)
        <tr>
            <th>{{$v->kabinetas}}</th>
            <th>{{$v->telefonas}}</th>
            <th>{{$v->dirba_nuo}}</th>
            <th>{{$v->dirba_iki}}</th>
            <th>{{$v->miestas}}</th>
        </tr>
    @endforeach
    </table>
</div>
@endsection 