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
                            <h2>Qeydiyaytlı istifadəçilər</h2>




                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Istidəçi Adı</th>
                                        <th>Vəziyyəti</th>
                                        <th>Status</th>
                                        <th>Fəaliyyət</th>

                                    </tr>
                                </thead>

                                <tbody>

                                  @foreach($cat as $dog)

                                    <tr>
                                        <td scope="row">{{ $dog->cat_id }}</td>
                                        <td>{{ $dog->cat_name }}</td>
                                        <td>
                                      @foreach($dog->children as $ping)
                                        {{ $ping->cat_name }}</br>
                                        @foreach($ping->children as $a)
                                        {{ $a->cat_name }}</br>
                                        @endforeach
                                        @endforeach
                                       </td>

                                         <td>

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
