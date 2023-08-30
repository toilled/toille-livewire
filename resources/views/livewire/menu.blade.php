<ul>
    @foreach ($pages as $page)
        <li>
            <a wire:click="page({{$page->getAttribute('id')}})">{{$page->getAttribute('name')}}</a>
        </li>
    @endforeach
</ul>
