@extends('client.layouts.blog')


@section('blog')
<div class="content-wrapper">
@foreach($blog as $children)
  <div class="classic-blog-item">
    <div class="image">
      <img src="{{url('/uploads/images/'.$children->blog_cover_picture)}}" alt="Recent Post" />
    </div>
    <div class="content">
      <div class="absolute-holder">
        <div class="date">{{ $children->created_at->diffForHumans() }}</div>
        <div class="share-this">
          <span class="mb-5 block">Kateqoriya:</span>
          {{ $children->blogcat->cat_name }}
        </div>
      </div>
      <h4><a href="{{url('/blog/'.$children->blog_id.'/'.$children->blog_slug)}}">{{ $children->blog_title }}</a></h4>
      <p>{{ $children->blog_descp }}</p>
    </div>
    <div class="bottom">
      <div class="row">
        <div class="col-xss-12 col-xs-8 meta">
												<ul class="clearfix">
												</ul>
											</div>
        <div class="col-xss-12 col-xs-4">
          <a href="{{url('/blog/'.$children->blog_id.'/'.$children->blog_slug)}}" class="read-more">Ardın oxu <i class="ti-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </div>
@endforeach

  <div class="paging-wrapper clearfix">
    <nav class="pull-right">
      {{ $blog->links('client.Blog.paginate') }}
    </nav>
  </div>

</div>
@endsection
