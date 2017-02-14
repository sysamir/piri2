@section('title', 'Əlaqə')
@extends('client.layouts.client')


@section('content')
<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">

			<div class="breadcrumb-wrapper">

				<div class="container">

					<div class="row">

						<div class="col-xs-12 col-sm-6 hidden-xs">
							<h2 class="page-title">Bizimlə Əlaqə</h2>
						</div>

						<div class="col-xs-12 col-sm-6">
							<ol class="breadcrumb">
								<li class="active text">Burdasınız:</li>
								<li><a href="{{url('/')}}">Giriş</a></li>
								<li class="{{route('elaqe')}}">Əlaqə</li>
							</ol>
						</div>

					</div>

				</div>

			</div>

			<div class="container-outer pb-20">

				<div class="container">

					<div class="contact-wrapper GridLex-gap-30">

						<div class="GridLex-grid-noGutter-equalHeight">

							<div class="GridLex-col-12_sm-12_xs-12">

								<div class="contact-item-wrapper">

									<div class="GridLex-grid">

										<div class="GridLex-col-5_sm-4_xs-12">

											<div class="contact-item mb-30">
												<h5>Address</h5>
												<p>{{config('app.address')}}</p>
											</div>

										</div>

										<div class="GridLex-col-4_sm-4_xs-12">

											<div class="contact-item mb-30">
												<h5>Contact</h5>
												<p>{{config('app.tel')}} <br/>{{config('app.tel2')}}<br/>{{config('app.email')}}</p>
											</div>

										</div>

										<div class="GridLex-col-3_sm-4_xs-12">

											<div class="contact-item mb-30">
												<h5>Socials</h5>
												<p><a href="{{config('app.facebook')}}">Facebook</a><br/><a href="{{config('app.twitter')}}">Twitter</a><br/><a href="{{config('app.instagram')}}">Instagram</a></p>
											</div>

										</div>



									</div>

								</div>

							</div>

							<div class="GridLex-col-12_sm-12_xs-12">

								<div class="contact-form-wrapper-boxed">

									<div class="section-title text-left mb-20">

										<h4>Bizə mesaj göndərin</h4>

										<p>Sayt barədə yaranan hər hansı sual və ya problem barəsində bizə yazın</p>

									</div>

									<form id="contact-form" method="post" action="{{route('mail')}}">
                    {{ csrf_field() }}
										<div class="messages"></div>

										<div class="controls">

											<div class="row">

												<div class="col-xs-12 col-sm-12">
													<div class="form-group">
														<label for="form_name">Ad, Soyad <span class="font10 text-danger">(lazımlı)</span></label>
														<input id="form_name" type="text" name="name" class="form-control" placeholder="Adınızı, Soyadınızı daxil edin *" required="required" data-error="Lazımlı.">
														<div class="help-block with-errors"></div>
													</div>
												</div>

												<div class="col-xs-12 col-sm-12">
													<div class="form-group">
														<label for="form_email">E-poçt <span class="font10 text-danger">(lazımlı)</span></label>
														<input id="form_email" type="email" name="email" class="form-control" placeholder="E-poçt ünvanın daxil edin *" required="required" data-error="Lazımlı">
														<div class="help-block with-errors"></div>
													</div>
												</div>

												<div class="col-xs-12 col-sm-12">
													<div class="form-group">
														<label>Mövzu</label>
														<input id="form_lastname" type="text" name="title" class="form-control" placeholder="Əlaqəli movzunu daxil edin *" required="required" data-error="Lazımlı.">
														<div class="help-block with-errors"></div>
													</div>
												</div>

												<div class="col-xs-12 col-sm-12">
													<div class="form-group">
														<label for="form_message">Mesaj <span class="font10 text-danger">(lazımlı)</span></label>
														<textarea id="form_message" name="message" class="form-control" placeholder="Mesajınız *" rows="8" required="required" data-error="Lazımlı."></textarea>
														<div class="help-block with-errors"></div>
													</div>
												</div>

												<div class="col-xs-12 col-sm-12">
													<input type="submit" class="btn btn-primary btn-send mt-10" value="Göndər">
												</div>

												<div class="col-md-12">
														<p class="text-muted font12 mt-20" style="line-height: 1.2;"><span class="font12 text-danger">*</span> Bu sahələr doldurulmalıdır.</p>
												</div>

											</div>

										</div>

									</form>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>
@endsection
