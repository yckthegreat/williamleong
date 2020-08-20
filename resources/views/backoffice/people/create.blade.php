@extends('backoffice.layouts.master')


@section('content')
<div class="col-12">
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">{!! session()->get('success') !!}</div>
    @endif

    <div class="card">
        <div class="card-header">Add New People</div>
        <form class="form-horizontal" action="{{ route('admin.people.store') }}" method="post" enctype="multipart/form-data">

            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="name">Name</label>
                    <div class="col-md-9">
                        <input class="form-control" id="name" type="name" name="name" placeholder="Name">
                        @if($errors->has('name'))
                            <small style="color: red;">{{$errors->first('name')}}</small>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="peopleImage">Image</label>
                    <div class="col-md-9">
                        <input class="form-control" id="peopleImage" type="file" name="peopleImage">
                        @if($errors->has('peopleImage'))
                            <small style="color: red;">{{$errors->first('peopleImage')}}</small>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="sequence">Sequence</label>
                    <div class="col-md-9">
                        <input class="form-control" id="sequence" type="sequence" name="sequence" placeholder="Sequence">
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button class="btn btn-sm btn-primary" type="submit">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
