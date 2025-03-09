@if (session()->has('messageError'))
    <div class="alrt alert-danger text-center shadow rounded w-50">
        {{ session('messageError') }}
    </div>
@endif