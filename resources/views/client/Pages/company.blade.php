@section('title', 'Şirkər hesabı')
@extends('client.layouts.client')


@section('content')

  <!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">

			<div class="breadcrumb-wrapper">

				<div class="container">

					<div class="row">

						<div class="col-xs-12 col-sm-6 hidden-xs">
							<h2 class="page-title">{{$company->c_name}} - Şirkət Məlumatları</h2>
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

										<div class="col-md-3">
											<h4>Şirkət</h4>
											<b>{{$company->c_name}}</b>
											<img class="img-responsive" style="max-height: 150px" src="/uploads/images/{{$company->c_logo_image}}" alt="{{$company->c_name}}" title="{{$company->c_name}}" />
										</div>

										<div class="col-md-5">
											<h4>Təsviri</h4>
											{!! $company->c_desc !!}
										</div>

										<div class="col-md-4">
											<h4>Fəaliyyət sahələri</h4>
											@foreach($company->categories as $c)
											{{$c->cat_name}}<br/>
											@endforeach
										</div>

									</div>

							</div>



						</div>

					</div>

				</div>

			</div>

		</div>
@endsection
