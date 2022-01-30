@extends('layout.app')

@section('content')

<!-- Off Canvas Button -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <div class="z-index-1">
            <h5 class="text-white fw-bold"><i class="fas fa-palette"></i> Settings</h5>
            <p>Set your own customized style</p>
        </div>
        <button type="button" class="btn-close text-reset z-index-1" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fas fa-times"></i></button>
    </div>
    <div class="offcanvas-body text-center mx-auto">
        <div class="d-flex mx-auto justify-content-center">
            <div id="mode">
                <div class="light shadow"><i id="modeIcon" class='fas fa-sun'></i></div>
            </div>
        </div>

        <div class="theme-setting-wrapper mt-5 text-start">
            <h5 class="fw-bold">Color Schema</h5>
            <p>Choose the perfect color mode for your app.</p>
            <div class="row">
                <div class="col-6">
                    <div class="single-theme-switcher mt-3">
                        <label for="themeSwitcherLight" class="border border-3 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="80" viewBox="0 0 228 120" fill="none">
                                <path d="M0 0H228V120H0V0Z" fill="white" />
                                <rect x="29" y="54" width="144" height="53" rx="2" fill="#F6F8FA" />
                                <rect x="184" y="54" width="32" height="36" rx="2" fill="#F6F8FA" />
                                <rect opacity="0.3" x="29" y="59" width="144" height="12" fill="#34D058" />
                                <path opacity="0.6" d="M0 0H228V24H0V0Z" fill="#F6F8FA" />
                                <rect x="13" y="9" width="32" height="6" rx="3" fill="#D1D5DA" />
                                <rect x="29" y="36" width="48" height="6" rx="3" fill="#D1D5DA" />
                                <rect x="34" y="62" width="64" height="6" rx="3" fill="#34D058" />
                                <rect x="210" y="36" width="6" height="6" rx="1" fill="#D73A49" />
                                <rect x="202" y="36" width="6" height="6" rx="1" fill="#34D058" />
                                <rect x="53" y="9" width="32" height="6" rx="3" fill="#D1D5DA" />
                                <rect x="93" y="9" width="32" height="6" rx="3" fill="#D1D5DA" />
                            </svg>
                        </label>
                        <div>
                            <input type="radio" class="form-check-input" name="theme-color" id="themeSwitcherLight">
                            <label for="themeSwitcherLight">Light</label>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="single-theme-switcher mt-3">
                        <label for="themeSwitcherContrast" class="border border-3 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="80" viewBox="0 0 228 120" fill="none">
                                <path d="M0 0H228V120H0V0Z" fill="white" />
                                <rect x="29.5" y="54.5" width="143" height="52" rx="1.5" stroke="#24292F" />
                                <rect x="184.5" y="54.5" width="31" height="35" rx="1.5" stroke="#24292F" />
                                <rect x="30" y="59" width="142" height="12" fill="#D2FEDB" />
                                <path opacity="0.6" d="M0 0H228V23H0V0Z" fill="white" />
                                <rect x="1" y="23" width="226" height="1" fill="#D1D5DA" />
                                <rect x="13" y="9" width="32" height="6" rx="3" fill="#24292F" />
                                <rect x="29" y="36" width="48" height="6" rx="3" fill="#24292F" />
                                <rect x="34" y="62" width="64" height="6" rx="3" fill="#055D20" />
                                <rect x="210" y="36" width="6" height="6" rx="1" fill="#A0111F" />
                                <rect x="202" y="36" width="6" height="6" rx="1" fill="#055D20" />
                                <rect x="53" y="9" width="32" height="6" rx="3" fill="#24292F" />
                                <rect x="93" y="9" width="32" height="6" rx="3" fill="#24292F" />
                            </svg>
                        </label>
                        <div>
                            <input type="radio" class="form-check-input" name="theme-color" id="themeSwitcherContrast">
                            <label for="themeSwitcherContrast">Light high contrast</label>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="single-theme-switcher mt-3">
                        <label for="themeSwitcherDark" class="border border-3 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="80" viewBox="0 0 228 120" fill="none">
                                <path d="M0 0H228V120H0V0Z" fill="#161B22" />
                                <rect x="29" y="54" width="144" height="53" rx="2" fill="#30363D" />
                                <rect x="184" y="54" width="32" height="36" rx="2" fill="#30363D" />
                                <rect opacity="0.3" x="29" y="59" width="144" height="12" fill="#2EA043" />
                                <path opacity="0.6" d="M0 0H228V23H0V0Z" fill="#484F58" />
                                <rect x="13" y="9" width="32" height="6" rx="3" fill="#8B949E" />
                                <rect x="29" y="36" width="48" height="6" rx="3" fill="#6E7681" />
                                <rect x="34" y="62" width="64" height="6" rx="3" fill="#3FB950" />
                                <rect x="210" y="36" width="6" height="6" rx="1" fill="#DA3633" />
                                <rect x="202" y="36" width="6" height="6" rx="1" fill="#3FB950" />
                                <rect x="53" y="9" width="32" height="6" rx="3" fill="#8B949E" />
                                <rect x="93" y="9" width="32" height="6" rx="3" fill="#8B949E" />
                            </svg>
                        </label>
                        <div>
                            <input type="radio" class="form-check-input" name="theme-color" id="themeSwitcherDark">
                            <label for="themeSwitcherDark">Dark default</label>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="single-theme-switcher mt-3">
                        <label for="themeSwitcherDarkContrast" class="border border-3 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="80" viewBox="0 0 228 120" fill="none">
                                <path d="M0 6C0 2.68629 2.68629 0 6 0H222C225.314 0 228 2.68629 228 6V120H0V6Z" fill="#0A0C10" />
                                <path d="M-0.5 -0.5H228.5V23.5H-0.5V-0.5Z" fill="#0A0C10" stroke="#7A828E" />
                                <rect x="29.5" y="54.5" width="143" height="52" rx="1.5" stroke="#7A828E" />
                                <rect x="184.5" y="54.5" width="31" height="35" rx="1.5" stroke="#7A828E" />
                                <rect opacity="0.3" x="30" y="59" width="142" height="12" fill="#2EA043" />
                                <rect x="34" y="62" width="64" height="6" rx="3" fill="#26CD41" />
                                <rect x="210" y="36" width="6" height="6" rx="1" fill="#FF4445" />
                                <rect x="202" y="36" width="6" height="6" rx="1" fill="#26CD41" />
                                <rect opacity="0.8" x="13" y="9" width="32" height="6" rx="3" fill="#F0F3F6" />
                                <rect opacity="0.8" x="29" y="36" width="48" height="6" rx="3" fill="#F0F3F6" />
                                <rect opacity="0.8" x="53" y="9" width="32" height="6" rx="3" fill="#F0F3F6" />
                                <rect opacity="0.8" x="93" y="9" width="32" height="6" rx="3" fill="#F0F3F6" />
                            </svg>
                        </label>
                        <div>
                            <input type="radio" class="form-check-input" name="theme-color" id="themeSwitcherDarkContrast">
                            <label for="themeSwitcherDarkContrast">Dark high contrast</label>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="single-theme-switcher mt-3">
                        <label for="themeSwitcherDiamond" class="border border-3 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="80" viewBox="0 0 228 120" fill="none">
                                <path d="M0 0H228V120H0V0Z" fill="#21262D" />
                                <rect opacity="0.8" x="29" y="54" width="144" height="53" rx="2" fill="#30363D" />
                                <rect opacity="0.8" x="184" y="54" width="32" height="36" rx="2" fill="#30363D" />
                                <rect x="29" y="59" width="144" height="12" fill="#32423D" />
                                <path d="M0 0H228V23H0V0Z" fill="#30363D" />
                                <rect x="13" y="9" width="32" height="6" rx="3" fill="#484F58" />
                                <rect x="29" y="36" width="48" height="6" rx="3" fill="#30363D" />
                                <rect opacity="0.7" x="34" y="62" width="64" height="6" rx="3" fill="#57AB5A" />
                                <rect opacity="0.7" x="210" y="36" width="6" height="6" rx="1" fill="#D24845" />
                                <rect opacity="0.7" x="202" y="36" width="6" height="6" rx="1" fill="#57AB5A" />
                                <rect x="53" y="9" width="32" height="6" rx="3" fill="#484F58" />
                                <rect x="93" y="9" width="32" height="6" rx="3" fill="#484F58" />
                            </svg>
                        </label>
                        <div>
                            <input type="radio" class="form-check-input" name="theme-color" id="themeSwitcherDiamond">
                            <label for="themeSwitcherDiamond">Dark dimmed</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex mt-5 d-grid offcanvas-collapse">
            <a class="btn block" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Dashboard
                <i class="fas fa-chevron-up float-right"></i>
            </a>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the
                    user activates the relevant trigger.
                </div>
            </div>
            <a class="btn block" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                Themes
                <i class="fas fa-chevron-up float-right"></i>
            </a>
            <div class="collapse" id="collapseExample1">
                <div class="card card-body d-flex">

                    <!-- <div>
                
            </div>
            <div>
              
            </div> -->
                </div>
            </div>
        </div>


    </div>
</div>
<!-- End Off Canvas Button -->

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
        <div class="content-fluid">
            <!-- Top Statistics -->
            <div class="row py-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-white d-flex justify-content-between py-3">
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
                                        <td><img src="assets/images/user/u1.jpg" width="50px" alt=""></td>
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
                                        <td><img src="assets/images/user/u1.jpg" width="50px" alt=""></td>
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
                                        <td><img src="assets/images/user/u1.jpg" width="50px" alt=""></td>
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
                                        <td><img src="assets/images/user/u1.jpg" width="50px" alt=""></td>
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
                                        <td><img src="assets/images/user/u1.jpg" width="50px" alt=""></td>
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
                                        <td><img src="assets/images/user/u1.jpg" width="50px" alt=""></td>
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
                                        <td><img src="assets/images/user/u1.jpg" width="50px" alt=""></td>
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