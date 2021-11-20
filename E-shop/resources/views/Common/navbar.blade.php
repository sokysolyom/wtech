<header>
  <div class="d-sm-none d-md-block d-none d-sm-block">
    <nav class="p-0 pl-2 pr-5 navbar navbar-expand-md collapse-sm">
      <div class="p-0 container-fluid">
        <div class="justify-content-between navbar-collapse" id="#">
          <a href="/" class="navbar-brand">
            <img src="{{ asset('images/logo-nabytok.png') }}" alt="" width="120" />
          </a>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mt-2 pt-0 mr-5">
                <form role="search" class="collapse navbar-collapse justify-content-end width_100 row" id="search_menu_buttom">
                    <input type = "text" placeholder="Sem napíšte hľadané slovo" class="form-control col col-12 col-lg-6" name="search" id="productSeatch">
                    <button  type="submit" formaction="/products_new/?search={{'search'}}" class="btn btn-dark col col-4 col-lg-4"><i class="fa fa-search"></i> Hľadať</button>
                </form >
            </li>
            <li class="dropdown-padding-left nav-item">
              <div class="dropdown">
                <button
                  class="btn dropdown-toggle"
                  type="button"
                  id="dropdownMenuButton1"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <img src="{{ asset('images/user-1.png') }}" width="30" alt="" />
                </button>
                <ul
                  class="dropdown-menu"
                  aria-labelledby="dropdownMenuButton1"
                >
    <x-guest-layout>
    @if(!Auth::check())
    <x-auth-card style="padding-top: 0px !important; padding-bottom: 0px !important">


        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4" style="margin: 0px !important">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4" style="margin: 0px !important">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4" style="margin: 10px !important">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3" style="width: 100%; color: black !important">
                    {{ __('Log in') }}
                </x-button>
            </div>

        </form>
    </x-auth-card>
    @endif
</x-guest-layout>
                @if(Auth::check())
                    <li>
                        <div>
                            <h1 style="text-align: center">{{ Auth::user()->name }}</h1>
                        </div>
                    </li>
                    <li>
                    <div name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-button :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                style="width: 100%; color: black !important"
                                >
                                {{ __('Log Out') }}
                            </x-button>
                        </form>
                    </div>
                    </li>
                    @endif
                    @if(!Auth::check())
                  <li>
                    <a
                      class="dropdown-bold-item dropdown-item"
                      href="/register"
                      >Zaregistrovať sa</a
                    >
                  </li>
                  @endif
                </ul>
              </div>
            </li>
            <li class="dropdown-padding-right nav-item">
              <a class="nav-link" href="/kosik"
                ><img src="{{ asset('images/shopping-cart-1.png') }}" width="30" alt=""
              /></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="b p-4 m-auto">
      <a href="/" class="navbar-brand">
        <img src="{{ asset('images/logo-nabytok.png') }}" alt="" width="120" />
      </a>
      <div class="col-8 mt-1">
         <form role="search" class="justify-content-end width_100 row" id="search_menu_buttom">
            <input type = "text" placeholder="Sem napíšte hľadané slovo" class="form-control col col-12 col-lg-6" name="search" id="productSeatch">
            <button  type="submit" formaction="/products/?search={{'search'}}" class="btn btn-dark col col-4 col-lg-4"><i class="fa fa-search"></i> Hľadať</button>
        </form >
      </div>
      @if(Auth::check())
      <div>
        <h1 style="text-align: start">{{ Auth::user()->name }}</h1>
    </div>
    @endif
      @if(!Auth::check())
      <div class="col-8" >
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <input size="54" type="email" name="email" placeholder="Prihlasovacie meno":value="old('email')" required autofocus class="form-control">
            <input size="50" type="password" name="password" placeholder="Heslo" required autocomplete="current-password" class="form-control" id="passwordAgain" />
            <div class="flex items-center justify-end mt-4" style="margin: 10px !important">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
            <div class="col-8">
        <span >
          <button class="navbutton btn my-2 my-sm-0" type="submit" style="display: flex">
            <img
              src="{{ asset('images/login_button.svg') }}"
              class="rounded mx-auto d-block"
              width="30"
              alt="..."
            />
            Prihlásiť sa
          </button>
          </span
        >
      </div>
        </form>
        @endif
        <div class="col-8">
            <a href="/kosik">
              <span >
                <button class="navbutton btn my-2 my-sm-0" type="submit">
                  <img
                    src="{{ asset('images/shopping-cart-1.png') }}"
                    class="rounded mx-auto d-block"
                    width="30"
                    alt="..."
                  />

                </button>
                  Kosik</span>
            </a>
          </div>
        @if(Auth::check())
                    <div name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <span>
                                <button :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                style="color: black !important; display: flex"
                                class="navbutton btn"
                                >
                                <img
                                src="{{ asset('images/logout.svg') }}"
                                class="rounded mx-auto d-block"
                                width="30"
                                alt="..."
                                />
                            {{ __('Log Out') }}
                        </button>
                            </span>

                        </form>
                    </div>
                    @endif
     </div>
     @if(!Auth::check())
      <div class="col-8">
        <a href="/register">
          <span >

            <button class="navbutton btn my-2 my-sm-0" type="submit">
              <img
                src="{{ asset('images/user-1.png') }}"
                class="rounded mx-auto d-block"
                width="30"
                alt="..."
              />
            </button>
            Zaregistrovať sa</span
          >
        </a>
      </div>
      @endif
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark d-block d-sm-block d-md-none">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarToggleExternalContent"
        aria-controls="navbarToggleExternalContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
</header>
