@extends('admin.layouts.static')

@section('content')


<!-- Hover Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                      @if(Session::has('mesaj'))
                          <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                              {{ Session::get('mesaj') }}
                          </div>
                      @endif

                        <div class="header">
                            <h2>Tenderlərin siyahısı</h2>




                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Tenderin Adı</th>
                                        <th>Istidəçi Adı</th>
                                        <th>Status</th>
                                        <th>Tarix</th>

                                    </tr>
                                </thead>

                                <tbody>

                                  @foreach($tender as $ten)
                                    <tr>
                                      <td>{{$ten->tender_name}}</td>
                                      <td>@if($ten->username->user_role == 0)

                                          {{$ten->person->u_name}}


                                          @elseif($ten->username->user_role == 1)

                                          {$ten->company->c_name}}

                                          @else

                                          {{$ten->person->u_name}}


                                          @endif

                                      </td>
                                      <td>

                                        @if($ten->tender_status == '1')
                                        <span class="label label-success"> Aktiv </span>
                                        @elseif($ten->tender_status == '0')
                                        <span class="label label-danger"> Deaktiv </span>

                                        @endif

                                      </td>
                                      <td>{{$ten->created_at}}</td>

                                        <td>  <div class="">
                                            <a href="" onclick="event.preventDefault(); document.getElementById('delete{{$ten->tender_id}}').submit();" class="btn btn-primary">Sil</a>
                                          </div></td>



                                    </tr>

                                    <form id="delete{{$ten->tender_id}}" action="{{ route('tendersDelete') }}" method="post">
                                      {{ csrf_field() }}
                                      <input type="hidden" name="delid" value="{{$ten->tender_id}}">
                                    </form>
                                  @endforeach



                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Rows -->


@endsection
