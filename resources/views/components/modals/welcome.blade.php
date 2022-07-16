{{-- Register --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <div class="card-body" id="auth-register">
                    <h3 class="text-center">Sign In</h3>
                    <a href="#" class="text-info d-flex justify-content-center auth-login">I already have an
                        account In</a>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf

                        <div class="row d-flex justify-content-center">

                            <div class="form-group col-10">
                                <label for="fullname" class="text-dark h6">Full name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group col-10">
                                <label for="email" class="text-dark h6">Email</label>
                                <input type="email" class="form-control" name="email" required>
                                <p class="text-danger">{!! $errors -> first('email') !!}</p>
                            </div>
                            <div class="form-group col-10">
                                <label for="password" class="text-dark h6">Password</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="password" class="form-control rounded-left password" name="password"
                                        required>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text eye-input rounded-right">
                                            <i class="bi-eye-slash eye"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-10">
                                <input type="checkbox" name="term" id="term" required>
                                <span class="h6">I accept <a href="{{ route('term') }}" class="text-info h6"> Privacy
                                        Policy</a></span>
                            </div>
                        </div>


                        <div class="row d-flex justify-content-center">
                            <p class="col-12 text-dark text-center">Or connect with</p>
                            <div class="d-flex justify-content-between" id="auth">
                                <img src="{{ asset('img/social/google.png') }}" width="53rem"
                                    class="rounded border border-secondary" alt="">
                                {{-- <a href="{{ route('auth.social', 'facebook') }}" class="col-6"><img
                                    src="{{ asset('img/social/facebook.png') }}" width="50rem" class="rounded"
                                    alt=""></a> --}}
                            </div>
                        </div>

                        <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-lg d-grid gap-2 btn-primary">Submit</button>
                        </div>
                </div>
                </form>
            </div>


            {{-- Login --}}
            <div class="card-body d-none" id="auth-login">
                <h3 class="text-center">Login</h3>
                <a href="#" class="text-info d-flex justify-content-center auth-register">I don't have an
                    account</a>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="row d-flex justify-content-center">

                        <div class="form-group col-10">
                            <label for="email" class="text-dark h6">Email</label>
                            <br>
                            {!! $errors -> first('email') !!}
                            <input type="email" class="form-control" name="email" required>

                        </div>
                        <div class="form-group col-10">
                            <label for="password" class="text-dark h6">Password</label>
                            <br>
                            {!! $errors -> first('password') !!}
                            <div class="input-group mb-2 mr-sm-2">
                                <input type="password" class="form-control rounded-left password" name="password"
                                    required>
                                <div class="input-group-prepend">
                                    <div class="input-group-text eye-input rounded-right">
                                        <i class="bi-eye-slash eye"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <p class="col-12 text-dark text-center">Or connect with</p>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('auth.social', 'google') }}" class="col-6"><img
                                    src="{{ asset('img/social/google.png') }}" width="53rem"
                                    class="rounded border border-secondary" alt=""></a>
                            {{-- <a href="{{ route('auth.social', 'facebook') }}" class="col-6"><img
                                src="{{ asset('img/social/facebook.png') }}" width="50rem" class="rounded" alt=""></a>
                            --}}
                        </div>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-lg d-grid gap-2 btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
</div>
