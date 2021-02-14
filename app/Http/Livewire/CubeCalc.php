<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CubeCalc extends Component
{
		public  $shape = null;
		public  $length= null;
		public  $smWidthInMm = null;
		public  $thickness = null;
		public  $volumeInCubicMeters = null;

    public function render()
    {
        return view('livewire.cube-calc');
    }

		public function calculateCubes(String $shape)
		{
			return $this->calculateCubeOfCircular();
		}

		public function  calculateCubeOfCircular() {
			//$smAreaInMm= pi() / 4 * pow($this->smWidthInMm, 2) ;
			$smAreaInMm= pi() / 4 * $this->smWidthInMm * $this->smWidthInMm;
			$smAreaInMeters = $smAreaInMm / 1000 / 1000;
		  $volumeInCubicMeters = $smAreaInMeters * $this->length;
			$this->volumeInCubicMeters = $volumeInCubicMeters; 
				return $volumeInCubicMeters;
		}	
}
