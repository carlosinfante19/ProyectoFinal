@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-m-12">
            <div class="panel panel-default">
                <div class="panel-heading">Page</div>
        
                <div class="panel-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="well well-lg">
                            <h3>{{$page->title}}</h3>
                            <p>{{$page->content}}</p>
                        </div>
                        <a href="{{route('page.edit',$page->id) }}" class="btn btn-success pull-right">Update</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
