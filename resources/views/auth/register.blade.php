<x-layout>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
            <div class="card-img-left d-none d-md-flex">
              <!-- Background image for card set in CSS! -->
            </div>
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title text-center mb-5 fw-light fs-5">{{__('ui.register')}}</h5>
              <form action="{{ route('register') }}" method="POST">
                @csrf

                <!-- Email -->
                <div class="form-floating mb-3">
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
                  <label for="email">{{__('ui.email')}}</label>
                  @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <hr>

                <!-- Name -->
                <div class="form-floating mb-3">
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
                  <label for="name">{{__('ui.name')}}</label>
                  @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <hr>

                <!-- Password -->
                <div class="form-floating mb-3">
                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                  <label for="password">{{__('ui.password')}}</label>
                  @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <!-- Password Confirmation -->
                <div class="form-floating mb-3">
                  <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation">
                  <label for="password_confirmation">{{__('ui.password_confirmation')}}</label>
                  @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="d-grid mb-2">
                  <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">{{__('ui.register')}}</button>
                </div>

                <a class="d-block text-center mt-2 small" href="{{ route('login') }}">{{__('ui.already_have_account')}}</a>

                <hr class="my-4">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</x-layout>
