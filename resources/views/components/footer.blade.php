<footer class="bg-dark text-white pt-5 pb-4">
    <div class="container text-md-left">
        <div class="row text-md-left">

            <!-- Logo e Descrizione -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class=" mb-4 font-weight-bold text-warning">Presto.it</h5>
                <p>{{ __('ui.buy_and_sell') }}</p>
            </div>

            <!-- Diventa Revisore -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">{{ __('ui.become_reviewer') }}</h5>
                <p>{{ __('ui.become_reviewer_desc') }}</p>
                <a href="{{ route('work.with.us') }}" class="btn btn-success btn-sm">{{ __('ui.become_reviewer_btn') }}</a>
            </div>

            <!-- Link Utili -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">{{ __('ui.useful_links') }}</h5>
                <p><a href="#" class="text-white text-decoration-none">{{ __('ui.about_us') }}</a></p>
                <p><a href="#" class="text-white text-decoration-none">{{ __('ui.contacts') }}</a></p>
                <p><a href="{{ route('work.with.us') }}" class="text-white text-decoration-none fw-bold">{{ __('ui.work_with_us') }}</a></p>
            </div>

            <!-- Social -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">{{ __('ui.follow_us') }}</h5>
                <div>
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

        </div>

        <hr class="mb-4">

        <!-- Copyright -->
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 col-lg-8">
                <p class="text-white text-center mb-0">© {{ date('Y') }} {{ __('ui.rights_reserved') }}</p>
            </div>
<!-- 
            <div class="col-md-5 col-lg-4">
                <div class="text-center text-md-right">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div> -->
        </div>

    </div>
</footer>
