@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-m-12">
            <div class="panel panel-default">
                <div class="panel-heading">References</div>
                <div class="panel-body">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="card">
                        <div class="card-block">
                            
                            <div class="col-sm-8 col-sm-offset-2">
                                <h3 style="margin-top:0px" class="card-title text-center">Url:</h3>
                                <p class="text-center"> {{ $references->url}}</p>
                                <p class="card-text">
                                    <img class="img-responsive center-block" src="{{ asset('storage/'.$references->filename) }}" alt="">
                                </p>
                                <button  href="{{ route('references.index') }}" class="btn btn-danger pull-left">Back</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
