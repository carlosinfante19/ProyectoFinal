@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-m-12">
            <div class="panel panel-default">
                <div class="panel-heading">Titles</div>
        
                <div class="panel-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="col-sm-10 col-sm-offset-1">
                        <ul class="list-group">
                        @foreach($titles as $title)
                            <a href="{{route('titles.edit',$title->id) }}"><li class="list-group-item">Title {{$title->id}}</li></a>
                        @endforeach
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
