<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Dashboard') }}
    @foreach ($Settings as $setting)@endforeach
    @foreach ($Promocion as $promocion)@endforeach

</h2>
</x-slot>
@php
date_default_timezone_set('UTC');
$contador=0;
$value = $setting->whatsapp;
setcookie("Whatsapp", $value);
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.js"
integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>
<script src="https://js.pusher.com/4.1/pusher.min.js"></script>
<script type="text/javascript" src="../dist/js/jquery.smartCart.min.js"></script>
<link href="../dist/css/smart_cart.min.css" rel="stylesheet" type="text/css">
<link href="../css/main.css" rel="stylesheet" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script type="text/javascript" language="javascript"
src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript"
src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<!--Floating WhatsApp css-->
<link rel="stylesheet"
href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
<!--Floating WhatsApp javascript-->
<script type="text/javascript"
src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js">
</script>
<style>
@import url(https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css);

.flash {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #fff;
}

ul.gallery {
    margin-left: 3vw;
    margin-right: 3vw;
}

.zoom {
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
    cursor: -webkit-zoom-in;
    cursor: -moz-zoom-in;
    cursor: zoom-in;
}

.zoom:hover,
.zoom:active,
.zoom:focus {

    -ms-transform: scale(2.5);
    -moz-transform: scale(2.5);
    -webkit-transform: scale(2.5);
    -o-transform: scale(2.5);
    transform: scale(2.5);
    position: relative;
    z-index: 100;
}


@media only screen and (max-width: 768px) {
    ul.gallery {
        margin-left: 15vw;
        margin-right: 15vw;
    }

    .DivName {
        cursor: pointer
    }
}
</style>
<!-- Facebook Pixel Code -->
<script>
! function(f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function() {
        n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
}(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '3271930189583444');
fbq('track', 'PageView');
</script><noscript>

<img height="1" width="1"
    src="https://www.facebook.com/tr?id=3271930189583444&ev=PageView&noscript=1" /></noscript>
<!-- End Facebook Pixel Code -->
@section('header')
