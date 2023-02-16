<header>
    <div class="blue-section">

    </div>
    <div class="container d-flex justify-content-between align-items-center text-center">
        <a href="/" class="logo">
            <img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="logo">
        </a>
        <nav>
            <ul class="d-flex">
                @foreach($menu as $menuItem)
                <li class="active">
                    <a href="{{$menuItem['url']}}">{{$menuItem['label']}}</a>
                </li>
                @endforeach
            </ul>
        </nav>
        <div class="search">
            <input type="text" placeholder="Search">
        </div>
    </div>
</header>