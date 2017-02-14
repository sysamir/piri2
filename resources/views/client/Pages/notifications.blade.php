@section('title', 'Bildirişlər')
@extends('client.layouts.client')


@section('content')

  <!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">

			<div class="breadcrumb-wrapper">

				<div class="container">

					<div class="row">

						<div class="col-xs-12 col-sm-6 hidden-xs">
							<h2 class="page-title">Bildirişlər</h2>
              <a href="/bildirishler-oxundu">Bildirişlər oxundu et</a>
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
                    <ul class="list-with-icon">
                    @if(count($notifications)>0)
                    @foreach($notifications as $n)
                      @include('notifications.' . snake_case(class_basename($n->type)))
                    @endforeach
                    @else
                      <h4>Bildiriş tapılmadı.</h4>
                    @endif
                    </ul>

									</div>

							</div>



						</div>

					</div>

				</div>

			</div>

		</div>
@endsection
