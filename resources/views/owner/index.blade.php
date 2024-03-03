@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body"></div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Vardas</th>
                            <th>Pavarde</th>
                            <th>Telefono numeris</th>
                            <th>El. paštas</th>
                            <th>Adresas</th>
                            <th>Veiksmai</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($owners as $owner)
                            <tr>
                                <td>{{$owner->id}}</td>
                                <td>{{$owner->name}}</td>
                                <td>{{$owner->surname}}</td>
                                <td>{{$owner->phone ?? '-'}}</td>
                                <td>{{$owner->email}}</td>
                                <td>{{$owner->address}}</td>
                                <td>
                                    <a class="btn btn-success" href="{{route('owner.edit', $owner->id)}}">Redaguoti</a>
                                    <a class="btn btn-danger" href="{{route('owner.delete', $owner->id)}}">Istrinti</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
