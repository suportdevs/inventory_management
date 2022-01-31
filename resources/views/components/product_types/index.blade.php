@extends('layout.app')

@section('content')

<div class="content-wrapper animate__animated animate__zoomIn animate__faster">
    <div class="content mx-auto">
        <div class="container-fluid pt-5">
            <div class="row mt-5 pt-3">
                <div class="col-md-12 justify-content-between d-flex">
                    <div>
                        <a href="index.html" class="text-decoration-none small text-muted"><i class="fas fa-tachometer-alt"></i>
                            Dashboard / </a>
                        <span class="text-decoration-none small text-muted">Product Types</span>
                    </div>
                    <div>
                        <div>
                            <span id="print-date" class="small text-muted"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if (session('status'))
<div class="status-wrapper content mx-auto">
    <div class="container-fluid pt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success d-flex align-items-center justify-content-between" role="alert">
                    <div>
                        {{ session('status') }}
                    </div>
                    <button type="button" class="btn btn-close text-right" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<main class="content-wrapper animate__animated animate__zoomIn animate__faster">
    <div class="content mx-auto">
        <div class="container-fluid">
            <!-- Top Statistics -->
            <div class="row py-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-white d-flex align-items-center justify-content-between py-3">
                            <div>
                                <h4 class="card-title fw-bold text-muted mb-0">
                                    Product Types <small class="fw-normal">Data List</small>
                                </h4>
                                <p class="small text-muted d-inline-block">Product Types Management Database</p>
                            </div>
                            <div>
                                <a href="{{ url('product_types/create') }}" class="btn btn-primary rounded-circle shadow"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body" width="100%">
                            <table class="table table-bordered table-striped text-muted">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Created At</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($product_types as $item)
                                    <tr>
                                        <td>{{ $item->firstItem+$loop->index}}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ url('user/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-wrench"></i></a>
                                            <a href="" class="btn btn-warning btn-sm text-white"><i class="fas fa-desktop"></i></a>
                                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection