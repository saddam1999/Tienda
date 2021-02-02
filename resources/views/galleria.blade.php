<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>

<style>
    /**THE SAME CSS IS USED IN ALL 3 DEMOS**/
    /**gallery margins**/
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
        /**adjust scale to desired size,
add browser prefixes**/
        -ms-transform: scale(2.5);
        -moz-transform: scale(2.5);
        -webkit-transform: scale(2.5);
        -o-transform: scale(2.5);
        transform: scale(2.5);
        position: relative;
        z-index: 100;
    }

    /**To keep upscaled images visible on mobile,
increase left & right margins a bit**/
    @media only screen and (max-width: 768px) {
        ul.gallery {
            margin-left: 15vw;
            margin-right: 15vw;
        }

        /**TIP: Easy escape for touch screens,
give gallery's parent container a cursor: pointer.**/
        .DivName {
            cursor: pointer
        }
    }
</style>
@include('header')
<ul class="list-inline gallery">

    <div class="container">
        <h1>Orden : # {{$id}}</h1>
        <div class="row">
            @foreach ($Captura as $captura)
            @if($captura->id_equipo!=$id)
            <img class="thumbnail zoom" width="70%"
                src="https://lh3.googleusercontent.com/proxy/htWKAVbUuq_0ht9Wogmp83pDKRoqWmJZLRla17E2NDywVdpsjrtHTJGse9f49Y8mEMJjsVaifU8zBbZaECFBWzxniVuQZjDcAw"
                style="border-radius:10px;">
            @else
            <div class="col-md-4">
                @if($captura->id_equipo==$id)
                @foreach ($Usuario as $usuario)
                @if($usuario->id==$captura->id_user)
                <h3 class="card-footer">Tecnico:{{$usuario->name}}</h3>
                @endif
                @endforeach
                <li><img class="thumbnail zoom" width="70%"
                        src="@if($captura->captura!='')../fotos/{{$captura->captura}}@else https://lh3.googleusercontent.com/proxy/htWKAVbUuq_0ht9Wogmp83pDKRoqWmJZLRla17E2NDywVdpsjrtHTJGse9f49Y8mEMJjsVaifU8zBbZaECFBWzxniVuQZjDcAw @endif"
                        style="border-radius:10px;"></li>
                <textarea class="form-control mt-2" name="" id="" cols="30"
                    rows="10">{{$captura->descripcion}}</textarea>
                @endif
            </div>
            @endif
            @endforeach
        </div>
    </div>
</ul>
<div class="icon-bar fixed-bottom mb-5" style="border-radius:10px; margin-bottom:18%;">
    <a href="/dashboard" role="tab" aria-controls="taller"><i class="fa fa-home"></i></a>
</div>
@extends('footer')
