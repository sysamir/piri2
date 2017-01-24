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
                            <h2>Bloq (Xəbərlər)</h2>
                            <p>
                            @if( !empty($keyword))
                                <i>Axtarış nəticəsi üçün açar söz: <b>{{$keyword}}</b></i>
                            @endif
                          </p>

                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Başlıq</th>
                                        <th>kateqoriya</th>
                                        <th>Əlavə edilib</th>
                                        <th>Funksiya</th>
                                    </tr>
                                </thead>

                                <tbody>
                                  @foreach($blogNews as $children)
                                    <tr style="font-size: 16px">
                                        <td scope="row">{{ $children->blog_id }}</td>
                                        <td> {{ $children->blog_title }} </td>
                                        <td> {{ $children->blogcat->cat_name }}  </td>
                                        <td> {{ $children->created_at->diffForHumans() }} </td>

                                          <td>
                                            <a href="#">
                                              <button type="button" class="btn btn-success waves-effect">
                                                <i class="material-icons">search</i>                                          </button>
                                            </a>
                                            <a href="{{ route('blog-news.edit', $children->blog_id) }}">
                                              <button type="button" class="btn bg-light-blue waves-effect">
                                                <i class="material-icons">settings</i>
                                            </button>
                                            </a>
                                            <a href="#" onclick="event.preventDefault(); document.getElementById('subject_delete{{$children->blog_id}}').submit();">
                                              <button type="button" class="btn bg-red waves-effect">
                                                <i class="material-icons">delete_forever</i>
                                            </button>
                                            </a>
                                          </td>

                                      <form id="subject_delete{{$children->blog_id}}" action="{{ route('blog-news.destroy', $children->blog_id) }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                      </form>



                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Rows -->

                <nav class="button-share-container">
              <a data-toggle="modal" data-target="#searchModal" style="cursor: pointer" class="buttons bg-blue" tooltip="Axtar"><i class="material-icons">search</i></a>
              <a href="{{route('blog-news.create')}}" class="buttons bg-green"  tooltip="Yeni xəbər"><i class="material-icons">add</i></a>
              <button onClick="return false;" type="button" class="btnmtn btn bg-red btn-circle-lg waves-effect waves-circle waves-float ">
                    <i class="material-icons">more_horiz</i>
              </button>
            </nav>

            <!-- Search modal -->
            <div class="modal fade" id="searchModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Axtarış</h4>
                        </div>
                        <div class="modal-body">

                          <form id="form_validation" action="{{url('dash/blog-newsearch/search')}}" method="get">
                            <div class="row clearfix">
                                <div class="col-lg-10 col-md-10 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" value="{{ $keyword or '' }}" name="key" class="form-control" placeholder="Axtarılacaq açar söz" required autofocus>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                    <button type="submit" class="btn btn-primary btn-lg  waves-effect">Axtar</button>
                                </div>
                            </div>
                        </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Bağla</button>
                        </div>
                    </div>
                </div>
            </div>

@endsection
