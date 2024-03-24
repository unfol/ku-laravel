@extends('layouts.app')

@section('content')
    <div class="container">
        <li>[[phone]]</li>
        <li>[[email]]</li>
        <li>[[address]]</li>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">{{ __("Owners") }}</div>
                    <div class="card-body">
                    <a href="{{ route('owner.create') }}" class="btn btn-primary mb-3">{{ __("Add new owner") }}</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>{{ __("Full name") }}</th>
                            <th>{{ __("Phone") }}</th>
                            <th>{{ __("Email") }}</th>
                            <th>{{ __("Address") }}</th>
                            <th>{{ __("Vehicles") }}</th>
                            <th>{{ __("Actions") }}</th>
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
                                    <a class="btn btn-success" href="{{route('owner.edit', $owner)}}">{{ __("Edit") }}</a>
                                    <a class="btn btn-danger" href="{{route('owner.delete', $owner)}}">{{ __("Delete") }}</a>
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
