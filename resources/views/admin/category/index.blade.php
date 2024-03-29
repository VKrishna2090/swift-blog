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
                    <strong>Category - List</strong>
                    <a href="{{route('categories.create')}}" class="btn btn-sm btn-success float-right">Add New</a>                   
                </div>

                <div class="card-body">
                   <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" >Name</th>
                                <th scope="col" width="200">Created By</th>
                                <th scope="col" width="129">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->user->name}}</td>
                                <td>
                                    <a href="{{route('categories.edit',$category->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                    {{ Form::open(['route' => ['categories.destroy', $category->id], 'method'=>'delete', 'style'=>'display:inline']) }}
                                    {{ Form::submit('Delete', ['class'=>'btn btn-sm btn-danger']) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="clearfix mt-4">
                        {{$categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
