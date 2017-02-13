@extends('admin.layouts.static')


@section('content')
<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Istifadəçi redaktəsi
                            </h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" class="form-horizontal" action="{{ route('istifadechiler.update', $user->id) }}" method="POST">
                              <input type="hidden" name="_method" value="PATCH">
                              {{ csrf_field() }}


                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Ad, Soyad</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" value="{{$user->person->u_name}}"  class="form-control" name="person_name" placeholder="enter the name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Email</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" value="{{$user->email}}"  class="form-control" name="email" placeholder="enter the email" required>
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
                                        <label for="">Telefon</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                              <input value="{{$user->person->u_phone}}"  name="u_phone" type="text" class="datepicker form-control" placeholder="nömrə" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Doğum tarixi</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                              <input value="{{$user->person->u_birth}}"  name="u_birth" type="date" class="datepicker form-control" placeholder="tarix" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Cinsi</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <select class="form-control" name="u_gender" required>
                                              <option style="display: none;" disabled selected value="">-- seçin --</option>
                                              <option @if($user->person->u_gender == 1) selected  @endif value="1">Kişi</option>
                                              <option @if($user->person->u_gender == 2) selected  @endif value="2">Qadın</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Vəziyyəti</label>
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
