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

													<a data-toggle="modal" href="#enquiryModal" class="btn btn-info pull-right pull-left-xss">Təklif ver</a>
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
													<li><span class="absolute">Əlavə Edən:</span>@if($Slug->person)

														{{$Slug->person->u_name}}

														@else

														{{$Slug->company->c_name}}

																@endif
															</li>
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

						</div>

						<div class="col-xs-12 col-sm-4 col-md-3">

							<aside class="sidebar-wrapper">

								<div class="row">

									<div class="col-xss-12 col-xs-6 col-sm-12 col-md-12 mb-30-xss">

										<div class="result-filter-wrapper">
											<h3>AXTARIŞ</h3>
											<div class="content">
												<form class="form-holder" method="GET" action="/search">

									        <div class="holder-item mb-20">

									          <select name="searchBy" class="custom-select" id="car-search-maker">
									            <option value="0">Kateqoriya</option>
									            @foreach($tenderCATE as $tenS)
									            <option value="{{$tenS->cat_id}}">{{$tenS->cat_name}}  </option>
									                @foreach($tenS->children as $ten)
									              <option value="{{$ten->cat_id}}">-{{$ten->cat_name}}</option>
									              @foreach($ten->children as $te)
									                <option value="{{$te->cat_id}}">--{{$te->cat_name}}</option>
									                    @endforeach
									                    @endforeach

									            @endforeach

									          </select>

									        </div>

									  <div class="holder-item mb-20" >
									        <input type="number" class="form-control" name="min" placeholder="Minumum Qiymət" value="">

									</div>

									<div class="holder-item mb-20" >
												<input type="number" class="form-control" name="maks" placeholder="Maksimum Qiymət" value="">

								</div>
									        <div class="holder-item mb-20">
									          <select name="valyutaSlug" class="custom-select" id="car-search-year">

									            <option value="azn">AZN</option>
									            <option value="dollar">DOLLAR</option>

									          </select>

									        </div>
									        <div class="holder-item mb-20">

									        <input type="date" data-date-format="YYYY MMMM DD"  class="form-control" name="vaxt" placeholder="" value="">

									        </div>

									        <script type="text/javascript">
									        $("#dateYnei").on("change", function() {
									            this.setAttribute(
									                "data-date",
									                moment(this.value, "DD-MM-YYYY")
									                .format( this.getAttribute("data-date-format") )
									            )
									          }).trigger("change")
									        </script>
									        <div class="holder-item mb-20">

									          <button type="submit" href="#" class="btn btn-block" style="color: black;">AXTAR</button>

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

@endsection
