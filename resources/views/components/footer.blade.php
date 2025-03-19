<footer class="bg-danger text-white py-4 mt-5">
    <div class="container text-center">
        <div class="row">
            <!-- Logo e Nome Marketplace -->
            <div class="col-md-4">
                <h4 class="fw-bold"><i class="fas fa-bolt"></i> Presto</h4>
                <p>{{__('ui.buy_and_sell')}}</p>
            </div>
            <div class="col-md-4">
                <h5 class="fw-bold">{{__('ui.become_reviewer')}}</h5>
                <p>{{__('ui.become_reviewer_desc')}}</p>
                <a href="{{ route('work.with.us') }}" class="btn btn-success mb-3"> {{__('ui.become_reviewer_btn')}}</a>
            </div>

            <!-- Link Utili -->
            <div class="col-md-4">
                <h5 class="fw-bold">{{__('ui.useful_links')}}</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">{{__('ui.about_us')}}</a></li>
                    <li><a href="#" class="text-white text-decoration-none">{{__('ui.contacts')}}</a></li>
                    <li><a href="{{ route('work.with.us') }}" class="text-white text-decoration-none fw-bold">{{__('ui.work_with_us')}}</a></li>
                </ul>
            </div>

            <!-- Social Media -->
            <div class="col-md-4">
                <h5 class="fw-bold">{{__('ui.follow_us')}}</h5>
                <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="#" class="text-white"><i class="fab fa-twitter fa-2x"></i></a>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-4">
            <p class="mb-0">© {{ date('Y') }}{{__('ui.rights_reserved')}}</p>
        </div>
    </div>
</footer>
