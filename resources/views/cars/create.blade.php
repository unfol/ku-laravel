@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header ">Pridėti naują automobilį</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('cars.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Registracijos numeris</label>
                            <input type="text" class="form-control" name="reg_number" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Automobilio markė</label>
                            <input type="text" class="form-control" name="brand" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Automobilio modelis</label>
                            <input type="text" class="form-control" name="model" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Savininkas</label>
                            <select class="form-select" name="owner_id" required>
                                <option value="" selected disabled>Pasirinkite savininką</option>
                                @foreach ($owners as $owner)
                                    <option value="{{ $owner->id }}">{{ $owner->name }} {{ $owner->surname }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Pridėti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
