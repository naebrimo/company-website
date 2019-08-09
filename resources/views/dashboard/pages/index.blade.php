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
                            {!! treeToHtmlSelect($pages, 0, 'custom-select text-capitalize') !!}
                            <div class="input-group-append">
                                <button class="btn btn-primary text-capitalize" type="submit">go</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-12">
                    <ul>
                        <li>
                            <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0" title="click to rearrange, modify or delete">home</a>
                        </li>
                        <li>
                            <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0" title="click to rearrange, modify or delete">our partners</a>
                            <ul>
                                <li>
                                    <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0" title="click to rearrange, modify or delete">partners</a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0" title="click to rearrange, modify or delete">brief introduction</a>
                                        </li>
                                        <li>
                                                <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0" title="click to rearrange, modify or delete">brands</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0" title="click to rearrange, modify or delete">affliates</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0" title="click to rearrange, modify or delete">who we are</a>
                            <ul>
                                <li>
                                    <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0" title="click to rearrange, modify or delete">introduction</a>
                                </li>
                                <li>
                                    <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0" title="click to rearrange, modify or delete">brief history</a>
                                </li>
                                <li>
                                    <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0" title="click to rearrange, modify or delete">mission</a>
                                </li>
                                <li>
                                    <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0" title="click to rearrange, modify or delete">vision</a>
                                </li>
                                <li>
                                    <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0" title="click to rearrange, modify or delete">core values</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0" title="click to rearrange, modify or delete">what we do</a>
                            <ul>
                                <li>
                                    <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0" title="click to rearrange, modify or delete">merchandising</a>
                                </li>
                                <li>
                                    <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0" title="click to rearrange, modify or delete">sales and marketing</a>
                                </li>
                                <li>
                                    <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0" title="click to rearrange, modify or delete">warehouse and logistics</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0" title="click to rearrange, modify or delete">careers</a>
                            <ul>
                                <li>
                                    <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0" title="click to rearrange, modify or delete">cover text</a>
                                </li>
                                <li>
                                    <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0" title="click to rearrange, modify or delete">career postings</a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0" title="click to rearrange, modify or delete">job details</a>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0" title="click to rearrange, modify or delete">application form</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0">corporate news</a>
                            <ul>
                                <li>
                                    <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0">featured</a>
                                </li>
                                <li>
                                    <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0">latest</a>
                                </li>
                                <li>
                                    <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0">archives</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('index.dashboard.pages.show', 1) }}" class="btn btn-link text-capitalize p-0">contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
