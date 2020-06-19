@extends('website.template.master')

@section('content')
    
  <!-- Page Header -->
  <header class="masthead" style="background-image: url({{ $page->thumbnail }})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{$page->title}}</h1>
            <h2 class="subheading">{{$page->sub_title}}</h2>
            <span class="meta"><small>Posted by 
                <a href="#">{{$page->user->name}}</a>
                on {{date('d M, Y', strtotime($page->created_at)) }}</small>
            </span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                {!!$page->details!!}
            </div>
        </div>
    </div>
  </article>
@endsection