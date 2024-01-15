<footer class="cont">
    <div class="footer d-flex">
        <button>SING-UP NOW!</button>
        <div class="cont-dx">
            <h3 class="text-info">FOLLOW US</h3>
            <ul class="text-light d-flex">
                @foreach ($linksf as $link)
                <li class="{{Route::currentRoutename() == $link['link'] ? 'text-decoration-underline' : '' }}">
                    <a href="{{$link['link']}}">{{$link['name']}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</footer>