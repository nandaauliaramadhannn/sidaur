<header class="navbar navbar-expand-lg fixed-top">
    <div class="container">

      <!-- Navbar brand (Logo) -->
      <a class="navbar-brand pe-sm-3" href="{{route('frontend.index')}}">
        <span class="text-primary flex-shrink-0 me-2">
          <img src="{{asset('frontend/img/sidaur.png')}}" alt="Logo" width="120px" height="auto">
        </span>
       {{-- Sidaur --}}
      </a>

      <!-- Theme switcher -->
      <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto" data-bs-toggle="mode">
        <input class="form-check-input" type="checkbox" id="theme-mode">
        <label class="form-check-label" for="theme-mode">
          <i class="ai-sun fs-lg"></i>
        </label>
        <label class="form-check-label" for="theme-mode">
          <i class="ai-moon fs-lg"></i>
        </label>
      </div>
      <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <nav class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">
            <li class="nav-item">
                <a class="nav-link" href="{{route('frontend.index')}}">Home</a>
              </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('isi-pendataan-umkm')}}">Pengisian UMKM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="docs/getting-started.html">Docs</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
