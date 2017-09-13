@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Titles</div>

                <div class="panel-body">
                    <div class="col-sm-10 col-sm-offset-1">
                        
                        <h3>Edit Title # {{$titles->id}}</h3>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('titles.update', $titles->id) }}" role="form" method="post">
                            {!! method_field('PUT') !!}
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$titles->title}}">
                            </div>
                            
                            <div class="form-group">
                                <label for="title">Content</label>
                                <textarea style="resize:none" id="content" name="content" class="form-control" rows="3">{{$titles->content}}</textarea>
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
                            
                            <button class="btn btn-primary">
                                Save
                            </button>
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
