@extends('main')
@section('content')
<div class="container-fluid">
    <table class="table table-bordered table-responsive">
        <tr>
            <th>Kabineto nr.</th>
            <th>Telefono nr.</th>
            <th>Darbo laikas nuo</th>
            <th>Darbo laikas iki</th>
            <th>Miestas</th>
            <th><a href="/add-event" class="btn btn-success">Naujas įrašas</a></th>
        </tr>
        @foreach($kabinetas as $v)
        <tr>
            <th>{{$v->kabinetas}}</th>
            <th>{{$v->telefonas}}</th>
            <th>{{$v->dirba_nuo}}</th>
            <th>{{$v->dirba_iki}}</th>
            <th>{{$v->miestas}}</th>
            <th>
                <a href="/delete/kabinetas/{{$v->id}}" class="btn btn-danger">Šalinti</a>
                <a href="/update/kabinetas/{{$v->id}}" class="btn btn-primary">Redaguoti</a>
            </th>
        </tr>
    @endforeach
    </table>

</div>
@endsection 