<x-layout>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left-login d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Accedi</h5>

            <form action="{{ route('login') }}" method="POST">
                @csrf

              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="Inserisci la tua mail">
                <label for="email">Email</label>
              </div>

              <hr>

              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Accedi</button>
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