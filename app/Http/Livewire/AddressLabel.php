<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class AddressLabel extends Component
{
    public $font_families;
    public $selected_font_family = '';

    public $label = '15/2-B';
    public $is_bold = false;

    public $message = '';

//    curly addless label font
//    public $curly = false;

    /**
     * Get label from request on mounting.
     * @param Request $request
     */
    public function mount(Request $request)
    {
//        Retrieving from database
//        $this->font_families = Font::all();
        $this->label = $request->input('label', '12/6-A');
        $this->font_families = ['Padauk', 'Roboto', 'Inconsolanta', 'Open+Sans'];
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
