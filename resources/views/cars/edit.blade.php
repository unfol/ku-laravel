@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">{{ __("Edit car") }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cars.update', $car->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">{{ __("Registration number") }}</label>
                                <input type="text" class="form-control" name="reg_number" value="{{$car->reg_number}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">{{ __("Brand") }}</label>
                                <input type="text" class="form-control" name="brand" value="{{$car->brand}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">{{ __("Model") }}</label>
                                <input type="text" class="form-control" name="model" value="{{$car->model}}">
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __("Update") }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
