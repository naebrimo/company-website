@extends('__layouts/dashboard')
@section('dashboardContent')
    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-muted text-capitalize">{{ $page->name }}</h2>
                </div>
                <div class="col-6 text-right">
                    <a href="{{ route('index.dashboard.pages') }}" class="btn btn-secondary text-capitalize">back</a>
                    <a href="{{ ($page->name === 'home') ? route('index') : route('index.'.str_slug($page->name)) }}" class="btn btn-primary text-capitalize">preview</a>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-capitalize">name : {{ $page->name }}</p>
                            <p class="text-capitalize">page order : {{ $page->id }}</p>
                            <p class="text-capitalize">child order : {{ $page->id }}</p>
                            <p class="text-capitalize">child of : <span class="text-lowercase">{{ (is_null($page->parent_id)) ? 'root': $page->parent_id }}</span></p>
                            <p class="text-capitalize">active : {{ ($page->active) ? 'yes' : 'no' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <a href="{{ route('index.dashboard.pages.edit', $page->id) }}" class="btn btn-primary btn-block text-capitalize">edit</a>
                    <a href="" class="btn btn-danger btn-block text-capitalize">delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
