@extends('layouts.app')

@section('content')
    <div class="container">
        <li>[[phone]]</li>
        <li>[[email]]</li>
        <li>[[address]]</li>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">{{ __("Cars") }}</div>
                    <div class="card-body">
                        <a href="{{ route('cars.create') }}" class="btn btn-primary mb-3">{{ __("Add new car") }}</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">{{ __("Registration number") }}</th>
                                    <th scope="col">{{ __("Brand") }}</th>
                                    <th scope="col">{{ __("Model") }}</th>
                                    <th scope="col">{{ __("Owner") }}</th>
                                    <th scope="col">{{ __("Actions") }}</th>
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
                                            <a href="{{ route('cars.edit', $car) }}" class="btn btn-success">{{ __("Edit") }}</a>
                                            <form method="POST" action="{{ route('cars.destroy', $car) }}" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">{{ __("Delete") }}</button>
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
