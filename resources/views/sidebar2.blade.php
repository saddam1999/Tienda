@php
$url_actual = $_SERVER["REQUEST_URI"];
@endphp
<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="{{ route('dashboard') }}" class="simple-text logo-mini">
            <div class="logo-image-big">
                <img src="@if($Settings->isEmpty()) @else {{$setting->setting_logo}}@endif">
            </div>
            <!-- <p>CT</p> -->
        </a>
        <a href="{{ route('dashboard') }}" class="simple-text logo-normal">
            <small>@if($Settings->isEmpty()) Holly Store Pro @else {{$setting->setting_nombre}}@endif </small>
            <!-- <div class="logo-image-big">
          <img src="../assets/img/logo-big.png">
        </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li @if($url_actual=='/dashboard' ) class="active" @else @endif>
                <a href="/dashboard">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard </p>
                </a>
            </li>
            <li @if($url_actual=='/taller' ) class="active " @else @endif>
                <a href="/taller">
                    <i class="nc-icon nc-settings"></i>
                    <p>Taller</p>
                </a>
            </li>
            <li @if($url_actual=='/ventas' ) class="active" @else @endif>
                <a href="/ventas">
                    <i class="nc-icon nc-shop"></i>
                    <p>Ventas</p>
                </a>
            </li>
            <li @if($url_actual=='/reportes' ) class="active" @else @endif>
                <a href="/reportes">
                    <i class="nc-icon nc-paper"></i>
                    <p>Reportes</p>
                </a>
            </li>
            <!--
            <li>
                <a href="./user.html">
                    <i class="nc-icon nc-single-02"></i>
                    <p>User Profile</p>
                </a>
            </li>-->
            <li @if($url_actual=='/tienda' ) class="active" @else @endif>
                <a href="/tienda">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>Mi Tienda</p>
                </a>
            </li>
            <li @if($url_actual=='/settings' ) class="active" @else @endif>
                <a href="/settings">
                    <i class="nc-icon nc-settings-gear-65"></i>
                    <p>Configurar</p>
                </a>
            </li>
            <li class="active-pro mb-5">
                <a href=""  data-toggle="modal" data-target="#modal_planes" >
                    <i class="nc-icon nc-spaceship"></i>
                    <p>Actualiza tu Plan</p>
                </a>
            </li>
        </ul>
    </div>
</div>
