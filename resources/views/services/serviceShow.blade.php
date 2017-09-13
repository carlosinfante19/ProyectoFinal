@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-m-12">
            <div class="panel panel-default">
                <div class="panel-heading">Services</div>
                <div class="panel-body">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="card">
                            <div class="card-block">
                                <h3 class="card-title">{{ $services->title}}</h3>
                                <p class="card-text">
                                    {{ $services->content}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
