@extends('admin.layouts.static')


@section('content')
<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Kateqoriya Redaktəsi
                            </h2>

                        </div>
                        <div class="body">
                            <form id="form_validation" class="form-horizontal" action="{{ route('blog-categories.update', $cat_selected->cat_id) }}" method="POST">
                              <input type="hidden" name="_method" value="PATCH">
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
                                              <option  value="{{ $children->cat_id }}" @if($cat_selected->cat_parent == $children->cat_id) selected @endif @if($cat_selected->cat_id == $children->cat_id) disabled @endif><b>{{ $children->cat_name }}</b></option>
                                                @foreach($children->children as $ping)
                                                  <option value="{{ $ping->cat_id }}" @if($cat_selected->cat_parent == $ping->cat_id) selected @endif @if($cat_selected->cat_id == $ping->cat_id) disabled @endif> -- {{ $ping->cat_name }}</option>
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
                                                <input type="text" value="{{$cat_selected->cat_name}}"  class="form-control" name="cat_name" placeholder="daxil edin" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="row clearfix">

                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Saxla</button>
                                        <button type="button" onclick="event.preventDefault(); document.getElementById('cat_sil').submit();" class="btn btn-danger m-t-15 waves-effect">Sil</button>
                                    </div>
                                </div>
                            </form>

                              <form id="cat_sil" action="{{ route('blog-categories.destroy', $cat_selected->cat_id) }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                              </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->
@endsection
