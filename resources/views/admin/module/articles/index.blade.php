@extends('adminlte::page')

@section('title', 'Article')

@section('content_header')
    <h1>Article</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('admin.article.create') }}" class="btn btn-success">Create</a>
    </div>
    <div class="card-body">
        <table class="datatable table table-bordered table-hover">
            <thead>
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ strip_tags($article->body) > 250 ? substr(strip_tags($article->body), 0 , 250) . "..." : strip_tags($article->body) }}</td>
                        <td>
                            <div class="d-flex">
                                {{-- <a href="{{ route('admin.article.show', ['article' => $article->id]) }}" class="btn btn-info">
                                    <i class="fas fa-search"></i>
                                </a> --}}
                                <a href="{{ route('admin.article.edit', ['article' => $article->id]) }}" class="btn btn-warning">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form method="POST" action="{{ route('admin.article.destroy', ['article' => $article->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-delete">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button type="submit" class="d-none"></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.1/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $(".datatable").DataTable()
            $('table').on('click', '.btn-delete', function(){
                const current = $(this)
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        current.closest('form').find('button[type="submit"]').trigger('click')
                    }
                })
            })
        })
    </script>
    @if (session('success'))
    <script type="text/javascript">
        Swal.fire(
            'Success!',
            '{{ session('success') }}',
            'success'
            )
    </script>
    @endif
@stop

@section('plugins.Datatables', true)