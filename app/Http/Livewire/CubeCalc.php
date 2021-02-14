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
		public  $count = 1;

    public function render()
    {
        return view('livewire.cube-calc');
    }

		public function calculateCubes(String $shape)
		{
			if ($shape === 'circular')  return $this->calculateCubeOfCircular();
			if ($shape === 'plane')  return $this->calculateCubeOfBoard();
		}

		public function  calculateCubeOfBoard() {
			$smAreaInMm = $this->smWidthInMm * $this->thickness;
			$smAreaInMeters = $smAreaInMm / 1000 / 1000;
		  $boardVolumeInCubicMeters = $smAreaInMeters * $this->length;
			$totalVolumeInCubicMeters = $boardVolumeInCubicMeters * $this->count;
			$this->volumeInCubicMeters = $totalVolumeInCubicMeters; 
				return $totalVolumeInCubicMeters;
		}	

		public function  calculateCubeOfCircular() {
			//$smAreaInMm= pi() / 4 * pow($this->smWidthInMm, 2) ;
			$smAreaInMm= pi() / 4 * $this->smWidthInMm * $this->smWidthInMm;
			$smAreaInMeters = $smAreaInMm / 1000 / 1000;
		  $volumeInCubicMeters = $smAreaInMeters * $this->length;
		  $totalVolumeInCubicMeters = $volumeInCubicMeters * $this->count;
			$this->volumeInCubicMeters = $totalVolumeInCubicMeters; 
				return $totalVolumeInCubicMeters;
		}	
}
