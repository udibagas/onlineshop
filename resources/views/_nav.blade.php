<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Glindhing</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" placeholder="Search" class="form-control" style="width:500px;">
                </div>
                <button type="submit" class="btn btn-success">Cari</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/faq">FAQ</a></li>
                
                @if (Auth::check())

                <li><a href="/user/{{ Auth::user()->id }}">Profile ({{ Auth::user()->name }})</a></li>
                <li><a href="/auth/logout">Logout</a></li>

                @else

                <li><a href="/auth/login">Login</a></li>
                <li><a href="/auth/register">Register</a></li>

                @endif

            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</nav>