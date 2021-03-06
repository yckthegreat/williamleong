@extends('backoffice.layouts.master')

@section('content')

<div class="col-lg-12">

    @include('backoffice.components.notification')

    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i>Articles
        </div>

        <div class="card-body">
            <table class="table table-responsive-sm table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Sequence</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="{{ route('admin.articles.edit', ['article' => $article->id]) }}">
                                <button class="btn btn-outline-primary" type="button">Edit</button>
                            </a>
                            <button class="btn btn-outline-danger delete-pop" type="button">Delete</button>

                            <span class="delete-event">
                                <div class="modal fade" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delete Article</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="POST" action="{{ route('admin.articles.delete', ['article' => $article->id]) }}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="modal-body">
                                                    <p class="modal-font">Are you sure you want to delete this article?</p>
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