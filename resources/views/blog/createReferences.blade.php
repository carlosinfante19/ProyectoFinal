@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">References</div>

                <div class="panel-body">
                    <div class="col-sm-10 col-sm-offset-1">
                        
                        <h3>Create References</h3>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('references.store') }}" role="form" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            {!! method_field('POST') !!}
                            <div class="form-group">
                                <label for="url">Url</label>
                                <input type="text" class="form-control" id="url" name="url">
                            </div>
                            
                            <div class="form-group">
                                <label for="priority">Order</label>
                                <input type="number" class="form-control" id="priority" name="priority">
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
                            <button  href="{{ route('references.index') }}" class="btn btn-danger pull-left">Cancel</button>
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
