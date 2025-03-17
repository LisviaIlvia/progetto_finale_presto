<footer class="bg-danger text-white py-4 mt-5">
    <div class="container text-center">
        <div class="row">
            <!-- Logo e Nome Marketplace -->
            <div class="col-md-4">
                <h4 class="fw-bold"><i class="fas fa-bolt"></i> Presto</h4>
                <p>Compra e vendi in un attimo!</p>
            </div>
            <div class="col-md-4">
                <h5 class="fw-bold">Vuoi diventare revisore?</h5>
                <p>Cliccando il bottone sottostante farai richiesta al nostro admin!</p>
                <a href="{{ route('become.revisor') }}" class="btn btn-success mb-3"> diventa revisore</a>
            </div>

            <!-- Link Utili -->
            <div class="col-md-4">
                <h5 class="fw-bold">Link Utili</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">Chi siamo</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Contatti</a></li>
                    <li><a href="" class="text-white text-decoration-none fw-bold">Lavora con noi</a></li>
                </ul>
            </div>

            <!-- Social Media -->
            <div class="col-md-4">
                <h5 class="fw-bold">Seguici</h5>
                <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="#" class="text-white"><i class="fab fa-twitter fa-2x"></i></a>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-4">
            <p class="mb-0">© {{ date('Y') }} Presto. Tutti i diritti riservati.</p>
        </div>
    </div>
</footer>
