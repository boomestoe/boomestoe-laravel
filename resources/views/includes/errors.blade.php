@if (count($errors) > 0)
	@foreach ($errors->all() as $error)
		<div class="alert bg-yellow disabled color-palette text-center">
			<button type="button" aria-hidden="true" class="close" onclick="this.parentElement.style.display='none'">x</button>
	  		<p><strong>{{ $error }}</strong></p>
		</div>
	@endforeach
@endif