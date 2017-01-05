@extends('admin.layouts.static')


@section('content')
<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Yeni Kateqoriya yaratmaq
                            </h2>

                        </div>
                        <div class="body">
                            <form class="form-horizontal" action="{{ route('kateqoriya.update', $cat_selected->cat_id) }}" method="POST">
                              <input type="hidden" name="_method" value="PATCH">
                              {{ csrf_field() }}
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Üst kateqoriyası</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                                <select class="form-control" name="cat_parent">
                                                  <option style=" display: none;" value="" selected disabled value="">-- üst kateqoriya seçin --</option>
                                                  @foreach($cat as $dog)
                                                  <option  value="{{ $dog->cat_id }}" @if($cat_selected->cat_parent == $dog->cat_id) selected @endif><b>{{ $dog->cat_name }}</b></option>
                                                    @foreach($dog->children as $ping)
                                                      <option value="{{ $ping->cat_id }}" @if($cat_selected->cat_parent == $ping->cat_id) selected @endif> -- {{ $ping->cat_name }}</option>
                                                    @endforeach
                                                  @endforeach
                                                </select>

                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Kateqoriya adı</label>
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
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Yaddaşda Saxla</button>
                                        <button type="button" onclick="event.preventDefault(); document.getElementById('cat_sil').submit();" class="btn btn-danger m-t-15 waves-effect">Sil</button>
                                    </div>
                                </div>
                            </form>
                            
                              <form id="cat_sil" action="{{ route('kateqoriya.destroy', $cat_selected->cat_id) }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                              </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->
@endsection
