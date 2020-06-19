@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header"><strong><b>Latest Categories</b></strong></div>

                <div class="card-body">
                   <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" width="80">Name</th>
                                <th scope="col" width="60">Created By</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->user->name}}</td>
                            </tr>
                        </tbody>
                        @endforeach
                   </table>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header"><strong><b>Latest Posts</b></strong></div>

                <div class="card-body">
                   <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" width="60">Title</th>
                                <th scope="col" width="60">Created By</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->user->name}}</td>
                            </tr>
                        </tbody>
                        @endforeach
                   </table>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header"><strong><b>Latest Pages</b></strong></div>

                <div class="card-body">
                   <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" width="60">Title</th>
                                <th scope="col" width="60">Created By</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pages as $page)
                            <tr>
                                <td>{{$page->id}}</td>
                                <td>{{$page->title}}</td>
                                <td>{{$page->user->name}}</td>
                            </tr>
                        </tbody>
                        @endforeach
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
