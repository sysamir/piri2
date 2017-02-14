@extends('admin.layouts.static')


@section('content')
<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Şirkət redaktəsi
                            </h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" class="form-horizontal" action="{{ route('istifadechiler.update', $user->id) }}" method="POST">
                              <input type="hidden" name="_method" value="PATCH">
                              {{ csrf_field() }}


                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Şirkətin adı</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" value="{{$user->company->c_name}}"  class="form-control" name="c_name" placeholder="daxil edin" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Haqqında</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea class="form-control" name="c_desc" placeholder="daxil edin" required>{{$user->company->c_desc}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Əlaqə E-Poçtu</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" value="{{$user->company->c_official_mail}}"  class="form-control" name="c_official_mail" placeholder="daxil edin" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Əlaqə Telefon</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" value="{{$user->company->c_number}}"  class="form-control" name="c_number" placeholder="daxil edin" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Şifrəni yenilək</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" class="form-control" name="password" placeholder="yeni şifrə" >
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">VOEN</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                              <input value="{{$user->company->c_voen}}"  name="c_voen" type="text" class="datepicker form-control" placeholder="nömrə" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Şirkət Hesabı</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <select class="form-control" name="user_status" required>
                                              <option style="display: none;" disabled selected value="">-- seçin --</option>
                                              <option @if($user->user_status == '2') selected  @endif value="2">Aktiv</option>
                                              <option @if($user->user_status == '0') selected  @endif value="0">Deaktiv</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>



                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Şirkət Məlumatları</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <select class="form-control" name="c_confirmed" required>
                                              <option style="display: none;" disabled selected value="">-- seçin --</option>
                                              <option @if($user->company->c_confirmed == '1') selected  @endif value="1">Təsdiqlənib</option>
                                              <option @if($user->company->c_confirmed == '0') selected  @endif value="0">Təsdiqlənməyib</option>
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
