<x-app-layout>
    <div class="container-fluid">
        <p>
            Welcome to the student/user creation section. Please fillout out all the information you have on the user.
        </p>
        <p>
            All the optional fields can the later be updated on users profile.
        </p>

        <div class="d-flex justify-content-center align-items-center mt-5">
            <div class="col-md-8">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Create User</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Reset Form</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Submit Form</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <form class="" method="POST" action="{{ route('register')}}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0">
                                    <select class="custom-select custom-select-sm" name="title">
                                        <option selected>Select a title</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Miss">Miss</option>
                                        <option value="Dr">Dr</option>
                                        <option value="Prof">Prof</option>
                                      </select>
                                </div>
                                <div class="col-sm-5 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="firstNames"
                                        value="{{ old('firstNames') }}" required autofocus placeholder="First Name">
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control form-control-user" name="lastName"
                                        placeholder="Last Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="idNumber"
                                    placeholder="Identity Number">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" name="email"
                                    placeholder="Email Address">
                            </div>
                            <div class="form-group row">
                                <div class="col-12 col-md-3 mb-3 mb-sm-0">
                                    {{-- <input type="grade" class="form-control form-control-user" name="password"
                                        placeholder="Password"> --}}
                                    {{-- turn this to a select drop down with grade 8 to 12 --}}
                                    <select class="custom-select custom-select-sm" name="grade">
                                        <option selected>Select a Grade</option>
                                        <option value="8">Grade 8</option>
                                        <option value="9">Grade 9</option>
                                        <option value="10">Grade 10</option>
                                        <option value="11">Grade 11</option>
                                        <option value="12">Grade 12</option>
                                      </select>
                                </div>
                                <div class="col-12 col-md-3">
                                    <input type="text" class="form-control form-control-user" name="section"
                                        placeholder="Section (A,B,C,...)">
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="text" class="form-control form-control-user" name="parent_id"
                                        placeholder="Parent ID Number">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>