@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">Savininkai</div>
                    <div class="card-body">
                    <a href="{{ route('owner.create') }}" class="btn btn-primary mb-3">Pridėti naują savininką</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Vardas & Pavarde</th>
                            <th>Telefono numeris</th>
                            <th>El. paštas</th>
                            <th>Adresas</th>
                            <th>Automobiliai</th>
                            <th>Veiksmai</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($owners as $owner)
                            <tr>
                                <td>{{$owner->id}}</td>
                                <td>{{$owner->name}} {{$owner->surname}}</td>
                                <td>{{$owner->phone ?? '-'}}</td>
                                <td>{{$owner->email}}</td>
                                <td>{{$owner->address}}</td>
                                <td>
                                    @foreach( $owner->cars as $car)
                                        {{ $car->model }} <br>
                                    @endforeach
                                <td>
                                    <a class="btn btn-success" href="{{route('owner.edit', $owner)}}">Redaguoti</a>
                                    <a class="btn btn-danger" href="{{route('owner.delete', $owner)}}">Istrinti</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
