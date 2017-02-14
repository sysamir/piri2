@section('title', 'Şirkət hesabının redaktəsi')
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

										<h4>Şirkət hesabının redaktəsi</h4>

										<p>  </p>

									</div>

									<form id="contact-form" action="/profile-update" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

										<div class="messages"></div>

										<div class="controls">

											<div class="row">

												<div class="col-xs-6 col-sm-6">
													<div class="form-group">
														<label for="form_name">Şirkətin adı </label>
														<input value="{{$cProfile->company->c_name}}" id="form_name" type="text" name="c_name" class="form-control" placeholder="şirkətin adın daxil edin *" required="required" >
														<div class="help-block with-errors"></div>
													</div>
												</div>

												<div class="col-xs-6 col-sm-6">
													<div class="form-group">
														<label for="form_email">Vöen </label>
														<input value="{{$cProfile->company->c_voen}}" disabled id="form_email" type="text" name="c_voen" class="form-control" placeholder="vöen -i daxil edin *" >
														<div class="help-block with-errors"></div>
													</div>
												</div>

												<div class="col-xs-6 col-sm-6">
													<div class="form-group">
														<label>Telefon nömrəsi</label>
														<input value="{{$cProfile->company->c_number}}" id="form_lastname" type="text" name="c_number" class="form-control" placeholder="şirkətə aid bir telefon nomrəsi *" required="required" >
														<div class="help-block with-errors"></div>
													</div>
												</div>

                        <div class="col-xs-6 col-sm-6">
													<div class="form-group">
														<label>E-Poçt ünvanı</label>
														<input value="{{$cProfile->company->c_official_mail}}" id="form_lastname" type="text" name="c_official_mail" class="form-control" placeholder="şirkətin rəsimi e-poçt ünvanı *" required="required" >
														<div class="help-block with-errors"></div>
													</div>
												</div>

												<div class="col-xs-12 col-sm-12">
													<div class="form-group">
														<label for="form_message">Şirkət haqqında</label>
														<textarea id="form_message" name="c_desc" class="form-control" placeholder="Şirhət haqqında məlumat mətni *" rows="8" required="required" >{{$cProfile->company->c_desc}}</textarea>
														<div class="help-block with-errors"></div>
													</div>
												</div>

                        <div class="col-xs-6 col-sm-6">
													<div class="form-group">
														<label>Şirkətin loqosu</label>
														<input id="form_lastname" type="file" name="image" class="form-control"  >
														<div class="help-block with-errors"></div>
														<img class="img-responsive" style="max-height: 150px" src="/uploads/images/{{$cProfile->company->c_logo_image}}" alt="Şirkətin loqosu" title="Şirkətin loqosu" />
													</div>
												</div>

												<div class="col-xs-6 col-sm-6">
													<div class="form-group">
														<label>Şirkətin fəaliyyət sahələri</label>
														<select id="cct" data-style="bck" class="form-control selectpicker " name="cc_cat_id[]" title="Sahələri seçin" multiple data-selected-text-format="count > 3">
															@foreach($cat as $c)
															<option value="{{$c->cat_id}}">{{$c->cat_name}}</option>
																@foreach($c->children as $c2)
																<option value="{{$c2->cat_id}}">-{{$c2->cat_name}}</option>
																	@foreach($c2->children as $c3)
																	<option value="{{$c3->cat_id}}">--{{$c3->cat_name}}</option>
																	@endforeach
																@endforeach
															@endforeach
														</select>
													</div>
												</div>

												<script type="text/javascript">
												@foreach($cProfile->company->categories as $c)
													$("#cct option[value='{{$c->cat_id}}']").attr("selected", true);
												@endforeach
												</script>

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
