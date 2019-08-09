<div class="row">
    <div class="col-md-8">
        {{ $navlink->articles()->first()->body }}
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Send us a message.</h4>
                <form action="{{ route('index') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                            <input class="form-control" name="name" type="text" value="{{ old('message') }}" placeholder="Name" required/>
                        </div>
                    <div class="form-group">
                        <input class="form-control" name="email" type="email" value="{{ old('message') }}" placeholder="Email" required />
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="subject" type="text" value="{{ old('message') }}" placeholder="Subject" required/>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Your message" required>{{ old('message') }}</textarea>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary btn-block text-capitalize" type="submit">send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
