<header>
    <div class="nav-bar">
        <div class="links">
            <div class="container">
                <ul class="d-flex justify-content-end">
                    <li><a href="#" class="text-white">DC POWER VISA</a></li>
                    <li><a href="#" class="text-white">ADDITIONAL DC SITES</a></li>
                </ul>
            </div>
        </div>

        <div class="menu">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <img src="{{ asset('images/dc-logo.png') }}" alt="logo dc" class="logo-dc">
                    </div>

                    <div>
                        <ul>
                            @foreach ($links as $item)
                                <li class="{{ $item['activepage'] === true ? 'active' : '' }}">
                                    <a href="{{ $item['link'] }}">{{ $item['page'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div>
                        <input type="text" placeholder="Search" class="searchbar searchbar-border">
                        <button type="submit" class="searchbar-border position-absolute">
                            <i class="fa fa-search"></i></button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
