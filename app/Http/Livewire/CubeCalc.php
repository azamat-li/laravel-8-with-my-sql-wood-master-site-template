<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CubeCalc extends Component
{
		public  $shape = 'circular';
		public  $length= null;
		public  $smWidthInMm = null;
		public  $thickness = null;
		public  $volumeInCubicMeters = null;
		public  $count = 1;

    public function render()
    {
        return view('livewire.cube-calc');
    }

		public function hydrate() 
		{
			  $this->calculateCubes();
		}

		public function updated() 
		{

			  $this->calculateCubes();
		}

		public function calculateCubes()
		{
			if ($this->shape === 'circular')  return $this->calculateCubeOfCircular();
			if ($this->shape === 'plane')  return $this->calculateCubeOfBoard();
		}

		public function  calculateCubeOfBoard() {
			$smAreaInMm = (int)$this->smWidthInMm * (int)$this->thickness;
			$smAreaInMeters = $smAreaInMm / 1000 / 1000;
		  $boardVolumeInCubicMeters = $smAreaInMeters * (float)$this->length;
			$totalVolumeInCubicMeters = $boardVolumeInCubicMeters * $this->count;
			$this->volumeInCubicMeters = $totalVolumeInCubicMeters; 
				return $totalVolumeInCubicMeters;
		}	

		public function  calculateCubeOfCircular() {
			$smAreaInMm= pi() / 4 * (int)$this->smWidthInMm * (int)$this->smWidthInMm;
			$this->thickness = 0;
			$smAreaInMeters = $smAreaInMm / 1000 / 1000;
		  $volumeInCubicMeters = $smAreaInMeters * (float)$this->length;
		  $totalVolumeInCubicMeters = $volumeInCubicMeters * $this->count;
			$this->volumeInCubicMeters = $totalVolumeInCubicMeters; 
				return $totalVolumeInCubicMeters;
		}	
}
