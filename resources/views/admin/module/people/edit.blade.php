@extends('adminlte::page')

@section('title', 'Edit People')

@section('content_header')
    <h1>Edit People</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('admin.people.index') }}" class="btn btn-success">Back</a>
    </div>
    <form class="form-horizontal" action="{{ route('admin.people.update', ['person' => $person->id ]) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @method('PUT')
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
                <label class="col-md-3 col-form-label" for="name">Name</label>
                <div class="col-md-9">
                    <input class="form-control" id="name" type="text" name="name" placeholder="Name" value="{{ old('name', $person->name) }}"/>
                    @if($errors->has('name'))
                        <small style="color: red;">{{$errors->first('name')}}</small>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="email">Email</label>
                <div class="col-md-9">
                    <input class="form-control" id="email" type="email" name="email" placeholder="Email" value="{{ old('email', $person->email) }}"/>
                    @if($errors->has('email'))
                        <small style="color: red;">{{$errors->first('email')}}</small>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="designation">Designation</label>
                <div class="col-md-9">
                    <input class="form-control" id="designation" type="text" name="designation" placeholder="Designation" value="{{ old('designation', $person->designation) }}"/>
                    @if($errors->has('designation'))
                        <small style="color: red;">{{$errors->first('designation')}}</small>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="peopleImage">Image</label>
                <div class="col-md-9">
                    <img src="{{ $person->image->full_path ?? '-' }}" style="height: 10rem;"/>
                    <input class="form-control" id="peopleImage" type="file" name="image" value="{{ old('image') }}"/>
                    @if($errors->has('image'))
                        <small style="color: red;">{{$errors->first('image')}}</small>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="qualification">Professional Qualification & Membership</label>
                <div class="col-md-9">
                    <textarea class="form-control ckeditor" id="qualification" name="qualification" placeholder="Qualification">
                        {{ old('qualification', $person->qualification) }}
                    </textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="experience">Experience</label>
                <div class="col-md-9">
                    <textarea class="form-control ckeditor" id="experience" name="experience" placeholder="Experience">
                        {{ old('experience', $person->experience) }}
                    </textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="position_held">Position Held</label>
                <div class="col-md-9">
                    <textarea class="form-control ckeditor" id="position_held" name="position_held" placeholder="Position Held">
                        {{ old('position_held', $person->position_held) }}
                    </textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="background">Background</label>
                <div class="col-md-9">
                    <textarea class="form-control ckeditor" id="background" name="background" placeholder="Background">
                        {{ old('background', $person->background) }}
                    </textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="sequence">Sequence</label>
                <div class="col-md-9">
                    <input class="form-control" id="sequence" type="number" name="sequence" placeholder="Sequence" value="{{ old('sequence', $person->sequence) }}"/>
                    @if($errors->has('sequence'))
                        <small style="color: red;">{{$errors->first('sequence')}}</small>
                    @endif
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-sm btn-primary" type="submit">
                <i class="fa fa-dot-circle-o"></i> Update
            </button>
        </div>
    </form>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script src="https://cdn.ckeditor.com/4.14.1/basic/ckeditor.js"></script>
    <script>
        $('.editor').each(function(e){
            CKEDITOR.replace(this.id);
        });
    </script>
@stop

@section('plugins.Datatables', true)