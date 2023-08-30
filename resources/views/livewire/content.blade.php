<article>
    <header>
        <h2 style="margin-bottom: 0">{{$pageTitle}}</h2>
    </header>
    @foreach($pageLines as $pageLine)
        <p>{!! $pageLine !!}</p>
    @endforeach
</article>
