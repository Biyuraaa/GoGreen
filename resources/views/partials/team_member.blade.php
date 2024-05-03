<div class="single-item">
    <div class="img-box">
        <figure><img src="{{ $image }}" alt="" /></figure>
    </div>
    <div class="lower-content">
        <ul class="team-social">
            @foreach($socialLinks as $socialLink)
                <li>
                    <a href="{{ $socialLink['url'] }}"><i class="{{ $socialLink['icon'] }}"></i></a>
                </li>
            @endforeach
        </ul>
        <div class="name"><a href="{{ $link }}">{{ $name }}</a></div>
        <div class="title">{{ $title }}</div>
    </div>
</div>
