@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-m-12">
            <div class="panel panel-default">
                <div class="panel-heading">Titles</div>

                <div class="panel-body">
                    <div class="col-sm-10 col-sm-offset-1">
                        <ul class="list-group">
                            <a href="{{route('titles.index') }}"><li class="list-group-item">Titles</li></a>
                            <a href="{{route('page.index') }}"><li class="list-group-item">Pages</li></a>
                            <a href="{{route('services.index') }}"><li class="list-group-item">Services</li></a>
                            <a href="{{route('references.index') }}"><li class="list-group-item">References</li></a>
                            <a href="{{route('blog.index') }}"><li class="list-group-item">Blog</li></a>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
