
@extends('app')

@section('styles')
  <link rel="stylesheet" href="../css/register.css">
@endsection



@section('content')

<div class="container register-box ">
<x-guest-layout>
    <x-auth-card>


        <div class="mb-4 text-sm text-gray-600 justify-content-center">
            {{ __('
            Zabudol si heslo? Žiaden problém. Stačí, ak nám oznámite svoju e-mailovú adresu a my vám pošleme e-mail s odkazom na obnovenie hesla, ktorý vám umožní vybrať si nové.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="justify-content-center">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            {{-- <div class="justify-content-center"> --}}
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            {{-- </div> --}}

            <div class="flex items-center  justify-end mt-4">
                <button class="ml-4 btn-success col-4 h-100">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
        </div>
    </x-auth-card>
</x-guest-layout>
</div>
@endsection
