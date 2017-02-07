@section('title', $blog->blog_title)
@extends('client.layouts.blog')

@section('blog')
<div class="content-wrapper">

			<div class="classic-blog-item blog-single">

				<div class="image">
					<img src="{{url('/uploads/images/'.$blog->blog_cover_picture)}}" alt="">
				</div>

				<div class="content">

					<div class="absolute-holder">
						<div class="date">{{ $blog->created_at->diffForHumans() }}</div>
						<div class="share-this">
							<span class="mb-5 block">Keteqoriya:</span>
							{{ $blog->blogcat->cat_name }}
						</div>
					</div>
					<h4>{{ $blog->blog_title }}</h4>
					<div class="blog-entry">
						<p>{!! $blog->blog_descp !!}</p>
	        </div>

					<div class="blog-extra">


					</div>

				</div>

			</div>

		</div>
  @endsection
