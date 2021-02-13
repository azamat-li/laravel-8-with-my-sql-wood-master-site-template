<div>
		<div class="title">
			 <h2 class="p-2 m-3">Вычислитель кубометра </h2>
		</div>
	  <input wire:model="shape" type="radio" id="plane" value="plane" name="shape" placeholder="тип дерева">
		<label for="shape1">Доска</label><br>
		<input wire:model="shape" type="radio" id="circular" name="shape" value="circular">
		<label for="circular">Круглое</label><br>  
		<input type="text" wire:model="length" alt="длина" placeholder="длина в метрах">
		<input type="text" wire:model="thicknessInMm" alt="толщина" placeholder="толщина в миллиметрах">
		<div class="select-all p-2">
			<p >Для @if ($shape === 'plane') доски @elseif ($shape === 'circular') круглого материала @endif   длиной {{ $length }} метров и толщиной {{  $thicknessInMm }} миллиметров 
			</p>
			<p>
			</p>
		</div>
</div>
