@extends('admin.layouts.static')

@section('content')
<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Yeni xəbərin əlavə edilməsi
                            </h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" class="form-horizontal"  enctype="multipart/form-data" action="{{ route('blog-news.store') }}" method="POST">
                              {{ csrf_field() }}

                              <div class="row clearfix">
                                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                      <label for="email_address_2">Başlıq</label>
                                  </div>
                                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                      <div class="form-group">
                                          <div class="form-line">
                                              <input type="text"  class="form-control" name="blog_title" placeholder="daxil edin" required>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="row clearfix">
                                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                      <label for="email_address_2">Xəbərin mətni</label>
                                  </div>
                                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                      <div class="form-group">
                                          <div class="form-line">
                                                <textarea  id="ckeditor1" class="form-control" name="blog_descp" placeholder="Açıqlama" rows="8" cols="40"></textarea>
                                          </div>
                                      </div>
                                  </div>
                              </div>


                              <div class="row clearfix">
                                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                      <label for="email_address_2">Qapaq fotosu</label>
                                  </div>
                                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                      <div class="form-group">
                                          <div class="form-line">
                                              <input type="file" class="form-control" name="blog_cover" required>
                                          </div>
                                      </div>
                                  </div>
                              </div>



                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Kateqoriyası</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <select class="form-control" name="blog_cat_id" required>
                                              <option style=" display: none;" value="" selected disabled value="">-- seçin --</option>
                                              @foreach($blognewsCatCreate as $children)
                                              <option value="{{ $children->cat_id }}"><b>{{ $children->cat_name }}</b></option>
                                                @foreach($children->children as $ping)
                                                  <option value="{{ $ping->cat_id }}"> - {{ $ping->cat_name }}</option>
                                                  @foreach($ping->children as $c)
                                                    <option value="{{ $c->cat_id }}"> -- {{ $c->cat_name }}</option>
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
