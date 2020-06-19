@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{Session('message')}}                    
                </div>
            @endif
            @if(Session::has('delete-message'))
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{Session('delete-message')}}                    
            </div>
        @endif
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>Page - List</strong>
                    <a href="{{route('pages.create')}}" class="btn btn-sm btn-success float-right">Create New</a>                   
                </div>

                <div class="card-body">
                   <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col">Title</th>
                                <th scope="col" width="200">Created By</th>
                                <th scope="col" width="129">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pages as $page)
                            <tr>
                                <td>{{$page->id}}</td>
                                <td>{{$page->title}}</td>
                                <td>{{$page->user->name}}</td>
                                <td>
                                    <a href="{{route('pages.edit',$page->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                    {{ Form::open(['route' => ['pages.destroy', $page->id], 'method'=>'delete', 'style'=>'display:inline']) }}
                                    {{ Form::submit('Delete', ['class'=>'btn btn-sm btn-danger']) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="clearfix mt-4">
                        {{$pages->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
