@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        Navigate to see User Posts and Users
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
