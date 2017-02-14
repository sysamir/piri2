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
                            <h2>Tenderlərin Kateqoriyaları</h2>
                            <a href="{{route('kateqoriya.create')}}"><button type="button" class="pull-right btn btn-success btn-circle waves-effect waves-circle waves-float">
                                  <i class="material-icons">add</i>
                              </button></a>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Keteqoriya</th>

                                    </tr>
                                </thead>

                                <tbody>
                                  @foreach($cat as $dog)
                                    <tr style="font-size: 18px">
                                        <td scope="row">{{ $dog->cat_id }}</td>
                                        <td>
                                          <b style="font-size: 24px"><a href="{{ route('kateqoriya.edit', $dog->cat_id) }}">{{ $dog->cat_name }}</a></b><br/>
                                          @foreach($dog->children as $ping)
                                          <i style="font-size: 24px" class="material-icons">subdirectory_arrow_right</i>[{{ $ping->cat_id }}] <a href="{{ route('kateqoriya.edit', $ping->cat_id) }}">{{ $ping->cat_name }}</a> </br>
                                            @foreach($ping->children as $a)
                                            <i style="font-size: 20px" class="material-icons"> d</i><i style="font-size: 20px" class="material-icons">subdirectory_arrow_right</i>[{{ $a->cat_id }}] <a href="{{ route('kateqoriya.edit', $a->cat_id) }}">{{ $a->cat_name }}</a> </br>
                                            @endforeach
                                          @endforeach
                                        </td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Rows -->
@endsection
