<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {!! $active_page == "home_page" ? "active":""  !!}">
                    <a class="nav-link" href="{{URL::to("/")}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {!! $active_page == "about_page" ? "active":""  !!}">
                    <a class="nav-link" href="{{URL::to("/about-us")}}">About Us</a>
                </li>
                <li class="nav-item {!! $active_page == "contact_page" ? "active":""  !!}">
                    <a class="nav-link" href="{{URL::to("/contact-us")}}">Contact Us</a>
                </li>
                <li class="nav-item {!! $active_page == "post_page" ? "active":""  !!}">
                    <a class="nav-link" href="{{URL::to("/post")}}">Posts</a>
                </li>
            </ul>
        </div>
    </nav>
</header>