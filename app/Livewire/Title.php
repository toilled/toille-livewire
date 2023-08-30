<?php

namespace App\Livewire;

use App\Models\Title as TitleModel;
use Illuminate\Contracts\Foundation\Application as ContractsApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class Title extends Component
{
    public function render(): View|Application|Factory|ContractsApplication
    {
        $title = TitleModel::whereType('title')->firstOrFail();
        $subtitle = TitleModel::whereType('subtitle')->firstOrFail();

        return view(
            'livewire.title',
            ['title' => $title->getAttribute('value'), 'subtitle' => $subtitle->getAttribute('value')]
        );
    }
}
