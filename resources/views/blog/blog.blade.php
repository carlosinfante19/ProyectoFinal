@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-m-12">
            <div class="panel panel-default">
                <div class="panel-heading">Posts</div>

                <div class="panel-body">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-sm-10 col-sm-offset-1">
                        <ul class="list-group">
                        @foreach($posts as $post)
                            <a href="{{route('blog.show',$post->id) }}">
                                <li class="list-group-item">
                                    Post {{$post->id}}
                                    <form id="delete-form" action="{{ URL::route('blog.destroy', $post->id) }}" method="POST" style="all: initial; * {all: unset;}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <a href="javascript:{}" onclick="document.getElementById('delete-form').submit(); return false;">
                                            <i class="fa fa-trash-o pull-right" aria-hidden="true"></i>
                                        </a>
                                    </form>
                                    <a href="{{route('blog.edit',$post->id) }}"><i class="fa fa-pencil pull-right" aria-hidden="true"></i></a>
                                    <a href="{{route('blog.show',$post->id) }}" id="delete-button"><i class="fa fa-eye pull-right" aria-hidden="true"></i></a>
                                </li>
                            </a>
                        @endforeach
                        </ul>
                        
                        <a href="{{route('blog.create') }}" class="btn btn-success pull-right">Create New</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
