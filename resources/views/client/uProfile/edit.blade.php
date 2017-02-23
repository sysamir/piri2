@section('title', 'İstifadəçi hesabının redaktəsi')
@extends('client.layouts.client')


@section('content')
<div class="main-wrapper scrollspy-container">

			<div class="breadcrumb-wrapper">

				<div class="container">

					<div class="row">

						<div class="col-xs-12 col-sm-6 hidden-xs">
							<h2 class="page-title">Profil</h2>
						</div>


					</div>

				</div>

			</div>

			<div class="container-outer pb-20">

				<div class="container">

					<div class="contact-wrapper GridLex-gap-30">

						<div class="GridLex-grid-noGutter-equalHeight">



							<div class="GridLex-col-12_sm-12_xs-12">

								<div class="contact-form-wrapper-boxed">

									<div class="section-title text-left mb-20">

										<h4>Istifadəçi hesabının redaktəsi</h4>

										<p>  </p>

									</div>

									<form id="contact-form" action="/profile-update" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

										<div class="messages"></div>

										<div class="controls">

											<div class="row">

												<div class="col-xs-6 col-sm-6">
													<div class="form-group">
														<label for="form_name">Ad, Soyad</label>
														<input id="form_name" type="text" name="u_name" value="{{$uProfile->person->u_name}}" class="form-control" placeholder="Adınız Soyadınız *" required="required" >
														<div class="help-block with-errors"></div>
													</div>
												</div>

												<div class="col-xs-6 col-sm-6">
													<div class="form-group">
														<label for="form_email">Telefon nömrəsi</label>
														<input id="form_email" type="text" name="u_phone" value="{{$uProfile->person->u_phone}}" class="form-control" placeholder="telefon nomrəsi *" >
														<div class="help-block with-errors"></div>
													</div>
												</div>

												<div class="col-xs-6 col-sm-6">
													<div class="form-group">
														<label>Təvəllüd</label>
														<input id="form_lastname" type="date" name="u_birth" value="{{$uProfile->person->u_birth}}"  class="form-control" placeholder="doğum tarixinizi daxil edin *" required="required" >
														<div class="help-block with-errors"></div>
													</div>
												</div>

                        <div class="col-xs-6 col-sm-6">
													<div class="form-group">
														<label>Cinsiniz</label>
														<select class="form-control" name="u_gender">
															<option style="display:none" value="">Seçin</option>
															<option @if($uProfile->person->u_gender == 1) selected @endif value="1">Kişi</option>
															<option @if($uProfile->person->u_gender == 2) selected @endif value="2">Qadın</option>
														</select>
														<div class="help-block with-errors"></div>
													</div>
												</div>


												<div class="col-xs-12 col-sm-12">
													<input type="submit" class="btn btn-primary btn-send mt-10" value="Saxla">
												</div>

												<div class="col-md-12">
														<p class="text-muted font12 mt-20" style="line-height: 1.2;"><span class="font12 text-danger">*</span> işarəli bütün sahələr doldurulmalıdır.</p>
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
