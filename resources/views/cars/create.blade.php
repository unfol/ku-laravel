@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header ">{{ __("Add new car") }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('cars.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">{{ __("Registration number") }}</label>
                            <input type="text" class="form-control" name="reg_number" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ __("Brand") }}</label>
                            <input type="text" class="form-control" name="brand" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ __("Model") }}</label>
                            <input type="text" class="form-control" name="model" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ __("Owner") }}</label>
                            <select class="form-select" name="owner_id" required>
                                <option value="" selected disabled>{{ __("Choose the owner") }}</option>
                                @foreach ($owners as $owner)
                                    <option value="{{ $owner->id }}">{{ $owner->name }} {{ $owner->surname }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __("Add") }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
