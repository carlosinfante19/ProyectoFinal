@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Services</div>

                <div class="panel-body">
                    <div class="col-sm-10 col-sm-offset-1">
                        
                        <h3>Create Service</h3>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('services.store') }}" role="form" method="post">
                            {!! csrf_field() !!}
                            {!! method_field('POST') !!}
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            
                            <div class="form-group">
                                <label for="title">Content</label>
                                <textarea style="resize:none" id="content" name="content" class="form-control" rows="3"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="title">Icon</label>
                                <select id="icon" name="icon" class="form-control form-control-lg">
                                    <option value="fa fa-folder-open">Folder</option>
                                    <option value="fa fa-asterisk">Asterisk</option>
                                    <option value="fa fa-bookmark">Bookmark</option>
                                    <option value="fa fa-calendar-check-o">Calendar</option>
                                    <option value="fa fa-cubes">Cubes</option>
                                    <option value="fa fa-cogs">Cogs</option>
                                    <option value="fa fa-exclamation-triangle">Triangle</option>
                                    <option value="fa fa-clipboard">Clipboard</option>
                                </select>
                            </div>
                            
                            <button class="btn btn-primary pull-right">Save</button>
                            <button  href="{{ route('services.index') }}" class="btn btn-danger pull-left">Cancel</button>
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
