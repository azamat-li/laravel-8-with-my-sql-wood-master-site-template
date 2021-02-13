<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CubeCalc extends Component
{
		public  $shape = null;
		public  $length= '';
		public  $thicknessInMm= '';

    public function render()
    {
        return view('livewire.cube-calc');
    }
}
