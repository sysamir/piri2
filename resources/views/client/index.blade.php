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
          <h1 class="animated fadeInUp">Welcome to Taladrod</h1>

          <!-- Hero subheading -->
          <p class="animated fadeInUp delay_1">Buy your new car or used car. We have more than a thousand cars for you to choose. The buying process here is so easy to be done.</p>

          <div class="text-center text-left-xs mt-30">
            <a href="#" class="animated fadeInUp delay_2 btn btn-primary btn-lg">Learn More</a>
          </div>

        </div>

      </div>

    </div>

  </div>

  <div class="main-search-wrapper">

    <div class="container">

      <div class="text-holder">
        <div class="icon hexagon">
          <i class="fa fa-car"></i>
        </div>
        <div class="text-content">
          <span class="uppercase">Looking for Vehicle</span>
          Find your best vehicle is easy
        </div>
      </div>

      <form class="form-holder">

        <div class="holder-item mb-20">

          <select class="custom-select" id="car-search-maker">
            <option value="0">Maker</option>
            <option value="1">Audi</option>
            <option value="2">BMW</option>
            <option value="2">Nissan</option>
            <option value="3">Toyota</option>
            <option value="4">Honda</option>
            <option value="5">Saab</option>
            <option value="6">Volvo</option>
            <option value="7">Mazda</option>
            <option value="8">Mini</option>
            <option value="9">Mercedes-Benz</option>
            <option value="10">Lotus</option>
            <option value="11">Fiat</option>
            <option value="12">Lexus</option>
            <option value="13">Subaru</option>
            <option value="14">Jaguar</option>
            <option value="15">Land Rover</option>
            <option value="16">Isuzu</option>
          </select>

        </div>
        <div class="holder-item mb-20">

          <select class="custom-select" id="car-search-model">
            <option value="0">Model</option>
            <option value="1">Series 1</option>
            <option value="2">Series 2</option>
            <option value="2">Series 3</option>
            <option value="3">Series 4</option>
            <option value="4">Series 5</option>
            <option value="5">Series 6</option>
            <option value="6">Series 7</option>
            <option value="7">X 1</option>
            <option value="8">X 3</option>
            <option value="9">X 5</option>
            <option value="10">Z 4</option>
          </select>

        </div>
        <div class="holder-item mb-20">

          <select class="custom-select" id="car-search-year">
            <option value="0">Year</option>
            <option value="1">2000</option>
            <option value="2">2001</option>
            <option value="2">2002</option>
            <option value="3">2003</option>
            <option value="4">2004</option>
            <option value="5">2005</option>
            <option value="6">2006</option>
            <option value="7">2007</option>
            <option value="8">2008</option>
            <option value="9">2009</option>
            <option value="10">2010</option>
          </select>

        </div>
        <div class="holder-item mb-20">

          <select class="custom-select" id="car-search-price">
            <option value="0">Price</option>
            <option value="1">Less than 30k</option>
            <option value="2">31k-50k</option>
            <option value="3">51k-70k</option>
            <option value="4">71k-90k</option>
            <option value="5">Greater Than 90k</option>
          </select>

        </div>
        <div class="holder-item mb-20">

          <a href="#" class="btn btn-block">Search</a>

        </div>

      </form>

    </div>

  </div>

  <div class="section welcome-wrapper">

    <div class="container">

      <div class="row">

        <div class="col-sm-12 col-md-8">
          <div class="section-title-2">
            <h2>Welcome to Taladrod</h2>
          </div>

          <p>Resembled at perpetual no believing is otherwise sportsman. Is do he dispatched cultivated travelling astonished. Melancholy am considered possession on collecting everything. Doubtful on an juvenile as of servants insisted. Judge why maids led sir whose guest drift her point.</p>

          <div class="featured-item-wrapper mt-30">

            <div class="GridLex-gap-30">

              <div class="GridLex-grid-noGutter-equalHeight">

                <div class="GridLex-col-6_sm-6_xs-12_xss-12">

                  <div class="featured-item">

                    <div class="icon">
                      <i class="fa fa-thumbs-up"></i>
                    </div>

                    <div class="content">
                      <h5>Trusted By Thousands</h5>
                      <p>Do in laughter securing smallest sensible no mr hastened.</p>
                    </div>

                  </div>

                </div>

                <div class="GridLex-col-6_sm-6_xs-12_xss-12">

                  <div class="featured-item">

                    <div class="icon">
                      <i class="fa fa-pie-chart"></i>
                    </div>

                    <div class="content">
                      <h5>Wide Range Of Vehicles</h5>
                      <p>As perhaps proceed in in brandon of limited unknown greatly.</p>
                    </div>

                  </div>

                </div>

                <div class="GridLex-col-6_sm-6_xs-12_xss-12">

                  <div class="featured-item">

                    <div class="icon">
                      <i class="fa fa-balance-scale"></i>
                    </div>

                    <div class="content">
                      <h5>Professional Dealers</h5>
                      <p>Distrusts fulfilled happiness unwilling as explained of difficult.</p>
                    </div>

                  </div>

                </div>

                <div class="GridLex-col-6_sm-6_xs-12_xss-12">

                  <div class="featured-item">

                    <div class="icon">
                      <i class="fa fa-money"></i>
                    </div>

                    <div class="content">
                      <h5>Faster Buy &amp; Sell</h5>
                      <p>No landlord of peculiar ladyship attended if contempt ecstatic.</p>
                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

      <div class="welcome-image-bg" style="background-image:url('images/welcome/02.jpg');"></div>

    </div>
  </div>

  <div class="bg-light section">
    <div class="container">

      <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
          <div class="section-title text-center">
            <h2>Recently Added Cars</h2>
            <p>One sportsman tolerably him extensive put she immediate.</p>
          </div>
        </div>
      </div>

      <div class="car-item-wrapper">

        <div class="GridLex-gap-30">

          <div class="GridLex-grid-noGutter-equalHeight GridLex-grid-center">

            <div class="GridLex-col-3_sm-6_xs-6_xss-12">

              <div class="car-item">

                <a href="#">
                  <div class="image">
                    <img src="images/car/11.jpg" alt="Car" />
                  </div>
                  <div class="content">
                    <h5>Mercedes-Benz</h5>
                    <h6>E250 CDI Coupe</h6>
                    <p class="price">$109,535</p>
                  </div>
                  <div class="bottom">
                    <ul class="car-meta clearfix">
                      <li>
                        <i class="fa fa-cogs"></i> Diesel
                      </li>
                      <li>
                        <i class="fa fa-tachometer"></i> 2,500cc.
                      </li>
                    </ul>
                  </div>
                </a>

              </div>

            </div>

            <div class="GridLex-col-3_sm-6_xs-6_xss-12">

              <div class="car-item">

                <a href="#">
                  <div class="image">
                    <img src="images/car/02.jpg" alt="Car" />
                  </div>
                  <div class="content">
                    <h5>SEAT</h5>
                    <h6>Leon Cupra</h6>
                    <p class="price">32,887$</p>
                  </div>
                  <div class="bottom">
                    <ul class="car-meta clearfix">
                      <li>
                        <i class="fa fa-cogs"></i> Gasoline
                      </li>
                      <li>
                        <i class="fa fa-tachometer"></i> 2,000cc.
                      </li>
                    </ul>
                  </div>
                </a>

              </div>

            </div>

            <div class="GridLex-col-3_sm-6_xs-6_xss-12">

              <div class="car-item">

                <a href="#">
                  <div class="image">
                    <img src="images/car/03.jpg" alt="Car" />
                  </div>
                  <div class="content">
                    <h5>Porsche</h5>
                    <h6>Cayenne Turbo S</h6>
                    <p class="price">325,475$</p>
                  </div>
                  <div class="bottom">
                    <ul class="car-meta clearfix">
                      <li>
                        <i class="fa fa-cogs"></i> Gasoline
                      </li>
                      <li>
                        <i class="fa fa-tachometer"></i> 2,000cc.
                      </li>
                    </ul>
                  </div>
                </a>

              </div>

            </div>

            <div class="GridLex-col-3_sm-6_xs-6_xss-12">

              <div class="car-item">

                <a href="#">
                  <div class="image">
                    <img src="images/car/04.jpg" alt="Car" />
                  </div>
                  <div class="content">
                    <h5>Ford</h5>
                    <h6>Kuga</h6>
                    <p class="price">$40,475</p>
                  </div>
                  <div class="bottom">
                    <ul class="car-meta clearfix">
                      <li>
                        <i class="fa fa-cogs"></i> Diesel
                      </li>
                      <li>
                        <i class="fa fa-tachometer"></i> 3,000cc.
                      </li>
                    </ul>
                  </div>
                </a>

              </div>

            </div>

          </div>

        </div>

      </div>

      <div class="text-center mt-70">
        <a href="#" class="btn btn-primary btn-lg">Browse More Cars</a>
      </div>

    </div>

  </div>

  <div class="section">
    <div class="container">

      <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
          <div class="section-title text-center">
            <div class="section-title">
              <h2>Browser By Brands</h2>
              <p>Continuing interested ten stimulated prosperous frequently.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="brand-item-wrapper row gap-0">

        <div class="col-xss-4 col-xs-3 col-sm-2 mb-30">
          <a href="#">
            <img src="images/car-brand/01.png" alt="Car Brand" />
          </a>
        </div>

        <div class="col-xss-4 col-xs-3 col-sm-2 mb-30">
          <a href="#">
            <img src="images/car-brand/02.png" alt="Car Brand" />
          </a>
        </div>

        <div class="col-xss-4 col-xs-3 col-sm-2 mb-30">
          <a href="#">
            <img src="images/car-brand/03.png" alt="Car Brand" />
          </a>
        </div>

        <div class="col-xss-4 col-xs-3 col-sm-2 mb-30">
          <a href="#">
            <img src="images/car-brand/04.png" alt="Car Brand" />
          </a>
        </div>

        <div class="col-xss-4 col-xs-3 col-sm-2 mb-30">
          <a href="#">
            <img src="images/car-brand/05.png" alt="Car Brand" />
          </a>
        </div>

        <div class="col-xss-4 col-xs-3 col-sm-2 mb-30">
          <a href="#">
            <img src="images/car-brand/06.png" alt="Car Brand" />
          </a>
        </div>

        <div class="col-xss-4 col-xs-3 col-sm-2 mb-30">
          <a href="#">
            <img src="images/car-brand/07.png" alt="Car Brand" />
          </a>
        </div>

        <div class="col-xss-4 col-xs-3 col-sm-2 mb-30">
          <a href="#">
            <img src="images/car-brand/08.png" alt="Car Brand" />
          </a>
        </div>

        <div class="col-xss-4 col-xs-3 col-sm-2 mb-30">
          <a href="#">
            <img src="images/car-brand/09.png" alt="Car Brand" />
          </a>
        </div>

        <div class="col-xss-4 col-xs-3 col-sm-2 mb-30">
          <a href="#">
            <img src="images/car-brand/10.png" alt="Car Brand" />
          </a>
        </div>

        <div class="col-xss-4 col-xs-3 col-sm-2 mb-30">
          <a href="#">
            <img src="images/car-brand/11.png" alt="Car Brand" />
          </a>
        </div>

        <div class="col-xss-4 col-xs-3 col-sm-2 mb-30">
          <a href="#">
            <img src="images/car-brand/12.png" alt="Car Brand" />
          </a>
        </div>

      </div>

      <div class="text-center mt-40">
        <a href="#" class="btn btn-primary btn-lg">Browse More Brands</a>
      </div>


    </div>
  </div>

  <div class="bg-light section">

    <div class="container mb-5">

      <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
          <div class="section-title text-center">
            <h2>Our Services</h2>
            <p>Hold long he open knew occasional boisterous as solicitude to introduced.</p>
          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-sm-12 col-md-4 mb-30-sm">

          <div class="featured-header-most-top">

            <h5><span class="bg-light">First Car Advice</span></h5>
            <div class="icon"><i class="fa fa-commenting"></i></div>
            <p>Unpleasant astonished an diminution up partiality. Noisy an their of meant bachelor improved. Studied however out fortune windows.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>

        </div>

        <div class="col-sm-12 col-md-4 mb-30-sm">

          <div class="featured-header-most-top">

            <h5><span class="bg-light">Car Finace &amp; Load</span></h5>
            <div class="icon"><i class="fa fa-credit-card"></i></div>
            <p>Death means up civil do an offer wound of. Called square an in afraid direct. Him son disposed produced humoured overcame she.</p>
            <a href="#" class="btn btn-primary">Build</a>
          </div>

        </div>

        <div class="col-sm-12 col-md-4">

          <div class="featured-header-most-top">

            <h5><span class="bg-light">Car Insurance</span></h5>
            <div class="icon"><i class="fa fa-heartbeat"></i></div>
            <p>Resolution diminution conviction so mr at unpleasing simplicity no. No it as breakfast up conveying earnestly immediate principle.</p>
            <a href="#" class="btn btn-primary">Get Your Car</a>
          </div>

        </div>

      </div>

    </div>

  </div>

  <div class="section">
    <div class="container">

      <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
          <div class="section-title-2 text-center">
            <h2>WHAT PEOPLE SAY ABOUT US</h2>
            <p><i class="fa fa-quote-left"></i></p>
          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

          <div class="slick-gallery-slideshow slick-testimonial-wrapper mmt">

            <div class="slider gallery-slideshow slick-testimonial">

              <div class="slick-item">

                <div class="testimonial-long">

                  <p class="saying">
                    If we landlord stanhill mr whatever pleasure supplied concerns so. Exquisite by it admitting cordially september newspaper an. Acceptance middletons am it favourable. It it oh happen lovers afraid.
                  </p>

                  <h5>Frank Abagnale</h5>
                  <p class="he">New York, USA</p>

                </div>

              </div>

              <div class="slick-item">

                <div class="testimonial-long">

                  <p class="saying">
                    Sympathize did now preference unpleasing mrs few. Mrs for hour game room want are fond dare. For detract charmed add talking age.
                  </p>

                  <h5>Charles Ponzi</h5>
                  <p class="he">Rome, Italy</p>

                </div>

              </div>

              <div class="slick-item">

                <div class="testimonial-long">

                  <p class="saying">
                    Who connection imprudence middletons too but increasing celebrated principles joy. Herself too improve gay winding ask expense are compact.
                  </p>

                  <h5>Joseph Weil</h5>
                  <p class="he">Berlin, German</p>

                </div>

              </div>

              <div class="slick-item">

                <div class="testimonial-long">

                  <p class="saying">
                    Dashwood contempt on mr unlocked resolved provided of of. Stanhill wondered it it welcomed oh. Hundred no prudent he however smiling at an offence.
                  </p>

                  <h5>Victor Lustig</h5>
                  <p class="he">Paris, France</p>

                </div>

              </div>

              <div class="slick-item">

                <div class="testimonial-long">

                  <p class="saying">
                    Preference imprudence contrasted to remarkably in on. Taken now you him trees tears any. Her object giving end sister except oppose.
                  </p>

                  <h5>George Parker</h5>
                  <p class="he">New York, USA</p>

                </div>

              </div>

              <div class="slick-item">

                <div class="testimonial-long">

                  <p class="saying">
                    Simplicity end themselves increasing led day sympathize yet. General windows effects not are drawing man garrets. Common indeed garden you his ladies out yet.
                  </p>

                  <h5>Soapy Smith</h5>
                  <p class="he">Alaska, USA</p>

                </div>

              </div>

              <div class="slick-item">

                <div class="testimonial-long">

                  <p class="saying">
                    Ladyship it daughter securing procured or am moreover mr. Put sir she exercise vicinity cheerful wondered. Continual say suspicion provision you neglected sir curiosity unwilling.
                  </p>

                  <h5>Eduardo de Valfierno</h5>
                  <p class="he">Berlin, German</p>

                </div>

              </div>

              <div class="slick-item">

                <div class="testimonial-long">

                  <p class="saying">
                    Far quitting dwelling graceful the likewise received building. An fact so to that show am shed sold cold. Unaffected remarkably get yet introduced excellence terminated led.
                  </p>

                  <h4 class="uppercase">James Hogue</h4>
                  <p class="he">Utah, USA</p>

                </div>

              </div>

            </div>

            <div class="clear"></div>

            <div class="slider gallery-nav slick-testimonial-nav alt">
              <div class="slick-item">
                <div class="testimonial-man">
                  <div class="image">
                    <img src="images/man/01.jpg" alt="image"/>
                  </div>
                </div>
              </div>
              <div class="slick-item">
                <div class="testimonial-man">
                  <div class="image">
                    <img src="images/man/02.jpg" alt="image"/>
                  </div>
                </div>
              </div>
              <div class="slick-item">
                <div class="testimonial-man">
                  <div class="image">
                    <img src="images/man/03.jpg" alt="image"/>
                  </div>
                </div>
              </div>
              <div class="slick-item">
                <div class="testimonial-man">
                  <div class="image">
                    <img src="images/man/04.jpg" alt="image"/>
                  </div>
                </div>
              </div>
              <div class="slick-item">
                <div class="testimonial-man">
                  <div class="image">
                    <img src="images/man/05.jpg" alt="image"/>
                  </div>
                </div>
              </div>
              <div class="slick-item">
                <div class="testimonial-man">
                  <div class="image">
                    <img src="images/man/06.jpg" alt="image"/>
                  </div>
                </div>
              </div>
              <div class="slick-item">
                <div class="testimonial-man">
                  <div class="image">
                    <img src="images/man/07.jpg" alt="image"/>
                  </div>
                </div>
              </div>
              <div class="slick-item">
                <div class="testimonial-man">
                  <div class="image">
                    <img src="images/man/08.jpg" alt="image"/>
                  </div>
                </div>
              </div>
              <div class="slick-item">
                <div class="testimonial-man">
                  <div class="image">
                    <img src="images/man/09.jpg" alt="image"/>
                  </div>
                </div>
              </div>
              <div class="slick-item">
                <div class="testimonial-man">
                  <div class="image">
                    <img src="images/man/10.jpg" alt="image"/>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

    </div>
  </div>

  <div class="bg-light section">
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
