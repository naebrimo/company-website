@extends('__layouts/dashboard')
@section('dashboardContent')
    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-muted text-capitalize">welcome to dashboard</h2>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-primary text-capitalize" role="alert">
                        this is a sample alert message
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
