

@extends('app')

@section('styles')
  <link rel="stylesheet" href="../css/register.css">
@endsection



@section('content')



  <div class="d-block d-sm-block d-md-none">
    <a href="./welcome.html" class="navbar-brand logo"> <img src="../images/logo-nabytok.png" alt="" class="main-logo">
    </a>
  </div>
  <div class="container register-box">
    <h1 style="text-align: center">REGISTRACIA</h1>
    <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="row justify-content-center form-items">
                <div class="col-lg-5 col-sm-10">
                    <h4 for="name" :value="__('Name')" >Meno</h4>
                    <x-input id="name" class="block mt-1 w-full" style="width: 100%" type="text" name="name" :value="old('name')" required autofocus />
                </div>
              </div>
            
              <div class="row justify-content-center form-items">
                <div class="col-lg-5 col-sm-10">
                    <h4 for="name" :value="__('Surname')" >Priezvisko</h4>
                    <x-input id="surname" class="block mt-1 w-full" style="width: 100%" type="text" name="surname" :value="old('surname')" required autofocus />
                </div>
              </div>

            <!-- Email Address -->
            <div class="row justify-content-center form-items">
                <div class="col-lg-5 col-sm-10">
                    <h4 for="email" :value="__('Email')">Email</h4>

                    <x-input id="email" class="block mt-1 w-full" style="width: 100%" type="email" name="email" :value="old('email')" required />
                </div>
            </div>

            <!-- Password -->
            <div class="row justify-content-center form-items">
                <div class="col-lg-5 col-sm-10">
                    <h4 for="password" :value="__('Password')" >Heslo</h4>

                    <x-input id="password" class="block mt-1 w-full"
                                    style="width: 100%"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="row justify-content-center form-items">
                <div class="col-lg-5 col-sm-10">
                    <h4 for="password_confirmation" :value="__('Confirm Password')" >Potvrdit heslo</h4>

                    <x-input id="password_confirmation" class="block mt-1 w-full"
                    style="width: 100%"
                                    type="password"
                                    name="password_confirmation" required />
                </div>

                <div class="row justify-content-center form-items">
                    <div class="col-lg-5 col-sm-10">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="/">
                            {{ __('Already registered?') }}
                        </a>

                        <button class="ml-4 btn-success col-4 h-100" style=" margin-left: 20px">
                            <h5>{{ __('Register') }}</h5>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

  </div>
  @endsection
