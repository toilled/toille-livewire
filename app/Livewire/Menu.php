<?php

namespace App\Livewire;

use App\Models\Page;
use Illuminate\Contracts\Foundation\Application as ContractApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class Menu extends Component
{
    public function page($id)
    {
        $this->dispatch('page', $id)->to('content');
    }

    public function render(): View|Application|Factory|ContractApplication
    {
        $pages = Page::all();

        return view('livewire.menu', ['pages' => $pages]);
    }
}
