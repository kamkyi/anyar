<nav class="fh5co-nav" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-2">
                <div id="fh5co-logo"><a href="{{ url('/') }}">Anyar</a></div>
            </div>
            <div class="col-md-6 col-xs-6 text-center menu-1">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li class="has-dropdown">
                        <a href="#">Services</a>
                        <ul class="dropdown">
                            <li><a href="#">Floral</a></li>
                            <li><a href="#">Thanapkha</a></li>
                            <li><a href="#">Fresh Foods</a></li>
                            <li><a href="#">Fresh Drinks</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
                <ul>
                    <li class="search">
                        <div class="input-group">
                          <input type="text" placeholder="Search..">
                          <span class="input-group-btn">
                            <button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
                          </span>
                        </div>
                    </li>
                    <li class="shopping-cart"><a href="#" class="cart"><span><small>0</small><i class="icon-shopping-cart"></i></span></a></li>
                </ul>
            </div>
        </div>
        
    </div>
</nav>