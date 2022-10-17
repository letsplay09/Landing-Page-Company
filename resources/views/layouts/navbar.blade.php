<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">PT Jasamedika Saranatama</a>
    
    <!-- Links -->
    <ul class="navbar-nav">
        @if(Auth::user()->level == "Admin")
        <li class="nav-item">
            <a class="nav-link" href="{{route('kelurahan')}}">Kelurahan</a>
        </li>
        @elseif(Auth::user()->level == "Operator")
        <li class="nav-item">
            <a class="nav-link" href="{{route('pasien')}}">Registrasi Pasien</a>
        </li>
        @endif
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}">Logout</a>
        </li>
    </ul>
  </nav>