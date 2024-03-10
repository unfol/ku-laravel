@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">Automobiliai</div>
                    <div class="card-body">
                        <a href="{{ route('cars.create') }}" class="btn btn-primary mb-3">Pridėti naują automobilį</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Registracijos numeris</th>
                                    <th scope="col">Markė</th>
                                    <th scope="col">Modelis</th>
                                    <th scope="col">Savininkas</th>
                                    <th scope="col">Veiksmai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cars as $car)
                                    <tr>
                                        <th scope="row">{{ $car->id }}</th>
                                        <td>{{ $car->reg_number }}</td>
                                        <td>{{ $car->brand }}</td>
                                        <td>{{ $car->model }}</td>
                                        <td>{{ $car->owner->name }} {{ $car->owner->surname }}</td>
                                        <td>
                                            <a href="{{ route('cars.edit', $car) }}" class="btn btn-success">Redaguoti</a>
                                            <form method="POST" action="{{ route('cars.destroy', $car) }}" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Ištrinti</button>
                                            </form>
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
