<div class="global-navbar">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-none d-sm-none d-md-inline">
                <img src="{{ asset('assets/images/logo.jpg') }}" class="w-100" alt="logo" width="30px" height="40px">
            </div>
            <div class="col-md-8 my-auto">
                <div class="border text-center p-2">
                <h4>Advertise here</h4>
            </div>
            </div>
        </div>
    </div>
    <div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-green">
        <div class="container">
            <a href="" class="navbar-brand d-none d-sm-none d-md-none">Navbar </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href={{ url('/') }}">Home</a>
              </li>

              @php
                  $categories = App\Models\Category::where('navbar_status','0')->where('status','0')->get();
              @endphp
              @foreach ($categories as $cateitem)
              <li class="nav-item">
                <a class="nav-link" href="{{ url('tutorials/'."$cateitem->slug") }}">{{ $cateitem->name }}</a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
    </nav>
</div>
</div>
