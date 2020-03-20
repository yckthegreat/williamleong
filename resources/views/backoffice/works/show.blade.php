@extends('backoffice.layouts.master')

@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i>All Works
        </div>

        <div class="card-body">
            <table class="table table-responsive-sm table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Date Created</th>
                        <th>Actions</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Yiorgos Avraamu</td>
                        <td>Commercial</td>
                        <td>2012/01/01</td>
                        <td><button class="btn btn-outline-primary" type="button">Edit</button></td>
                        <td>
                            <span>
                                <label class="switch switch-label switch-outline-primary-alt">
                                    <input class="switch-input" type="checkbox" checked="">
                                    <span class="switch-slider" data-checked="✓" data-unchecked="✕"></span>
                                </label>
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>Yiorgos Avraamu</td>
                        <td>Retail</td>
                        <td>2012/01/01</td>
                        <td><button class="btn btn-outline-primary" type="button">Edit</button></td>
                        <td>
                            <span>
                                <label class="switch switch-label switch-outline-primary-alt">
                                    <input class="switch-input" type="checkbox" checked="">
                                    <span class="switch-slider" data-checked="✓" data-unchecked="✕"></span>
                                </label>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>

            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#">Prev</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </div>
    </div>
</div>
    
@endsection