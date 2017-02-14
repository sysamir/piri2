@extends('client.layouts.client')


@section('content')


<!-- start Main Wrapper -->
<div class="main-wrapper scrollspy-container">

  <!-- start hero-header -->
  <div class="hero" style="background-image:url('images/hero-header/03.jpg');">

    <div class="container">

      <div class="row">

        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

          <!-- Hero heading -->
          <h1 class="animated fadeInUp">GoTender</h1>

          <!-- Hero subheading -->
          <p class="animated fadeInUp delay_1">Biz necə işləyirik ?</p>

          <div class="text-center text-left-xs mt-30">
            <a href="#" class="animated fadeInUp delay_2 btn btn-primary btn-lg">Daha Ətraflı</a>
          </div>

        </div>

      </div>

    </div>

  </div>

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
            <h2>Yeni Tenderlər</h2>

          </div>
        </div>
      </div>




      <div class="car-item-wrapper">
        <div class="GridLex-gap-30">

          <div class="GridLex-grid-noGutter-equalHeight GridLex-grid-center">
  @foreach($tenderindex as $c)
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
@endforeach

          </div>

        </div>
      </div>




      <div class="text-center mt-70">
        <a href="/tenderler" class="btn btn-primary btn-lg">Daha Çox</a>
      </div>

    </div>

  </div>



  <div style="background:white!important;" class="bg-light section">
    <div class="container">

      <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
          <div class="section-title text-center mb-80">
            <h2>Sonuncu Xəbərlər</h2>
          </div>
        </div>
      </div>

      <div class="recent-post-wrapper">

        <div class="GridLex-gap-30">

          <div class="GridLex-grid-noGutter-equalHeight GridLex-grid-center">

            @foreach($blog as $children)
            <div class="GridLex-col-4_sm-4_xs-12_xss-12">
              <div class="recent-post-item">
                <div class="image">
                  <img src="{{url('/uploads/images/'.$children->blog_cover_picture)}}" alt="Recent Post" />
                </div>
                <div class="content">
                  <div class="date">{{ $children->created_at->diffForHumans() }}</div>
                  <h5><a href="{{url('/xeber/'.$children->blog_id.'/'.$children->blog_slug)}}">{{ $children->blog_title }}</a></h5>
                  <p>{{ substr($children->blog_descp,0,250) }}...</p>
                </div>
                <div class="bottom">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 meta">
                      Kateqoriya: {{ $children->blogcat->cat_name }}
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 mt-15-sm">
                      <a href="{{url('/xeber/'.$children->blog_id.'/'.$children->blog_slug)}}" class="read-more">Ardın oxu <i class="ti-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

@endsection
