<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class AddressLabel extends Component
{
    public $label = '15/2-B';
    public $curly = false;
    public $font_family = 'Nunito';
    public $font_families = ['Nunito', 'Padauk'];

    /**
     * Get label from request on mounting.
     * @param Request $request
     */
    public function mount(Request $request)
    {
        $this->label = $request->input('label', '12/6-A');
    }

    /**
     * Uppercase label on input to label field.
     */
    public function updatedLabel()
    {
        $this->label = strtoupper($this->label);
    }

    public function render()
    {
        return view('livewire.address-label');
    }
}
