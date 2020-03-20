@extends('backoffice.layouts.master')

@section('content')
	<!-- /.row-->
	<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-briefcase"></i>Add Work
                </div>

                <div class="card-body">
                    <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data" id="createWorkForm">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="col-form-label" for="projectCategory">Category</label>
                            <div class="">
                                <select class="form-control" id="projectCategory" name="projectCategory" required>
                                    <option>Please select</option>
                                    <option value="commercial" {{ $work->category == 'commercial'? 'selected': '' }}>Commercial</option>
                                    <option value="retail" {{ $work->category == 'retail'? 'selected': '' }}>Retail</option>
                                    <option value="residential" {{ $work->category == 'residential'? 'selected': '' }}>Residential</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">
                                <label class="col-form-label" for="projectPublished">Published</label>
                                <div class="">
                                    <select class="form-control" id="projectPublished" name="projectPublished" required>
                                        <option value="1" {{ $work->published? 'selected': '' }}>Yes</option>
                                        <option value="0" {{ $work->published? '': 'selected' }}>No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="col-form-label" for="projectShowOnAll">Show on All</label>
                                <div class="">
                                    <select class="form-control" id="projectShowOnAll" name="projectShowOnAll" required>
                                        <option value="1" {{ $work->show_on_all? 'selected': '' }}>Yes</option>
                                        <option value="0" {{ $work->show_on_all? '': 'selected' }}>No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="col-form-label" for="projectSequence">Sequence</label>
                                <div class="controls">
                                    <div class="input-prepend input-group">
                                        <input class="form-control" id="projectSequence" name="projectSequence" size="16" type="text" value="{{ $work->sequence }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="col-form-label" for="projectAllPageSequence">All Page Sequence</label>
                                <div class="controls">
                                    <div class="input-prepend input-group">
                                        <input class="form-control" id="projectAllPageSequence" name="projectAllPageSequence" size="16" type="text" value="{{ $work->all_works_sequence }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-7">
                                <label class="col-form-label" for="projectName">Name</label>
                                <div class="controls">
                                    <div class="input-prepend input-group">
                                        <input class="form-control" id="projectName" name="projectName" size="16" type="text" value="{{ $work->name }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="col-form-label" for="projectLocation">Location</label>
                                <div class="controls">
                                    <div class="input-group">
                                        <input class="form-control" id="projectLocation" name="projectLocation" size="16" type="text" value="{{ $work->location }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="form-group">
                            <label class="control-label">Cover Image</label>
                            <div class="input-group">
                                <div class="custom-file dropzone" id="coverImageDropzone">
                                    <div class="dz-message">
                                        <div class="col-xs-8">
                                            <div class="message">
                                                <p>Drop files here or Click to Upload</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fallback">
                                        <input name="storeCoverImage" type="file" style="display:none" multiple />
                                    </div>
                                </div>
                            </div>

                            @if(!empty($coverImage))
                                <div class="dropzone-server-images-container row mb-3 m-3">
                                    <div class="dropzone-server-image-container col-md-2">
                                        <div class="dropzone-server-image">
                                            <img src="{{ asset($coverImage->url . $coverImage->name . '.' . $coverImage->extension) }}" alt="" width="100%">

                                            <div class="image-controls-container">
                                                <span class="delete-pop"><i class="fa fa-trash"></i></span>
                                                <span class="delete-image">
                                                    <div class="modal fade" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Delete Image</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p class="modal-font">Are you sure you want to delete this image?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href="{{ route("admin.work.delete-work-image", ['imageId' => $coverImage->id]) }}">
                                                                        <button type="button" class="btn btn-danger delete-image-btn">Delete</button>
                                                                    </a>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                        </div>

                        <div class="form-group">
                            <label class="control-label">Extra Images</label>
                            <div class="input-group">
                                <div class="custom-file dropzone row" id="extraImagesDropzone">
                                    <div class="dz-message">
                                        <div class="col-xs-8">
                                            <div class="message">
                                                <p>Drop files here or Click to Upload</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fallback">
                                        <input name="storeExtraImages" type="file" style="display:none" multiple />
                                    </div>
                                </div>
                            </div>

                            @if($extraImages->count())
                                <div class="dropzone-server-images-container row mb-3 m-3">
                                    <div class="dropzone-server-image-container">
                                        <div class="dropzone-server-image row">

                                            @foreach ($extraImages as $extraImage)
                                                <div class="col-md-4 individual-image-container">
                                                    <img src="{{ asset($extraImage->url . $extraImage->name . '.' . $extraImage->extension) }}" alt="" width="300px" height="200px">
                                                

                                                    <div class="image-controls-container">
                                                        <span class="delete-pop"><i class="fa fa-trash"></i></span>
                                                        <span class="delete-image">
                                                            <div class="modal fade" tabindex="-1" role="dialog">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Delete Image</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p class="modal-font">Are you sure you want to delete this image?</p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <a href="{{ route("admin.work.delete-work-image", ['imageId' => $extraImage->id]) }}">
                                                                                <button type="button" class="btn btn-danger delete-image-btn">Delete</button>
                                                                            </a>

                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            @endforeach
                                            

                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="form-actions">
                            <button class="btn btn-success" type="submit">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
    <!-- /.row-->

    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-success" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Success</h4>
            </div>
            <div class="modal-body">
                <p>Work updated!</p>
            </div>
            </div>
            <!-- /.modal-content-->
        </div>
        <!-- /.modal-dialog-->
    </div>
@endsection

@section('styles')
    <style>
        #cover-image-dropzone,
        #other-images-dropzone {
            display: inline-block;
            margin-bottom: 2rem;
        }

        #cover-image-dropzone .dropzone {
            width: 17rem;
            min-height: 20rem;
        }

        #other-images-dropzone .dropzone {
            min-height: 20rem;
        }

        .dropzone-server-image-container  {
            border-radius: 5px;
            background-color: #DCDCDC;
            text-align: center;
            padding: 1rem 1rem;
        }

        .image-controls-container {
            margin-top: 0.5rem;
        }

        .image-controls-container i {
            font-size: 20px;
            color: red;
            cursor: pointer;
        }

        .individual-image-container {
            background-color: #0c2340;
            border-radius: 5px;
            margin: 1rem;
            padding: 1rem 0;
        }
    </style>
@endsection

@section('script')
<script type="text/javascript">
    /* DropzoneJS */
    // Disable auto discover for all elements
    Dropzone.autoDiscover = false;

    $(document).ready(function() {

        /* Deleting Image */
        $(".delete-pop").click(function(){
            $(this).parent().find('.delete-image').find('.modal').modal('show');
        });

        /* Show notification */
        $('.notification').find('.modal').modal('show');


        /* DropzoneJS */
        // Initialize Dropzones

        /* Store Images ID array */
        let storeImagesIdsArray= [];
        
        let coverImageDropzone = new Dropzone("div#coverImageDropzone", { 

            url: "{{ route('admin.work.work-upload-cover-image') }}",
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            paramName: 'workCoverImage',
            addRemoveLinks: true,
            autoProcessQueue: false,
            maxFiles: 1,
            maxFilesize: 1,
            // Only allow one image to be uploaded
            init: function() {
                this.on("addedfile", function() {
                    if (this.files[1] != null) {
                        this.removeFile(this.files[0]);
                    }
                });
            }
        });
        
        let extraImagesDropzone = new Dropzone("div#extraImagesDropzone", { 

            url: "{{ route('admin.work.work-upload-extra-image') }}",
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            paramName: 'workExtraImages',
            addRemoveLinks: true,
            autoProcessQueue: false,
            parallelUploads: 20,
            maxFiles: 10,
            maxFilesize: 1,
            init: function () {
                this.on("queuecomplete", function (file) {

                    $('#successModal').modal('show');
                    
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                });
            }
        });


        $('button[type=submit]').click(function(e) {

            e.preventDefault();

            /* Process form */
            let form = new FormData($('#createWorkForm')[0]);

            $.ajax({
                type: 'POST',
                url: "{{ route('admin.work.update', ['work' => $work->id]) }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: form,
                processData: false, // Illegal Invocation
                contentType: false,
                error: function(response) {

                    /* Process laravel form validation errors */
                    console.log(response);
                }

            }).done(function(response) { // Get new store ID as response

                /* Append store ID to dropzone param */
                coverImageDropzone.on('sending', function(file, xhr, formData){
                    formData.append('work_id', response.id);
                });

                extraImagesDropzone.on('sending', function(file, xhr, formData){
                    formData.append('work_id', response.id);
                });


                /* Process Dropzones */
                coverImageDropzone.processQueue();
                extraImagesDropzone.processQueue();

                $('#successModal').modal('show');

            });
            
        });
    });
</script>
@endsection