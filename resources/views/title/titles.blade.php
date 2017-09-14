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
                            <a href="{{route('titles.edit',$title->id) }}">
                                <li class="list-group-item">Title {{$title->id}}
                                <a href="{{route('titles.edit',$title->id) }}"><i class="fa fa-pencil pull-right" aria-hidden="true"></i></a>
                                <a href="{{route('titles.show',$title->id) }}" id="delete-button"><i class="fa fa-eye pull-right" aria-hidden="true"></i></a>
                                </li>
                            </a>
                            
                        @endforeach
                        </ul>
                        <a href="{{route('references.create') }}" class="btn btn-danger pull-left">Back</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
