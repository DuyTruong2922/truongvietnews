  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{route('home')}}">TrViNews</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4"></ul>


            <form class="d-flex">

                @if (Auth::guard('web')->check())
                    <a  class="nav-link" href="{{route('logout')}}" style="color: red">logout</a>
                @else
                    <a  class="nav-link" href="{{route('login')}}">Login</a>
                @endif
              
            </form>
        </div>
    </div>
</nav>