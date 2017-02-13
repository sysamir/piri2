@section('title', 'Yeni tender yarat')
@extends('client.layouts.client')


@section('content')


<div class="main-search-wrapper">

  <div class="container">

    <div class="text-holder">
      <div class="icon hexagon">
        <i class="fa fa-search"></i>
      </div>
      <div class="text-content">
        <span class="uppercase">Tender</span>
        Axtar
      </div>
    </div>

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

<div class="holder-item mb-20" style="width:14%;">
      <input type="number" class="form-control" name="qiymet" placeholder="Qiymət" value="">

</div>
      <div class="holder-item mb-20" style="width:12%;">
        <select name="valyuta" class="custom-select" id="car-search-year">

          <option value="azn">AZN</option>
          <option value="dollar">DOLLAR</option>

        </select>

      </div>
      <div class="holder-item mb-20">

      <input type="date"   class="form-control" name="vaxt" placeholder="" value="">

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

<div class="bg-light section">
				<div class="container">

					<div class="row">
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
							<div class="section-title text-center">
								<h2>AXTARIŞ NƏTİCƏLƏRİ</h2>
								<p></p>
							</div>
						</div>
					</div>
          @if(isset($cat))
					<div class="car-item-wrapper">

            @foreach($cat as $c)

						<div class="GridLex-gap-30">

							<div class="GridLex-grid-noGutter-equalHeight GridLex-grid-center">

								<div class="GridLex-col-3_sm-6_xs-6_xss-12">

									<div class="car-item">

										<a href="/tenderler/{{$c->tender_id}}/{{$c->tender_name}}">
											<div class="image">
												<img src="{{url('/uploads/images/'.$c->tender_image)}}" alt="Car">
											</div>
											<div class="content">
												<h5>{{$c->tender_name}}</h5>
												<h6>{{substr($c->tender_desc,0,20)}}.....</h6>
												<p class="price">{{$c->tender_cost_value}} {{$c->tender_cost_currency}}</p>
											</div>
											<div class="bottom">
												<ul class="car-meta clearfix">
													<li>
														<i class="fa fa-cogs"></i> {{$c->category->cat_name}}
													</li>
													<li>
														<i class="fa fa-tachometer"></i> {{date("Y-m-d",strtotime($c->created_at))}}
													</li>
												</ul>
											</div>
										</a>

									</div>

								</div>


							</div>

						</div>

            @endforeach

					</div>

          @else
          <h1>Nəticə Tapılmadı</h1>
          @endif

				</div>

			</div>


@endsection
