<x-layout>
  <x-display-message />

  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-6">
      <div class="card border-0 shadow-lg">
        <div class="card-body bg-light p-5">

          <h2 class="text-center text-warning mb-4">{{ __('ui.become_reviewer_btn') }}</h2>

          <form action="{{ route('become.revisor') }}" method="POST">
            @csrf

            <!-- Email -->
            <div class="form-floating mb-3">
              <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}" required>
              <label for="email">{{ __('ui.email') }}</label>
              @error('email')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <!-- Nome -->
            <div class="form-floating mb-4">
              <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name') }}" required>
              <label for="name">{{ __('ui.name') }}</label>
              @error('name')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <!-- Pulsante -->
            <div class="d-grid mb-3">
              <button type="submit" class="btn btn-dark w-100 text-warning fw-bold">
                {{ __('ui.become_reviewer_btn') }}
              </button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
</x-layout>
