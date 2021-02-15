@include('header2')@foreach ($Settings as $setting)@endforeach
@foreach ($Promocion as $promocion)@endforeach
@php
date_default_timezone_set('UTC');
$contador=0;
@endphp
@include('modal')

<body class="">
    <div class="wrapper ">
        @include('sidebar2')
        <div class="main-panel">
            <!-- Navbar -->
            @include('menu2')
            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <x-app-layout>
                            <x-slot name="header">
                                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                    {{ __('Profile') }}
                                </h2>
                            </x-slot>

                            <div>
                                <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                                    @livewire('profile.update-profile-information-form')

                                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                    <x-jet-section-border />

                                    <div class="mt-10 sm:mt-0">
                                        @livewire('profile.update-password-form')
                                    </div>
                                    @endif

                                    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                                    <x-jet-section-border />

                                    <div class="mt-10 sm:mt-0">
                                        @livewire('profile.two-factor-authentication-form')
                                    </div>
                                    @endif

                                    <x-jet-section-border />

                                    <div class="mt-10 sm:mt-0">
                                        @livewire('profile.logout-other-browser-sessions-form')
                                    </div>

                                    <x-jet-section-border />

                                    <div class="mt-10 sm:mt-0">
                                        @livewire('profile.delete-user-form')
                                    </div>
                                </div>
                            </div>
                        </x-app-layout>

                    </div>
                </div>
                @include('footer2')
            </div>
        </div>
        @include('scripts2')
</body>
