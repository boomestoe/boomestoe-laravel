@if (session('modals'))
	<div class="modal fade" id="modals" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">Hapus Berita</h4>
		      </div>
		      <div class="modal-body">
		      	<input type="hidden" name="id" value="{{ $berita->id }}"/>
		        <p>Apakah Anda yakin mau menghapus data <b>{{ $berita->id }}</b>?</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
		        <button type="button"  id="delete" class="btn btn-primary">Delete</button>
		      </div>
		    </div>
		</div>
	</div>
	    
@endif



