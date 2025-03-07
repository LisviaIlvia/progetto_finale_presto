@if(session('message'))
<div class="position-absolute top-50 start-50 translate-middle rounded shadow-lg alert alert-success alert-dismissible fade show text-center d-flex align-items-center justify-content-between w-80" style="z-index: 1050; min-width: 400px; max-width: 500px; padding-right: 30px;">
    <i class="bi bi-check-circle-fill me-3 fs-4"></i>
    <span class="flex-grow-1">{{ session('message') }}</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
