@extends('client.layouts.client')
@section('content')
<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">

			<div class="breadcrumb-wrapper">

				<div class="container">

					<div class="row">

						<div class="col-xs-12 col-sm-6 hidden-xs">
							<h2 class="page-title">Xəbərlər</h2>
							@if( !empty($keyword))
									<i>Axtarış nəticəsi üçün açar söz: <b>{{$keyword}}</b></i>
							@endif
						</div>

						<div class="col-xs-12 col-sm-6">
							<ol class="breadcrumb">
								<li class="active text">Burdasınız:</li>
								<li><a href="{{url('/')}}">Giriş</a></li>
								<li class="active">Xəbərlər</li>
							</ol>
						</div>

					</div>

				</div>

			</div>

			<div class="container-outer">

				<div class="container">

					<div class="row gap-25-sm">

						<div class="col-sm-8 col-md-9">

							  @yield('blog')

						</div>

						<div class="col-sm-4 col-md-3">

							<aside class="sidebar-wrapper">

								<div class="quick-search clearfix">
									<form class="search-form" action="{{url('/xeber/axtar	')}}" method="get">
										<input type="text" name="key" value="{{ $keyword or '' }}" class="form-control mb-0" placeholder="Axtar...">
										<button class="btn"><i class="fa fa-search"></i></button>
									</form>
								</div>

								<div class="side-module-2 mt-30">

									<h3>Kateqoriyalar</h3>

									<ul class="sidebar-cat clearfix mb-30 mmt">
										@foreach($cat as $children)
										<li class=""><a href="{{ url('/xeberler/kateqoriya/'.$children->cat_id.'/'.$children->cat_slug) }}">{{ $children->cat_name }}</a></li>
										@endforeach
									</ul>

								</div>


							</aside>

						</div>

					</div>

				</div>

			</div>

		</div>
		  @endsection
