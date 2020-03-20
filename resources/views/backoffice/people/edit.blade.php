@extends('backoffice.layouts.master')


@section('content')
<div class="col-12">
    @include('backoffice.components.notification')

    <div class="card">
        <div class="card-header">Edit People</div>
        <form class="form-horizontal" action="{{ route('admin.people.update', ['people' => $people->id]) }}" method="post" enctype="multipart/form-data">

            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="name">Name</label>
                    <div class="col-md-9">
                        <input class="form-control" id="name" type="name" name="name" value="{{ $people->name }}" placeholder="Name">
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

                        @if(!empty($peopleImage))
                        <div class="col-12 UploadedImageBox">
                            <div class="UploadedImageShow" style="background-image: url('{{ asset($peopleImage->url . $peopleImage->name . '.' . $peopleImage->extension) }}')"></div>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="sequence">Sequence</label>
                    <div class="col-md-9">
                        <input class="form-control" id="sequence" type="sequence" name="sequence" value="{{ $people->sequence }}" placeholder="Sequence">
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
