@extends('layout.app')

@section('content')

<div class="content-wrapper animate__animated animate__zoomIn animate__faster">
    <div class="content mx-auto">
        <div class="container-fluid pt-5">
            <div class="row mt-5 pt-3">
                <div class="col-md-12 justify-content-between d-flex">
                    <div>
                        <a href="{{ url('/') }}" class="text-decoration-none small text-muted"><i class="fas fa-tachometer-alt"></i>
                            Dashboard / </a>
                        <a href="{{ url('/product_types') }}" class="text-decoration-none small text-muted"> Product Types / </a>
                        <span class="text-decoration-none small text-muted">Create</span>
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


@if($errors->any())
<div class="status-wrapper content mx-auto">
    <div class="container-fluid pt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger d-flex align-items-center justify-content-between" role="alert">
                    <div>
                        <ul class="m-0">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
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
                <div class="col-md-12 shadow-sm">
                    <div class="card">
                        <div class="card-header bg-white d-flex align-items-center justify-content-between py-3">
                            <div>
                                <h4 class="card-title fw-bold text-muted mb-0">
                                    Product Types <small class="fw-normal">Data Create</small>
                                </h4>
                                <p class="small text-muted d-inline-block">Product Types Management Database</p>
                            </div>
                            <div>
                                <button class="btn btn-primary shadow" onclick="history.back(-1)"><i class="fas fa-reply"></i></button>
                                <a href="" class="btn btn-secondary shadow"><i class="fas fa-list"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('product_types.store') }}" method="POST">
                                @csrf
                                <div class="container">
                                    <div class="row py-3  justify-content-center">
                                        <div class="col-md-6">
                                            <div class="col-md-12 py-3">
                                                <label class="mb-2 text-muted" for="name">Name</label>
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Product Type Name" required>
                                            </div>
                                            <div class="col-md-12 py-3">
                                                <label class="mb-2 text-muted" for="description">Description</label>
                                                <input type="description" name="description" id="description" class="form-control" placeholder="Description..." required>
                                            </div>
                                            <div class="col-md-12 py-3 justify-content-between d-flex">
                                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Create</button>
                                                <button class="btn btn-warning" onclick="history.back(-1)"><i class="fas fa-reply"></i>
                                                    Back</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection