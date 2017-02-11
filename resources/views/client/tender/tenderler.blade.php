@section('title', 'Yeni tender yarat')
@extends('client.layouts.client')


@section('content')

<<div class="container-outer">

				<div class="container">

					<div class="row gap-25-sm">

						<div class="col-sm-8 col-md-9">

							<div class="content-wrapper">

								<div class="result-sorting-wrapper mb-30">
									<div class="row">
										<div class="col-sm-12 col-md-5">
											<div class="text-holder">
												Tenderlər
											</div>
										</div>
										<div class="col-sm-12 col-md-7">


										</div>
									</div>
								</div>

								<div class="car-item-list-wrapper">

                  @foreach($tenderAktiv as $tndr)


									<div class="car-item-list">
										<div class="image">
											<img class="img-responsive" src="{{url('/uploads/images/'.$tndr->tender_image)}}" alt="Car">
										</div>
										<div class="content">
											<h5>{{$tndr->tender_name}}</h5>
											<p class="short-info">{{substr($tndr->tender_desc,0,20)}}.....</p>
											<div class="row">
												<div class="col-xss-12 col-xs-7 col-sm-7 col-md-7">
													<span class="price">{{$tndr->tender_cost_value}} {{$tndr->tender_cost_currency}}</span>
												</div>
												<div class="col-xss-12 col-xs-5 col-sm-5 col-md-5">
													<a href="/tenderler/{{$tndr->tender_id}}/{{$tndr->tender_name}}" class="btn btn-primary">Ətraflı</a>
												</div>
											</div>
										</div>

										<ul class="car-meta clearfix">
											<li data-toggle="tooltip" data-placement="top" title="" data-original-title="Tarix">
												<i class="fa fa-calendar"></i> {{date("Y-m-d",strtotime($tndr->created_at))}}
											</li>

											<li data-toggle="tooltip" data-placement="top" title="" data-original-title="Kateqoriya">
												<i class="fa fa-cogs"></i> {{$tndr->category->cat_name}}
											</li>

										</ul>

									</div>


                  @endforeach

								</div>

								<div class="paging-wrapper clearfix">

									<div class="paging-wrapper clearfix">
							    <nav class="pull-right">
							      {{ $tenderAktiv->links('client.Blog.paginate') }}
							    </nav>
							  </div>
								</div>

							</div>

						</div>

						<div class="col-sm-4 col-md-3">



						</div>

					</div>

				</div>

			</div>

@endsection
