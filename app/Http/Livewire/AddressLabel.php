<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddressLabel extends Component
{
    public $label = '15/2';
    public $curly = false;
    public $font_family = 'Nunito';
    public $font_families = ['Nunito', 'Padauk'];

    public function render()
    {
        return view('livewire.address-label');
    }
}
