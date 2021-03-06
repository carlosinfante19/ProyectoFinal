@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Post</div>

                <div class="panel-body">
                    <div class="col-sm-10 col-sm-offset-1">

                        <h3>Edit Post "{{$blog->title}}"</h3>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{route('blog.update',$blog->id)}}" role="form" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            {!! method_field('PUT') !!}
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" value="{{$blog->title}}" id="title" name="title">
                            </div>

                            <div class="form-group">
                                <label for="title">Content</label>
                                <textarea style="resize:none" id="content" name="content" class="form-control" rows="3">{{$blog->content}}</textarea>
                            </div>

                            <div class="input-group form-group">
                                <label class="input-group-btn">
                                <span class="btn btn-primary">
                                    Image <input type="file" style="display: none;" multiple="" name="image">
                                </span>
                                </label>
                                <input type="text" class="form-control" readonly="">
                            </div>

                            <button class="btn btn-primary pull-right">Save</button>
                            

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
