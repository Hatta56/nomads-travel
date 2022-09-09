@include('includes.style')

<body>
    <main class="login-container">
      <div class="container">
        <div class="row login-page d-flex align-items-center">
          <div class="section-left col-12 col-md-6">
            <h1 class="mb-4">We explore the new <br>life much better</h1>
            <img src="{{ url('frontend/images/galery.png')}}" class="w-75 d-none d-sm-flex" alt="">
          </div>
          <div class="section-right col-12 col-md-4">
            <div class="card">
              <div class="card-body">
                <div class="text-center">
                  <img src="{{ url('frontend/images/logo.png')}}" class="w-50 mb-4" alt="">
                </div>

                <form method="POST" action="{{ route('login') }}">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>\

                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="mb-3 form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                  </div>
                  <button type="submit" class="btn btn-login btn-block">Sign In</button>
                  <p class="text-center mt-4">
                    <a href="{{ route('password.request') }} ">Saya Lupa Password</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>
    @include('includes.script')
  </body>
