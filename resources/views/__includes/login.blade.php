<section id="form" class="section">
    <div class="container">
        <h3 class="section-title">&nbsp;</h3>
        <article class="section-article">
            <h3 class="article-title text-capitalize">&nbsp;</h3>
            <div class="article-text text-justify">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header text-center text-capitalize">
                                <h4>{{ __('login') }}</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('index.dashboard.login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="usernameOrEmail" class="text-capitalize">{{ __('username or email') }}</label>
                                        <input id="usernameOrEmail" class="form-control" name="usernameOrEmail" type="text" value="{{ old('usernameOrEmail') }}" placeholder="{{ __('email or username') }}" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="text-capitalize">{{ __('password') }}</label>
                                        <input id="password" class="form-control" name="password" type="password" value="{{ old('password') }}" placeholder="{{ __('password') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">{{ __('remember me?') }}</label>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-12 mt-2">
                                            <button type="submit" class="btn btn-primary btn-block text-capitalize">{{ __('login') }}</button>
                                            @if (Route::has('dashboard.password.request'))
                                                <a class="btn btn-link btn-block text-capitalize" href="{{ route('dashboard.password.request') }}">{{ __('forgot your password?') }}</a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>
