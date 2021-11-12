<header>
  <div class="d-sm-none d-md-block d-none d-sm-block">
    <nav class="p-0 pl-2 pr-5 navbar navbar-expand-md collapse-sm">
      <div class="p-0 container-fluid">
        <div class="justify-content-between navbar-collapse" id="#">
          <a href="/" class="navbar-brand">
            <img src="../images/logo-nabytok.png" alt="" width="120" />
          </a>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mt-2 pt-0 mr-5">
              <input
                size="35"
                placeholder="Vyhľadaj si nábytok"
                aria-label="Search"
              />
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
                  <img src="../images/user-1.png" width="30" alt="" />
                </button>
                <ul
                  class="dropdown-menu"
                  aria-labelledby="dropdownMenuButton1"
                >
                  <input
                    size="25"
                    placeholder="Prihlasovacie meno"
                    aria-label="Search"
                    class="dropdown-input-item"
                  />
                  <input
                    type="password"
                    placeholder="Heslo"
                    class="form-control"
                    id="passwordAgain"
                  />
                  <li>
                    <a class="dropdown-link-item dropdown-item" href="#"
                      >Zabudli ste heslo?</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-bold-item dropdown-item" href="#"
                      >Prihlásiť sa</a
                    >
                  </li>
                  <li>
                    <a
                      class="dropdown-bold-item dropdown-item"
                      href="/register"
                      >Zaregistrovať sa</a
                    >
                  </li>
                </ul>
              </div>
            </li>
            <li class="dropdown-padding-right nav-item">
              <a class="nav-link" href="/kosik"
                ><img src="../images/shopping-cart-1.png" width="30" alt=""
              /></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="b p-4 m-auto">
      <a href="/welcome" class="navbar-brand">
        <img src="../images/logo-nabytok.png" alt="" width="120" />
      </a>
      <div class="col-8 mt-1">
        <input
          class="form-control mr-sm-2"
          type="search"
          placeholder="Search"
          aria-label="Search"
        />
      </div>
      <div class="col-8">
        <a href="/kosik">
          <span class="text-muted">
            <button class="navbutton btn my-2 my-sm-0" type="submit">
            
              <img
                src="../images/shopping-cart-1.png"
                class="rounded mx-auto d-block"
                width="30"
                alt="..."
              />
            
            </button>
              Kosik</span>
        </a>
      </div>

      <div class="col-8">
        <input size="54" type="text"  placeholder="Prihlasovacie meno" aria-label="Search" class="form-control"> 
        <input size="50" type="password" placeholder="Heslo" class="form-control" id="passwordAgain" />
     </div>
      <div class="col-8">
        <span class="text-muted">
          <button class="navbutton btn my-2 my-sm-0" type="submit">
            <img
              src="../images/login_button.svg"
              class="rounded mx-auto d-block"
              width="30"
              alt="..."
            />
          </button>
          Prihlásiť sa</span
        >
      </div>
      <div class="col-8">
        <a href="/register">
          <span class="text-muted">
          
            <button class="navbutton btn my-2 my-sm-0" type="submit">
              <img
                src="../images/user-1.png"
                class="rounded mx-auto d-block"
                width="30"
                alt="..."
              />
            </button>
            Zaregistrovať sa</span
          >
        </a>
      </div>
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