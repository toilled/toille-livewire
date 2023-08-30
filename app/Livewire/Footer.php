<?php

namespace App\Livewire;

use Illuminate\Contracts\Foundation\Application as ContractApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class Footer extends Component
{
    public string $activity;
    public string $type;

    public function mount()
    {
        $this->refresh();
    }

    public function refresh()
    {
        $response = json_decode(file_get_contents("https://www.boredapi.com/api/activity/"), true);
        $this->activity = $response['activity'];
        $this->type = $response['type'];
    }

    public function render(): View|Application|Factory|ContractApplication
    {
        return view('livewire.footer');
    }
}
