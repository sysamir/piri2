<form class="" role="form" method="POST" action="{{ url('/password/email') }}">
		{{ csrf_field() }}
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title text-center">İtirilmiş şifrənin bərpası</h4>
</div>

<div class="modal-body">
	<div class="row gap-20">

		<div class="col-sm-12 col-md-12">
			<p class="mb-20">Qeydiyyat zamanı qeyd etdiyiniz və ya sayta daxil olarkən istifadə etdiyiniz e-poçt ünvanını aşağıda qeyd edib sizə gələn məktub vasitəsilə şifrəni sıfırlaya filərsiniz.</p>
		</div>

		<div class="col-sm-12 col-md-12">

			<div class="form-group">
				<label>E-POÇT</label>
				<input name="email" class="form-control" placeholder="e-poçt ünvanın daxil edin" type="text">
			</div>

		</div>



		<div class="col-sm-12 col-md-12">
			<div class="login-box-box-action">
				Və ya <a data-toggle="modal" href="#loginModal">Giriş panelinə</a> qayıdın
			</div>
		</div>

	</div>
</div>

<div class="modal-footer text-center">
	<button type="submit" class="btn btn-primary">Göndər</button>
	<button type="button" data-dismiss="modal" class="btn btn-default">Bağla</button>
</div>
</form>
