<div class="row">
	<div class="col-md-6">
		<img src="{{ $quote->imageSrc }}" class="img-fluid rounded shadow">
	</div>
	<form class="col-md-6 mx-auto" wire:submit.prevent="save">
		@if (session()->has('success'))
		  <div class="alert alert-success alert-dismissible">
		    <span>{{ session('success' )}}</span>
		    <button class="close" data-dismiss="alert">&times;</button>
		  </div>
		@endif
		<div class="card shadow">
			<div class="card-header py-3">
				<h6 class="font-weight-bold text-primary m-0">Edit Quote</h6>
			</div>
			<div class="card-body">
				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Teks</label>
					<div class="col-sm-8">
						<input type="text" class="form-control @error('quote.text') is-invalid @enderror" wire:model="quote.text" placeholder="Teks" autofocus>

						@error('quote.text')
							<span class="invalid-feedback">{{ $message }}</span>
						@enderror			
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Teks Footer</label>
					<div class="col-sm-8">
						<input type="text" class="form-control @error('quote.footer') is-invalid @enderror" wire:model="quote.footer" placeholder="Teks Footer" autofocus>

						@error('quote.footer')
							<span class="invalid-feedback">{{ $message }}</span>
						@enderror			
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Foto</label>
					<div class="col-sm-8">
						<div class="custom-file">
							<label class="custom-file-label">{{ $quote->image }}</label>
							<input type="file" class="custom-file-input @error('image') is-invalid @enderror" wire:model="image">

							@error('image')
								<span class="invalid-feedback">{{ $message }}</span>
							@enderror
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer">
				<button class="btn btn-primary" type="submit" wire:loading.attr="disabled" wire:target="save">Simpan</button>
			</div>
		</div>
	</form>
</div>

@push('js')
	<script src="{{ asset('sbadmin/vendor/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
	<script>
		bsCustomFileInput.init()
	</script>
@endpush