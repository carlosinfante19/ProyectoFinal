@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">References</div>

                <div class="panel-body">
                    <div class="col-sm-10 col-sm-offset-1">

                        <h3>Edit References # {{$references->id}}</h3>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('references.update', $references->id) }}" role="form" method="post">
                            {!! method_field('PUT') !!}
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label for="url">Url</label>
                                <input type="text" value="{{$references->url}}" class="form-control" id="url" name="url">
                            </div>

                            <div class="form-group">
                                <label for="priority">Order</label>
                                <input type="number" value="{{$references->priority}}" class="form-control" id="priority" name="priority">
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
