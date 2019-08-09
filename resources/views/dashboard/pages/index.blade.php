@include('__utilities/treeToHtmlSelect')

@extends('__layouts/dashboard')
@section('dashboardContent')
    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-muted text-capitalize">page</h2>
                </div>
                <div class="col-6">
                    <form action="{{ route('index.dashboard.pages.create') }}" method="GET" enctype="multipart/form-data">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-capitalize">create page under</span>
                            </div>
                            {!! treeToHtmlSelect($pages, 0, 0, 'custom-select text-capitalize') !!}
                            <div class="input-group-append">
                                <button class="btn btn-primary text-capitalize" type="submit">go</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-6">
                    {!! treeToHtmlUl($pages, 0, 'index.dashboard.pages.show') !!}
                </div>
            </div>
        </div>
    </div>
@endsection
