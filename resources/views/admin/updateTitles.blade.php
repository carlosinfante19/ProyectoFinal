@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Titles</div>

                <div class="panel-body">
                    <form action="{{ route('titles.update', $titles->id) }}" role="form" method="post">
                        {!! method_field('PUT') !!}
                        {!! csrf_field() !!}
 
                        <input type="text" name="title" value="{{$titles->title}}">
                        <input type="text" name="content" value="{{$titles->content}}">
                        <input type="text" name="icon" value="{{$titles->icon}}">
 
                        <div class="form-group">
                            <button class="form-control btn btn-info">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
