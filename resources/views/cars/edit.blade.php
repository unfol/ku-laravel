@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">Redaguoti automobilį</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cars.update', $car->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Registracijos numeris</label>
                                <input type="text" class="form-control" name="reg_number" value="{{$car->reg_number}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Markė</label>
                                <input type="text" class="form-control" name="brand" value="{{$car->brand}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Modelis</label>
                                <input type="text" class="form-control" name="model" value="{{$car->model}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Atnaujinti</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
