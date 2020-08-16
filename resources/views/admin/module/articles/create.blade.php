@extends('adminlte::page')

@section('title', 'Create Article')

@section('content_header')
    <h1>Create Article</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('admin.article.index') }}" class="btn btn-success">Back</a>
    </div>
    <form class="form-horizontal" action="{{ route('admin.article.store') }}" method="post" enctype="multipart/form-data">

            {{ csrf_field() }}
            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">{!! session()->get('success') !!}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach ($errors->all() as $err)
                                <li>{{ $err }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="title">Title</label>
                    <div class="col-md-9">
                        <input class="form-control" id="title" type="text" name="title" placeholder="Title" value="{{ old('title') }}"/>
                        @if($errors->has('title'))
                            <small style="color: red;">{{$errors->first('title')}}</small>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="content">Content</label>
                    <div class="col-md-9">
                        <textarea class="form-control ckeditor" id="content" name="content" placeholder="Content">
                            {{ old('content') }}
                        </textarea>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button class="btn btn-sm btn-primary" type="submit">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
            </div>
    </form>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script src="https://cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>
    <script>

            CKEDITOR.replace('content', {
                uploadUrl: "{{ route('admin.article.upload-image', ['_token' => csrf_token()]) }}",
                filebrowserUploadUrl: "{{ route('admin.article.upload-image', ['_token' => csrf_token()]) }}",
                entities: false,
                fileEmptyBlocks: true
            });

    </script>
@stop

@section('plugins.Datatables', true)