@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">opportunities</h5>
                    <p class="card-text">number of tasks: {{ $opportunitiesCount }}  </p>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Categories</h5>

                    <p class="card-text">number of categories: {{ $categoriesCount }}</p>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Admins</h5>
                    <p class="card-text">number of admins: {{ $adminsCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Applications</h5>

                    <p class="card-text">number of applications:{{ $applicationsCount }}</p>

                </div>
            </div>
        </div>
    </div>
@endsection
