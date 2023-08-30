<ul>
    @foreach ($pages as $page)
        <li>
            <a wire:click="page({{$page->getAttribute('id')}})" class="pointer {{$page->getAttribute('id') === $selected ? 'selected' : ''}}">{{$page->getAttribute('name')}}</a>
        </li>
    @endforeach
</ul>
