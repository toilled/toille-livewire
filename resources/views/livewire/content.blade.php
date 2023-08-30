<article>
    <header>
        <h2 style="margin-bottom: 0">{{$pageTitle}}</h2>
    </header>
    @foreach($pageLines as $pageLine)
        @if($loop->last)
            <p style="margin-bottom: 0">{!! $pageLine !!}</p>
        @else
            <p>{!! $pageLine !!}</p>
        @endif
    @endforeach
</article>
