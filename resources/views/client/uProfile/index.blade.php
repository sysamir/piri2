@extends('client.layouts.client')


@section('content')

  <!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">

			<div class="breadcrumb-wrapper">

				<div class="container">

					<div class="row">

						<div class="col-xs-12 col-sm-6 hidden-xs">
							<h2 class="page-title">İstifadəçi Məlumatları

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
                        <p>Ad/Soyad: {{$uProfile->person->u_name}}
												<br/>Cinsi: @if($uProfile->person->u_gender == 1) Kişi @elseif($uProfile->person->u_gender == 2) Qadın @endif
												<br/>Təvəllüd: {{$uProfile->person->u_birth}}

											</p>
                      </div>

                    </div>



										<div class="GridLex-col-3_sm-3_xs-12">

											<div class="contact-item mb-30">
												<h5>Əlaqə vasitələri</h5>
												<p>Email: {{$uProfile->email}}
                        </br>Telefon: {{$uProfile->person->u_phone}}</p>
											</div>

										</div>




										<div class="GridLex-col-12_sm-12_xs-12 mb-30">

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
