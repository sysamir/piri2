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
                        <img src="{{ $cProfile->company->c_logo_image }}" alt="loqo" />
											</div>

										</div>

										<div class="GridLex-col-12_sm-12_xs-12 mb-30">
											{{ $cProfile->company->c_desc}}
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
