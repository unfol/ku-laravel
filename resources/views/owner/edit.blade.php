@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">{{ __("Edit owner") }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('owner.update', $owner->id) }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">{{ __("First name") }}</label>
                                <input type="text" class="form-control" name="name" value="{{$owner->name}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">{{ __("Surname") }}</label>
                                <input type="text" class="form-control" name="surname" value="{{$owner->surname}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">{{ __("Phone") }}</label>
                                <input type="text" class="form-control" name="phone" value="{{$owner->phone}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">{{ __("Email") }}</label>
                                <input type="email" class="form-control" name="email" value="{{$owner->email}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">{{ __("Address") }}</label>
                                <input type="text" class="form-control" name="address" value="{{$owner->address}}">
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __("Update") }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
