@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">Redaguoti savininką</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('owner.update', $owner->id) }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Vardas</label>
                                <input type="text" class="form-control" name="name" value="{{$owner->name}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pavardė</label>
                                <input type="text" class="form-control" name="surname" value="{{$owner->surname}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Telefonas</label>
                                <input type="text" class="form-control" name="phone" value="{{$owner->phone}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">El. paštas</label>
                                <input type="email" class="form-control" name="email" value="{{$owner->email}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Adresas</label>
                                <input type="text" class="form-control" name="address" value="{{$owner->address}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Atnaujinti</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
