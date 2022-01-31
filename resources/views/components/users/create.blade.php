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
                    <div class="shadow-sm">
                        <div class="card">
                            <div class="card-header bg-white d-flex align-items-center justify-content-between py-3">
                                <div>
                                    <h4 class="card-title fw-bold text-muted mb-0">
                                        <i class="fas fa-users"></i> Users <small class="fw-normal">Data Create</small>
                                    </h4>
                                    <p class="small text-muted d-inline-block">User Management Database</p>
                                </div>
                                <div>
                                    <button class="btn btn-primary shadow" onclick="history.back(-1)"><i class="fas fa-reply"></i></button>
                                    <a href="" class="btn btn-secondary shadow"><i class="fas fa-list"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="container">
                                        <div class="row py-3">
                                            <div class="col-md-6">
                                                <label class="mb-2 text-muted" for="name">User Name</label>
                                                <input type="text" name="name" id="name" class="form-control" placeholder="User Name">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="mb-2 text-muted" for="email">User Email</label>
                                                <input type="email" name="email" id="email" class="form-control" placeholder="User Email" required>
                                            </div>
                                        </div>
                                        <div class="row py-3">
                                            <div class="col-md-6">
                                                <label class="mb-2 text-muted" for="password">Password</label>
                                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="mb-2 text-muted" for="password">Confirm Password</label>
                                                <input type="password" name="password" id="password" class="form-control" placeholder="Confirm Password" required>
                                            </div>
                                        </div>
                                        <div class="row py-3">
                                            <div class="col-md-12">
                                                <label class="mb-2 text-muted" for="description">Description</label>
                                                <textarea name="description" id="description" cols="40" rows="3" class="form-control" placeholder="Description..."></textarea>
                                            </div>
                                        </div>
                                        <div class="row py-3">
                                            <div class="col-md-6">
                                                <label class="mb-2 text-muted" for="permission">User Role</label>
                                                <select name="permission" id="permission" class="form-control">
                                                    <option value="">-- Select any Option --</option>
                                                    <option value="">Editor</option>
                                                    <option value="">Modarator</option>
                                                    <option value="">Administrator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="mb-2 text-muted" for="permission">Permission</label>
                                                <select name="permission" id="permission" class="form-control">
                                                    <option value="">-- Select any Option --</option>
                                                    <option value="">Basic Permission</option>
                                                    <option value="">General Permission</option>
                                                    <option value="">Advanced Permission</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row py-3">
                                            <div class="col-md-12 justify-content-between d-flex">
                                                <button class="btn btn-primary"><i class="fas fa-save"></i> Create</button>
                                                <button class="btn btn-warning" onclick="history.back(-1)"><i class="fas fa-reply"></i>
                                                    Back</button>
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
    </div>
</main>

@endsection