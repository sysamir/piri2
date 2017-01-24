@extends('admin.layouts.static')

@section('content')
<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Yeni kateqoriya
                            </h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" class="form-horizontal" action="{{ route('blog-categories.store') }}" method="POST">
                              {{ csrf_field() }}
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Əsas kateqoriya</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <select class="form-control" name="cat_parent">
                                              <option style=" display: none;" value="" selected disabled value="">-- seçin --</option>
                                              @foreach($cat as $children)
                                              <option value="{{ $children->cat_id }}"><b>{{ $children->cat_name }}</b></option>
                                                @foreach($children->children as $ping)
                                                  <option value="{{ $ping->cat_id }}"> -- {{ $ping->cat_name }}</option>
                                                @endforeach
                                              @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">kateqoriya adı</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"  class="form-control" name="cat_name" placeholder="daxil edin" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Yarat</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->
@endsection
