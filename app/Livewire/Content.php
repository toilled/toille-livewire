<?php

namespace App\Livewire;

use App\Models\Page;
use Illuminate\Contracts\Foundation\Application as ContractApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class Content extends Component
{
    public string $pageTitle;
    public array $pageLines;

    protected $listeners = ['page'];

    public function mount()
    {
        /** @var Page $page */
        $page = Page::firstOrFail();
        $this->pageTitle = $page->getAttribute('title');
        $this->pageLines = [];
        foreach ($page->lines()->get() as $line) {
            $this->pageLines[] = $line->getAttribute('value');
        }
    }

    public function page(int $pageID)
    {
        $page = Page::whereId($pageID)->firstOrFail();
        $this->pageTitle = $page->getAttribute('title');
        $this->pageLines = [];
        foreach ($page->lines()->get() as $line) {
            $this->pageLines[] = $line->getAttribute('value');
        }
    }

    public function render(): View|Application|Factory|ContractApplication
    {
        return view('livewire.content');
    }
}
