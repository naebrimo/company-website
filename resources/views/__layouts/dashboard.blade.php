@extends('__layouts/index')

@section('content')
    <section class="section">
        <div class="container">
            <div class="row">
                <aside id="dashboardNavigation" class="col-md-2">
                    @include('__includes/sidenav')
                </aside>
                <article id="dashboardContent" class="col-md-10">
                    @yield('dashboardContent')
                </article>
            </div>
        </div>
    </section>
@endsection
