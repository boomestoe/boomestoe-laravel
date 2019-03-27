@if (session('message'))
	{{-- <div class="alert text-left" style="background-color: rgb(126, 200, 87);">
	    <p><i class="icon fa fa-check-square-o"></i>
	    <strong> Berhasil, </strong>
	    {{session('message')}}</p>
	</div> --}}

	<div class="jq-toast-wrap bottom-right">
		<div class="jq-toast-single jq-has-icon jq-icon-success" style="background-color: rgb(126, 200, 87); text-align: left; display: block;">
			<span class="jq-toast-loader"></span>
			<span class="close-jq-toast-single" onclick="this.parentElement.style.display='none'">×</span>
			<h2 class="jq-toast-heading">Success</h2>{{session('message')}}
		</div>
	</div>
@endif



