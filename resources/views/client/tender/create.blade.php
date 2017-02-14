@section('title', 'Yeni tender yarat')
@extends('client.layouts.client')


@section('content')
<div class="main-wrapper scrollspy-container">

			<div class="breadcrumb-wrapper">

				<div class="container">

					<div class="row">

						<div class="col-xs-12 col-sm-6 hidden-xs">
							<h2 class="page-title">Tender Yarat</h2>
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

										<h4>YENİ TENDERİN ƏLAVƏSİ</h4>

										<p>  </p>

									</div>

									<form id="contact-form" action="{{ route('tender.index') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

										<div class="messages"></div>

										<div class="controls">

											<div class="row">

												<div class="col-xs-6 col-sm-6">
													<div class="form-group">
														<label for="form_name">Tenderin Adı</label>
														<input id="form_name" type="text" name="tender_name" class="form-control" placeholder="Tenderin adını daxil edin *" required="required" >
														<div class="help-block with-errors"></div>
													</div>
												</div>

												<div class="col-xs-4 col-sm-4">
													<div class="form-group">
														<label for="form_email">Məbləğ</label>
														<input id="form_email" type="text" name="tender_cost_value" class="form-control" placeholder="Məbləğ daxil edin *" >

														<div class="help-block with-errors"></div>
													</div>
												</div>

													<div class="col-xs-2 col-sm-2">
												<div class="form-group">
													<label>Valyuta</label>
													<select class="form-control" name="tender_cost_currency">
														<option style="display:none" value="">Seçin</option>
														<option >AZN</option>
														<option >DOLLAR</option>
													</select>
													<div class="help-block with-errors"></div>
												</div>
											</div>


												<div class="col-xs-6 col-sm-6">
													<div class="form-group">
														<label>Əlaqə nömrəsi</label>
														<input id="form_lastname" type="text" name="tender_phone" class="form-control" placeholder="Tenderə aid bir əlaqə nomrəsi *" required="required" >
														<div class="help-block with-errors"></div>
													</div>
												</div>

                        <div class="col-xs-6 col-sm-6">
													<div class="form-group">
														<label>E-Poçt ünvanı</label>
														<input id="form_lastname" type="text" name="tender_mail" class="form-control" placeholder="Tenderin əsas e-poçt ünvanı *" required="required" >
														<div class="help-block with-errors"></div>
													</div>
												</div>


												<div class="col-xs-6 col-sm-6">
													<div class="form-group">
														<label>Ünvan</label>
														<input id="form_lastname" type="text" name="tender_address" class="form-control" placeholder="Tenderin əsas e-poçt ünvanı *" required="required" >
														<div class="help-block with-errors"></div>
													</div>
												</div>

												<div class="col-xs-12 col-sm-12">
													<div class="form-group">
														<label for="form_message">Tender haqqında geniş məlumat  </label>
														<textarea id="form_message" name="tender_desc" class="form-control" placeholder="Tender haqqında məlumat mətni *" rows="8" required="required" ></textarea>
														<div class="help-block with-errors"></div>
													</div>
												</div>

												<div class="col-xs-6 col-sm-6">
												<div class="form-group">
													<label>Tenderin kateqroiyası</label>
													<select class="form-control" name="tender_category_id">
														<option style="display:none" value="">Seçin</option>
														@foreach($category as $categor)
														<option value="{{$categor->cat_id}}">{{$categor->cat_name}}
																@foreach($categor->children as $cate)
																<option value="{{$cate->cat_id}}">-{{$cate->cat_name}}

																	@foreach($cate->children as $cat)
																	<option value="{{$cat->cat_id}}">--{{$cat->cat_name}}</option>
																	@endforeach

																 </option>
																@endforeach
														</option>
														@endforeach

													</select>
													<div class="help-block with-errors"></div>
												</div>
											</div>



										<div class="col-xs-6 col-sm-6">
											<div class="form-group">
												<label>Tenderin bitmə tarixi</label>
												<input id="form_lastname" type="date" name="tender_deadline" class="form-control" placeholder="Tenderin əsas e-poçt ünvanı *" required="required" >
												<div class="help-block with-errors"></div>
											</div>
										</div>

                        <div class="col-xs-6 col-sm-6">
													<div class="form-group">
														<label>Tender şəkil</label>
														<input id="form_lastname" type="file" name="tender_image" class="form-control"  required="required" >
														<div class="help-block with-errors"></div>
													</div>
												</div>


											<div class="col-xs-6 col-sm-6">
												<div class="form-group">
													<label>Tenderin vəziyyəti</label>
													<select id="typeT" class="form-control" name="tender_private">
														<option style="display:none" selected disabled value="">Seçin</option>
														<option value="0">Açıq Tender</option>
														<option value="1">Qapalı Tender</option>
													</select>
													<div class="help-block with-errors"></div>
												</div>
											</div>

											<div style="display:none" id="comp" class="col-xs-6 col-sm-6">
												<div class="form-group">
													<label>Dəvətli şirkətlər</label>
													<select data-style="bck" class="form-control selectpicker " name="tc_company_id[]" title="Şirkətləri seçin" multiple data-selected-text-format="count > 3">
														@foreach($companies as $c)
														<option value="{{$c->c_id}}">{{$c->c_name}}</option>
														@endforeach
													</select>
													<div class="help-block with-errors"></div>
												</div>
											</div>

											<script type="text/javascript">
												$('#typeT').change(function(){
													if ($("#typeT").val() == '1') {
														$('#comp').show(300);
													}else{
														$('#comp').hide(300);
													}
												});
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
