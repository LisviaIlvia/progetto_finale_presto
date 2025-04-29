<x-layout>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-md-6">
            <div class="card border-0 shadow-lg">
                <div class="card-body bg-light p-5">

                    <h2 class="text-center text-warning mb-4">{{ __('ui.register') }}</h2>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="form-floating mb-3">
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" required>
                            <label for="name">{{ __('ui.name') }}</label>
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Email -->
                        <div class="form-floating mb-3">
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required>
                            <label for="email">{{ __('ui.email') }}</label>
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-floating mb-3">
                            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                            <label for="password">{{ __('ui.password') }}</label>
                            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Password Confirmation -->
                        <div class="form-floating mb-4">
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" required>
                            <label for="password_confirmation">{{ __('ui.password_confirmation') }}</label>
                            @error('password_confirmation') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-dark w-100 text-warning fw-bold">
                                {{ __('ui.register') }}
                            </button>
                        </div>

                        <!-- Link Login -->
                        <div class="text-center">
                            <small class="text-muted">
                                {{ __('ui.already_have_account') }}
                                <a href="{{ route('login') }}" class="fw-semibold">{{ __('ui.login') }}</a>
                            </small>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-layout>
