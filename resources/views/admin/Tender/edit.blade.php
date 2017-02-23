@extends('admin.layouts.static')

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                  Tenderi redaktəsi
                </h2>
            </div>
            <div class="body">
                <form id="form_validation" class="form-horizontal"  enctype="multipart/form-data" action="/dash/tenders/{{$tenderEdit->tender_id}}" method="POST">

                  {{ csrf_field() }}


                  <div class="row clearfix">
                      <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                          <label for="email_address_2">Tenderin Adı</label>
                      </div>
                      <div class="col-lg-10 col-md-5  col-sm-8 col-xs-7">
                          <div class="form-group">
                              <div class="form-line">
                                  <input type="text" value="{{$tenderEdit->tender_name}}" class="form-control" name="tender_name" placeholder="daxil edin" required>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row clearfix">
                      <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                          <label for="email_address_2">Tender haqqında geniş məlumat</label>
                      </div>
                      <div class="col-lg-10 col-md-5 col-sm-8 col-xs-7">
                          <div class="form-group">
                              <div class="form-line">
                                <textarea  class="form-control" name="tender_desc" placeholder="xəbərin mətni" rows="8" cols="40">{{$tenderEdit->tender_desc}}</textarea>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row clearfix">
                      <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                          <label for="email_address_2">Məbləğ</label>
                      </div>
                      <div class="col-lg-6 col-md-5 col-sm-8 col-xs-7">
                          <div class="form-group">
                              <div class="form-line">
                                  <input type="text" value="{{$tenderEdit->tender_cost_value}}" class="form-control" name="tender_cost_value" placeholder="daxil edin" required>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-3 col-md-3 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <select class="form-control" name="tender_cost_currency">
                              <option @if($tenderEdit->tender_cost_currency == 'AZN') selected  @endif value="AZN"><b>AZN</b></option>
                              <option @if($tenderEdit->tender_cost_currency == 'DOLLAR') selected  @endif value="DOLLAR"><b>DOLLAR</b></option>
                            </select>
                        </div>
                      </div>
                  </div>

                  <div class="row clearfix">
                      <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                          <label for="email_address_2">E-Poçt ünvanı</label>
                      </div>
                      <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                          <div class="form-group">
                              <div class="form-line">
                                  <input type="text" value="{{$tenderEdit->tender_mail}}" class="form-control" name="tender_mail" placeholder="daxil edin" required>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row clearfix">
                      <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                          <label for="email_address_2">Tenderin vəziyyəti</label>
                      </div>
                      <div class="col-lg-10 col-md-3 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <select class="form-control" name="tender_private">
                              <option @if($tenderEdit->tender_private == 'Açıq Tender') selected  @endif value="1"><b>Açıq Tender</b></option>
                              <option @if($tenderEdit->tender_private == 'Qapalı Tender') selected  @endif value="0"><b>Qapalı Tender</b></option>
                            </select>
                        </div>
                      </div>
                  </div>

                  <div class="row clearfix">
                      <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                          <label for="email_address_2">Ünvan</label>
                      </div>
                      <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                          <div class="form-group">
                              <div class="form-line">
                                  <input type="text" value="{{$tenderEdit->tender_address}}" class="form-control" name="tender_address" placeholder="daxil edin" required>
                              </div>
                          </div>
                      </div>
                  </div>


                  <div class="row clearfix">
                      <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                          <label for="email_address_2">Tenderin bitmə tarixi</label>
                      </div>
                      <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                          <div class="form-group">
                              <div class="form-line">
                                  <input type="text" value="{{$tenderEdit->tender_deadline}}" class="form-control" name="tender_deadline" readonly disabled>
                              </div>
                          </div>
                      </div>
                  </div>



                  <div class="row clearfix">
                      <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                          <label for="email_address_2">Tender Şəkil</label>
                      </div>
                      <div class="col-md-2">
                        <img class="img-responsive"  src="{{url('/uploads/images/'.$tenderEdit->tender_image)}}" alt="" />
                      </div>
                      <div class="col-lg-8 col-md- col-sm-8 col-xs-7">
                          <div class="form-group">
                              <div class="form-line">
                                  <input type="file" class="form-control" name="image" value="">
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
                            <select name="tender_category_id" class="form-control show-tick" data-live-search="true" required>
                              @foreach($tenderCATE as $children)
                              <option @if($tenderEdit->tender_category_id == $children->cat_id) selected  @endif value="{{ $children->cat_id }}">{{ $children->cat_name }}</option>
                              @foreach($children->children as $ping)
                                <option @if($tenderEdit->tender_category_id == $ping->cat_id) selected  @endif value="{{ $ping->cat_id }}"> - {{ $ping->cat_name }}</option>
                                @foreach($ping->children as $a)
                                  <option @if($tenderEdit->tender_category_id == $a->cat_id) selected  @endif value="{{ $a->cat_id }}"> -- {{ $a->cat_name }}</option>
                                @endforeach
                              @endforeach
                                  @endforeach

                            </select>
                          </div>
                      </div>
                  </div>



                  <div class="row clearfix">
                      <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                          <label for="email_address_2">Əlaqə nömrəsi</label>
                      </div>
                      <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                          <div class="form-group">
                              <div class="form-line">
                                  <input type="text" value="{{$tenderEdit->tender_phone}}" class="form-control" name="tender_phone" placeholder="daxil edin" required>
                              </div>
                          </div>
                      </div>
                  </div>




                  <div class="row clearfix">
                      <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                          <label for="email_address_2">Tenderin vəziyyəti</label>
                      </div>
                      <div class="col-lg-10 col-md-3 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <select class="form-control" name="tender_status">
                              <option @if($tenderEdit->tender_status == 'Aktiv') selected  @endif value="1"><b>Aktiv</b></option>
                              <option @if($tenderEdit->tender_status == 'Deaktiv ') selected  @endif value="0"><b>Deaktiv</b></option>
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
