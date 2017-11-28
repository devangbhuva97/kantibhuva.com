<div id="navbar-main"> 
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand smoothScroll" href="#home">Sun Services</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/#home" class="smoothScroll">Home</a></li>
                    <li><a href="/#about" class="smoothScroll"> About</a></li>
                    <li><a href="/#services" class="smoothScroll"> Services</a></li>
                    <li><a href="/#portfolio" class="smoothScroll"> Portfolio</a></li>
                    <li><a href="/#contact" class="smoothScroll"> Contact</a></li>
                    @if ( auth()->guard()->guest() || Auth::user()->role == 'guest' )
                    <li><a href="{{ route('register') }}"> Sign Up</a></li>
                    <li><a href="{{ route('login') }}"> Log In</a></li>
                    @elseif ( Auth::user()->role == 'user' || Auth::user()->role == 'admin' )
                        <li><a href="/#software" class="smoothScroll"> Softwares</a></li>
                        @if ( Auth::user()->role == 'admin' )
                            <li><a href="/#user" class="smoothScroll"> Users</a></li>
                        @endif
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>