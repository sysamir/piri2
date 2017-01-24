

@extends('admin.layouts.static')

@section('content')
<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Xəbərin redaktəsi
                            </h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" class="form-horizontal"  enctype="multipart/form-data" action="{{ route('blog-news.update',$blogEdit->blog_id ) }}" method="POST">
                              <input type="hidden" name="_method" value="PATCH">
                              {{ csrf_field() }}


                              <div class="row clearfix">
                                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                      <label for="email_address_2">Başlıq</label>
                                  </div>
                                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                      <div class="form-group">
                                          <div class="form-line">
                                              <input type="text" value="{{$blogEdit->blog_title}}" class="form-control" name="blog_title" placeholder="daxil edin" required>
                                          </div>
                                      </div>
                                  </div>
                              </div>


                              <div class="row clearfix">
                                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                      <label for="email_address_2">Xəbərin məzmunu</label>
                                  </div>
                                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <textarea  id="ckeditor1" class="form-control" name="blog_descp" placeholder="xəbərin mətni" rows="8" cols="40">{{$blogEdit->blog_descp}}</textarea>
                                          </div>
                                      </div>
                                  </div>
                              </div>


                              <div class="row clearfix">
                                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                      <label for="email_address_2">Qapaq fotosu</label>
                                  </div>
                                  <div class="col-md-2">
                                    <img class="img-responsive"  src="{{url('/uploads/images/'.$blogEdit->blog_cover_picture)}}" alt="" />
                                  </div>
                                  <div class="col-lg-8 col-md- col-sm-8 col-xs-7">
                                      <div class="form-group">
                                          <div class="form-line">
                                              <input type="file" class="form-control" name="blog_cover" value="">
                                          </div>
                                      </div>
                                  </div>
                              </div>





                              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                  <label for="email_address_2">Kateqoriya</label>
                              </div>
                              <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                  <div class="form-group">
                                      <div class="form-line">
                                        <select name="blog_cat_id" class="form-control show-tick" data-live-search="true" required>
                                          @foreach($blognewsCatEdit as $children)
                                          <option @if($blogEdit->blog_cat_id == $children->cat_id) selected  @endif value="{{ $children->cat_id }}">{{ $children->cat_name }}</option>
                                                  @foreach($children->children as $ping)
                                                    <option @if($blogEdit->blog_cat_id == $ping->cat_id) selected  @endif value="{{ $ping->cat_id }}"> - {{ $ping->cat_name }}</option>
                                                    @foreach($ping->children as $a)
                                                      <option @if($blogEdit->blog_cat_id == $a->cat_id) selected  @endif value="{{ $a->cat_id }}"> -- {{ $a->cat_name }}</option>
                                                    @endforeach
                                                  @endforeach
                                              @endforeach

                                        </select>
                                      </div>
                                  </div>
                              </div>


                                <div class="row clearfix">
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Saxla</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->
@endsection
