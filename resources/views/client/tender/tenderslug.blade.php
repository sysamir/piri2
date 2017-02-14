@section('title', 'Yeni tender yarat')
@extends('client.layouts.client')


@section('content')

<div class="container-outer">

				<div class="container">

					<div class="row gap-25-sm">

						<div class="col-xs-12 col-sm-8 col-md-9">

							<div class="content-wrapper pb-30 pb-0-xs">

								<div class="detail-titile">
									<div class="row">
										<div class="col-xs-12 col-sm-9">
											<h3 class="car-name">{{$Slug->tender_name}}</h3>

										</div>
										<div class="col-xs-12 col-sm-3 text-right text-left-xs">
											 <div class="price text-primary">	{{$Slug->tender_cost_value}} {{$Slug->tender_cost_currency}}</div>

										</div>
									</div>
								</div>

								<div class="row gap-5">

									<div class="col-sm-12 col-md-8">

										<div class="tab-style-1 detail-tab">
											<div class="tab-style-1-header clearfix">
													<a id="offerButton" class="btn btn-info pull-right pull-left-xss">Təklif ver</a>
											</div>

											<div id="myTabContent" class="tab-content">

												<div class="tab-pane fade in active" id="detailTab1">

													<div class="tab-content-inner">

														<div class="slick-gallery-slideshow">

															<div class="slider gallery-slideshow gallery-slideshow-not-tab slick-initialized slick-slider">
																<div aria-live="polite" class="slick-list draggable" tabindex="0"><div class="slick-track" style="opacity: 1; width: 6756px;"><div class="slick-slide slick-active" data-slick-index="0" aria-hidden="false" style="width: 563px; position: relative; left: 0px; top: 0px; z-index: 900; opacity: 1;">
                                  <div class="image"><img src="{{url('/uploads/images/'.$Slug->tender_image)}}" alt="image"></div></div>
                                  <div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 563px; position: relative; left: -563px; top: 0px; z-index: 800; opacity: 0;">
                                    <div class="image"><img src="images/detail-gallery/exterior/02-lg.jpg" alt="image"></div></div>
                                  <div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 563px; position: relative; left: -1126px; top: 0px; z-index: 800; opacity: 0;">
                                    <div class="image"><img src="images/detail-gallery/exterior/03-lg.jpg" alt="image"></div></div>
                                  <div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 563px; position: relative; left: -1689px; top: 0px; z-index: 800; opacity: 0;">
                                    <div class="image"><img src="images/detail-gallery/exterior/04-lg.jpg" alt="image"></div></div>
                                  <div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 563px; position: relative; left: -2252px; top: 0px; z-index: 800; opacity: 0;">
                                    <div class="image"><img src="images/detail-gallery/exterior/05-lg.jpg" alt="image"></div></div>
                                  <div class="slick-slide" data-slick-index="5" aria-hidden="true" style="width: 563px; position: relative; left: -2815px; top: 0px; z-index: 800; opacity: 0;">
                                    <div class="image"><img src="images/detail-gallery/exterior/06-lg.jpg" alt="image"></div></div>
                                  <div class="slick-slide" data-slick-index="6" aria-hidden="true" style="width: 563px; position: relative; left: -3378px; top: 0px; z-index: 800; opacity: 0;">
                                    <div class="image"><img src="images/detail-gallery/exterior/07-lg.jpg" alt="image"></div></div>
                                  <div class="slick-slide" data-slick-index="7" aria-hidden="true" style="width: 563px; position: relative; left: -3941px; top: 0px; z-index: 800; opacity: 0;">
                                    <div class="image"><img src="images/detail-gallery/exterior/08-lg.jpg" alt="image"></div></div>

                                    <div class="slick-slide" data-slick-index="11" aria-hidden="true" style="width: 563px; position: relative; left: -6193px; top: 0px; z-index: 800; opacity: 0;"><div class="image">
                                    <img src="images/detail-gallery/exterior/12-lg.jpg" alt="image"></div></div></div></div>


															<button type="button" data-role="none" class="slick-prev" aria-label="previous" style="display: block;">Previous</button><button type="button" data-role="none" class="slick-next" aria-label="next" style="display: block;">Next</button></div>

														</div>

													</div>

												</div>

												<div class="tab-pane fade" id="detailTab2">

													<div class="tab-content-inner">

														<div class="slick-gallery-slideshow">

															<div class="slider gallery-slideshow gallery-slideshow-tab-01">
																<div><div class="image"><img src="{{url('/uploads/images/'.$Slug->tender_image)}}" alt="{{$Slug->tender_name}}"></div></div>
															</div>


														</div>

													</div>

												</div>

											</div>

										</div>

									</div>

									<div class="col-sm-12 col-md-4">

										<div class="side-module specification-box">

											<h3>Göstəricilər</h3>

											<div class="inner">

												<ul class="specification-list">

													<li><span class="absolute">Tender Adı:</span> {{$Slug->tender_name}}</li>
													<li><span class="absolute">Address:</span> {{$Slug->tender_address}}</li>
													<li><span class="absolute">E-poçt:</span>{{$Slug->tender_mail}}</li>
													<li><span class="absolute">Mobil:</span>{{$Slug->tender_phone}}</li>

													<li><span class="absolute">Son Tarix </span>{{date("Y-m-d",strtotime($Slug->created_at))}}</li>
													<li><span class="absolute">Kateqoriya </span>{{$Slug->category->cat_name}}</li>
													<li><span class="absolute">Qiymət:</span>{{$Slug->tender_cost_value}} {{$Slug->tender_cost_currency}}</li>

												</ul>

											</div>

										</div>


									</div>

								</div>

								<div class="mb-30"></div>

								<h3 class="section-title">Tender haqqında ətraflı məlumat</h3>

								<h4>{{$Slug->tender_name}}</h4>

								<p>{{$Slug->tender_desc}}</p>


							</div>


							<div style="display:none" id="offerDiv" class="GridLex-col-12_sm-12_xs-12">

								<div class="contact-form-wrapper-boxed">

									<div class="section-title text-left mb-20">

										<h4>Təklif vermək</h4>

									</div>

									<form method="POST" action="{{ url('/teklif-ver') }}">
										{{ csrf_field() }}
										<div class="messages"></div>

										<div class="controls">

											<div class="row">

												<div class="col-xs-12 col-sm-12">
													<div class="form-group">
														<label for="form_name">Təklif olunan məbləğ ({{$Slug->tender_cost_currency}})<span class="font10 text-danger"></span></label>
														<input type="number" name="sum" class="form-control" placeholder="sadəcə rəqəm daxil edin *" required >
														<div class="help-block with-errors"></div>
													</div>
												</div>

												<div class="col-xs-12 col-sm-12">
													<div class="form-group">
														<label for="form_name">Çatdırılma tarixi <span class="font10 text-danger"></span></label>
														<input  type="date" name="date" class="form-control" required >
														<div class="help-block with-errors"></div>
													</div>
												</div>

												<div class="col-xs-12 col-sm-12">
													<div class="form-group">
														<label for="form_message">Təsvir <span class="font10 text-danger"></span></label>
														<textarea name="desc" class="form-control" placeholder="Daxil edin *" rows="8" required ></textarea>
													</div>
												</div>
												<input type="hidden" name="tender" value="{{$Slug->tender_id}}">
												<div class="col-xs-12 col-sm-12">
													<input type="submit" class="btn btn-primary btn-send mt-10" value="Göndər">
												</div>


											</div>

										</div>

									</form>

								</div>

							</div>

							<br/>
							<br/>
							<br/>
							@if($Slug->tender_created_by_id == auth()->user()->id)
							<div class="section-title text-left mb-20">
								<h4>Təkliflər</h4>
								<p>sadəcə siz görürsünüz.</p>
								@foreach($Slug->offers as $o)<br/>
								<b>Şirkət:</b> {{$o->user->company->c_name}}<br/>
								<b>Təklif:</b> {{$o->offer_cost}} {{$Slug->tender_cost_currency}}<br/>
								<b>Təsviri:</b> {{$o->offer_desc}}<br/>
								<b>Çatdırılma tarixi:</b> {{$o->offer_delivery_datatime}}<br/>
								@if($o->offer_winner == '0')<a href="/teklif-qebul/{{$Slug->tender_id}}/{{$o->offer_id}}">Təklifi qəbul et</a>@endif
								@endforeach
							</div>
							@endif
						</div>

						<div class="col-xs-12 col-sm-4 col-md-3">

							<aside class="sidebar-wrapper">

								<div class="row">

									<div class="col-xss-12 col-xs-6 col-sm-12 col-md-12 mb-30-xss">

										<div class="result-filter-wrapper">
											<h3>Make a New Search</h3>
											<div class="content">
												<form class="form-holder">
													<div class="holder-item mb-20">

														<div class="fancy-select"><select class="custom-select fancified" id="car-search-maker" style="width: 1px; height: 1px; display: block; position: absolute; top: 0px; left: 0px; opacity: 0;">
															<option value="0">Maker</option>
															<option value="1">Audi</option>
															<option value="2">BMW</option>
															<option value="2">Nissan</option>
															<option value="3">Toyota</option>
															<option value="4">Honda</option>
															<option value="5">Saab</option>
															<option value="6">Volvo</option>
															<option value="7">Mazda</option>
															<option value="8">Mini</option>
															<option value="9">Mercedes-Benz</option>
															<option value="10">Lotus</option>
															<option value="11">Fiat</option>
															<option value="12">Lexus</option>
															<option value="13">Subaru</option>
															<option value="14">Jaguar</option>
															<option value="15">Land Rover</option>
															<option value="16">Isuzu</option>
														</select><div class="form-control">Maker</div><ul class="options"><li data-raw-value="0" class="selected">Maker</li><li data-raw-value="1">Audi</li><li data-raw-value="2">BMW</li><li data-raw-value="2">Nissan</li><li data-raw-value="3">Toyota</li><li data-raw-value="4">Honda</li><li data-raw-value="5">Saab</li><li data-raw-value="6">Volvo</li><li data-raw-value="7">Mazda</li><li data-raw-value="8">Mini</li><li data-raw-value="9">Mercedes-Benz</li><li data-raw-value="10">Lotus</li><li data-raw-value="11">Fiat</li><li data-raw-value="12">Lexus</li><li data-raw-value="13">Subaru</li><li data-raw-value="14">Jaguar</li><li data-raw-value="15">Land Rover</li><li data-raw-value="16">Isuzu</li></ul></div>

													</div>
													<div class="holder-item mb-20">

														<div class="fancy-select"><select class="custom-select fancified" id="car-search-model" style="width: 1px; height: 1px; display: block; position: absolute; top: 0px; left: 0px; opacity: 0;">
															<option value="0">Model</option>
															<option value="1">Series 1</option>
															<option value="2">Series 2</option>
															<option value="2">Series 3</option>
															<option value="3">Series 4</option>
															<option value="4">Series 5</option>
															<option value="5">Series 6</option>
															<option value="6">Series 7</option>
															<option value="7">X 1</option>
															<option value="8">X 3</option>
															<option value="9">X 5</option>
															<option value="10">Z 4</option>
														</select><div class="form-control">Model</div><ul class="options"><li data-raw-value="0" class="selected">Model</li><li data-raw-value="1">Series 1</li><li data-raw-value="2">Series 2</li><li data-raw-value="2">Series 3</li><li data-raw-value="3">Series 4</li><li data-raw-value="4">Series 5</li><li data-raw-value="5">Series 6</li><li data-raw-value="6">Series 7</li><li data-raw-value="7">X 1</li><li data-raw-value="8">X 3</li><li data-raw-value="9">X 5</li><li data-raw-value="10">Z 4</li></ul></div>

													</div>
													<div class="holder-item mb-20">

														<div class="fancy-select"><select class="custom-select fancified" id="car-search-year" style="width: 1px; height: 1px; display: block; position: absolute; top: 0px; left: 0px; opacity: 0;">
															<option value="0">Year</option>
															<option value="1">2000</option>
															<option value="2">2001</option>
															<option value="2">2002</option>
															<option value="3">2003</option>
															<option value="4">2004</option>
															<option value="5">2005</option>
															<option value="6">2006</option>
															<option value="7">2007</option>
															<option value="8">2008</option>
															<option value="9">2009</option>
															<option value="10">2010</option>
														</select><div class="form-control">Year</div><ul class="options"><li data-raw-value="0" class="selected">Year</li><li data-raw-value="1">2000</li><li data-raw-value="2">2001</li><li data-raw-value="2">2002</li><li data-raw-value="3">2003</li><li data-raw-value="4">2004</li><li data-raw-value="5">2005</li><li data-raw-value="6">2006</li><li data-raw-value="7">2007</li><li data-raw-value="8">2008</li><li data-raw-value="9">2009</li><li data-raw-value="10">2010</li></ul></div>

													</div>
													<div class="holder-item mb-20">

														<div class="fancy-select"><select class="custom-select fancified" id="car-search-price" style="width: 1px; height: 1px; display: block; position: absolute; top: 0px; left: 0px; opacity: 0;">
															<option value="0">Price</option>
															<option value="1">Less than 30k</option>
															<option value="2">31k-50k</option>
															<option value="3">51k-70k</option>
															<option value="4">71k-90k</option>
															<option value="5">Greater Than 90k</option>
														</select><div class="form-control">Price</div><ul class="options"><li data-raw-value="0" class="selected">Price</li><li data-raw-value="1">Less than 30k</li><li data-raw-value="2">31k-50k</li><li data-raw-value="3">51k-70k</li><li data-raw-value="4">71k-90k</li><li data-raw-value="5">Greater Than 90k</li></ul></div>

													</div>
													<div class="holder-item">

														<a href="#" class="btn btn-block">Search</a>

													</div>

												</form>
											</div>
										</div>

									</div>



								</div>

							</aside>

						</div>

					</div>



							</div>

						</div>

					</div>

					<div class="mb-70"></div>

				</div>

			</div>
<script type="text/javascript">
$('#offerButton').click(function() {
  $("#offerDiv").show(300);
	$("input[name='sum']").focus();
});
</script>
@endsection
