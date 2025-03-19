<x-layout>
<x-display-message/>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
            <div class="card-img-left-work-with-us d-none d-md-flex">
            </div>
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title text-center mb-5 fw-light fs-5">{{__('ui.become_reviewer_btn')}}</h5>

              <form action="{{ route('become.revisor') }}" method="POST">
                @csrf

                <div class="form-floating mb-3">
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email">
                  <label for="email">{{ __('ui.email') }}</label>
                  @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <hr>

                <div class="form-floating mb-3">
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
                  <label for="name">{{ __('ui.name') }}</label>
                  @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="d-grid mb-2">
                  <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">{{__('ui.become_reviewer_btn')}}</button>
                </div>

                <hr class="my-4">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</x-layout>