<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<a class="navbar-brand" href="{{url('/')}}"><img class="ml-5 brandlogo" src="{{asset('image/logo.svg')}}" alt=""></a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">HOME</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{url('/Services')}}">SERVICES</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{url('/Portfolio')}}">PORTFOLIO</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{url('/Contact')}}">CONTACT</a>
          </li>
      </ul>
      <form class="mr-5 form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
