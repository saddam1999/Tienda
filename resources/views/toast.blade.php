<div class="toast fixed-bottom " role="alert" data-delay="16000" aria-live="assertive" aria-atomic="true">
    <div class="toast-header bg-dark">
        <img width="40px;" src="https://iunlock.store/unlock-2.png" class="rounded mr-2" alt="...">
        <strong class="mr-auto text-white">@if($Promocion->isEmpty()) @else {{$promocion->titulo}} @endif</strong>
        <small class="text-white">hace 11 minutos</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="toast-body bg-dark text-white">
        <p class="text-white">@if($Promocion->isEmpty()) @else {{$promocion->titulo_banner_principal}} @endif
        </p>
    </div>
</div>
@yield('toast')
