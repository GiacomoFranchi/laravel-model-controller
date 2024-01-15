<header>
    <div class="header">
        <h1 class="text-center text-dark fs-1 fw-bolder my-3">MyFLIX</h1>
        <ul class="d-flex justify-content-center gap-3">
            @foreach($linksh as $link)
            <li class="{{Route::currentRoutename() == $link['link'] ? 'text-decoration-underline' : '' }}">
                <a href="{{$link['link']}}">{{$link['name']}}</a>
            </li>
            @endforeach
        </ul>

    </div>
</header>