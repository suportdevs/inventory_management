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
                        <a href="" class="text-decoration-none small text-muted"><i class="fas fa-users"></i> Users / </a>
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


<main class="content-wrapper animate__animated animate__zoomIn animate__faster">
    <div class="content mx-auto">
        <div class="container-fluid">
            <!-- Top Statistics -->
            <div class="row py-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-white d-flex align-items-center justify-content-between py-3">
                            <div>
                                <h6 class="card-title fw-bold text-muted mb-0">
                                    <i class="fas fa-users"></i> Users <small class="fw-normal">Data List</small>
                                </h6>
                                <p class="small text-muted d-inline-block">User Management Database</p>
                            </div>
                            <div>
                                <a href="{{ url('user/create') }}" class="btn btn-primary rounded-circle shadow"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body" width="100%">
                            <table class="table table-bordered table-striped text-muted">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Picture</th>
                                        <th>Address</th>
                                        <th>Permission</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Mark Deo</td>
                                        <td>example@example.com</td>
                                        <td><img src="{{ asset('inventory_management/assets/images/user/u1.jpg') }}" width="50px" alt=""></td>
                                        <td>Example Address #0005</td>
                                        <td><span class="badge bg-info">Access</span></td>
                                        <td>
                                            <a href="{{ url('user/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-wrench"></i></a>
                                            <a href="" class="btn btn-warning btn-sm text-white"><i class="fas fa-desktop"></i></a>
                                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>Mark Deo</td>
                                        <td>example@example.com</td>
                                        <td><img src="{{ asset('inventory_management/assets/images/user/u1.jpg') }}" width="50px" alt=""></td>
                                        <td>Example Address #0005</td>
                                        <td><span class="badge bg-danger">Unaccess</span></td>
                                        <td>
                                            <a href="{{ url('user/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-wrench"></i></a>
                                            <a href="" class="btn btn-warning btn-sm text-white"><i class="fas fa-desktop"></i></a>
                                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Mark Deo</td>
                                        <td>example@example.com</td>
                                        <td><img src="{{ asset('inventory_management/assets/images/user/u1.jpg') }}" width="50px" alt=""></td>
                                        <td>Example Address #0005</td>
                                        <td><span class="badge bg-info">Access</span></td>
                                        <td>
                                            <a href="{{ url('user/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-wrench"></i></a>
                                            <a href="" class="btn btn-warning btn-sm text-white"><i class="fas fa-desktop"></i></a>
                                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>Mark Deo</td>
                                        <td>example@example.com</td>
                                        <td><img src="{{ asset('inventory_management/assets/images/user/u1.jpg') }}" width="50px" alt=""></td>
                                        <td>Example Address #0005</td>
                                        <td><span class="badge bg-info">Access</span></td>
                                        <td>
                                            <a href="{{ url('user/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-wrench"></i></a>
                                            <a href="" class="btn btn-warning btn-sm text-white"><i class="fas fa-desktop"></i></a>
                                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>Mark Deo</td>
                                        <td>example@example.com</td>
                                        <td><img src="{{ asset('inventory_management/assets/images/user/u1.jpg') }}" width="50px" alt=""></td>
                                        <td>Example Address #0005</td>
                                        <td><span class="badge bg-info">Access</span></td>
                                        <td>
                                            <a href="{{ url('user/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-wrench"></i></a>
                                            <a href="" class="btn btn-warning btn-sm text-white"><i class="fas fa-desktop"></i></a>
                                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>Mark Deo</td>
                                        <td>example@example.com</td>
                                        <td><img src="{{ asset('inventory_management/assets/images/user/u1.jpg') }}" width="50px" alt=""></td>
                                        <td>Example Address #0005</td>
                                        <td><span class="badge bg-danger">Unaccess</span></td>
                                        <td>
                                            <a href="{{ url('user/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-wrench"></i></a>
                                            <a href="" class="btn btn-warning btn-sm text-white"><i class="fas fa-desktop"></i></a>
                                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>Mark Deo</td>
                                        <td>example@example.com</td>
                                        <td><img src="{{ asset('inventory_management/assets/images/user/u1.jpg') }}" width="50px" alt=""></td>
                                        <td>Example Address #0005</td>
                                        <td><span class="badge bg-info">Access</span></td>
                                        <td>
                                            <a href="{{ url('user/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-wrench"></i></a>
                                            <a href="" class="btn btn-warning btn-sm text-white"><i class="fas fa-desktop"></i></a>
                                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
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