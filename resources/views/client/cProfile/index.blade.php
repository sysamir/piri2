@section('title', 'Şirkər hesabı')
@extends('client.layouts.client')


@section('content')

  <!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">

			<div class="breadcrumb-wrapper">

				<div class="container">

					<div class="row">

						<div class="col-xs-12 col-sm-6 hidden-xs">
							<h2 class="page-title">Şirkət Məlumatları
							  @if($cProfile->company->c_confirmed == 0) (Yoxlanışdadır) @endif
              </h2>
							<p>
								<a href="{{url('/profile-edit')}}">Redaktə et</a>
							</p>
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

                    <div class="GridLex-col-3_sm-4_xs-12">

                      <div class="contact-item mb-30">
                        <h5>istifadəçi</h5>
                        <p>adı: {{ $cProfile->name }}
                        </br>login: {{ $cProfile->email }}</p>
                      </div>

                    </div>



										<div class="GridLex-col-3_sm-3_xs-12">

											<div class="contact-item mb-30">
												<h5>Şirkət</h5>
												<p>{{ $cProfile->company->c_name }}
                        </br>VÖEN: {{ $cProfile->company->c_voen }}</p>
											</div>

										</div>

										<div class="GridLex-col-3_sm-3_xs-12">

											<div class="contact-item mb-30">
												<h5>Əlaqə</h5>
                        <p>telefon: {{ $cProfile->company->c_number }}
                        </br>e-poçt: {{ $cProfile->company->c_official_mail }}</p>
											</div>

										</div>

										<div class="GridLex-col-3_sm-4_xs-12">

                      <div class="contact-item mb-30">
												<h5>Loqo</h5>
                        <img style="max-height: 100px" src="/uploads/images/{{ $cProfile->company->c_logo_image }}" alt="loqo" />
											</div>

										</div>

										<div class="GridLex-col-12_sm-12_xs-12 mb-30">
											{{ $cProfile->company->c_desc}}
										</div>

										<div class="GridLex-col-12_sm-12_xs-12 mb-30">
											<div class="car-item-wrapper">
											<div class="GridLex-gap-30">

												<div class="GridLex-grid-noGutter-equalHeight GridLex-grid-center">

													@foreach($cProfile->tender as $t)
													<div class="GridLex-col-3_sm-6_xs-6_xss-12">

														<div class="car-item">

															<a href="/tenderler/{{$t->tender_id}}/{{$t->tender_name}}">
																<div class="image">
																	<img src="{{url('/uploads/images/'.$t->tender_image)}}" alt="Car">
																</div>
																<div class="content">
																	<h5>{{$t->tender_name}}</h5>
																	<p class="price">{{$t->tender_cost_value}} {{$t->tender_cost_currency}}</p>
																</div>
																<div class="bottom">
																	<ul class="car-meta clearfix">
																		<li>
																			<i class="fa fa-list"></i> {{$t->category->cat_name}}
																		</li>
																		<li>
																			<i class="fa fa-tachometer"></i> {{$t->tender_status == '1' ? 'Aktiv' : 'Yoxlamada'}}
																		</li>
																	</ul>
																</div>
															</a>

														</div>

													</div>
													@endforeach

												</div>

											</div>

										</div>
										</div>

									</div>

								</div>

							</div>



						</div>

					</div>

				</div>

			</div>

		</div>
@endsection
