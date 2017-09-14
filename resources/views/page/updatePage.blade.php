@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Page</div>

                <div class="panel-body">
                    <div class="col-sm-10 col-sm-offset-1">
                        
                        <h3>Edit Page </h3>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('page.update', $page->id) }}" role="form" method="post">
                            {!! method_field('PUT') !!}
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$page->title}}">
                            </div>
                            
                            <div class="form-group">
                                <label for="title">Content</label>
                                <textarea style="resize:none" id="content" name="content" class="form-control" rows="3">{{$page->content}}</textarea>
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
