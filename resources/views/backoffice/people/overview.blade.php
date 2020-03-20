@extends('backoffice.layouts.master')

@section('content')

<div class="col-lg-12">
    
    @include('backoffice.components.notification')

    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i>All People
        </div>

        <div class="card-body">
            <table class="table table-responsive-sm table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Sequence</th>
                        <th>Date Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allPeople as $people)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $people->name }}</td>
                        <td>{{ $people->sequence }}</td>
                        <td>{{ $people->created_at }}</td>
                        <td>
                            <a href="{{ route('admin.people.edit', ['people' => $people->id]) }}">
                                <button class="btn btn-outline-primary" type="button">Edit</button>
                            </a>
                            <button class="btn btn-outline-danger delete-pop" type="button">Delete</button>

                            <span class="delete-event">
                                <div class="modal fade" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delete Event</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="POST" action="{{ route('admin.people.delete', ['people' => $people->id]) }}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="modal-body">
                                                    <p class="modal-font">Are you sure you want to delete this people?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('styles')
    <style>
        
    </style>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.notification').find('.modal').modal('show');
        });

        $(".delete-pop").click(function(){
            $(this).parent().find('.delete-event').find('.modal').modal('show');
        });
    </script>
@endsection