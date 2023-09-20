<x-layout>
    <!-- Messaggi di errore -->
    <div class="container-fluid mb-5 bg-grey">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="text-danger">{{ $error }}</p>
            @endforeach
        @endif
        @if(session()->has('message'))
            <div class="flex flex-row justify-center my2 alert alert-warning">
                {{session('message')}}
            </div>
        @endif

        <!-- Contenitore del form Login -->
        <section>
            <div class="container pt-5 ">
                <div class="row d-flex align-items-center justify-content-center ">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <!-- immagine laterale al login -->
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                            class="img-fluid" alt="Phone image">
                    </div>
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 ">
                        <form action="/login" method="post">
                            @csrf

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form1Example13">Email</label>
                                <input name="email" type="email" id="form1Example13" class="form-control form-control-lg" placeholder="mario.rossi@gmail.com" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form1Example23">Password</label>
                                <input name="password" type="password" id="form1Example23" class="form-control form-control-lg" placeholder="Zabra123!"/>
                            </div>

                            <div class="d-flex justify-content-around align-items-center mb-4">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                    <label class="form-check-label" for="form1Example3"> {{__('ui.remember_me')}} </label>
                                </div>
                                <a href="{{ route('auth.forgot-password') }}">{{__('ui.forgot_password')}} ?</a>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-lg btn-block">{{__('ui.login')}}</button>

                            <p class="text-center fw-bold mx-3 my-4 text-muted">OR</p>

                            <div class="row">
                                <div class="col-12 col-md-6 d-flex align-items-stretch">
                                    <a class="btn btn-primary btn-lg btn-block btn-login mb-3" style="background-color: #DB4437"
                                        href="{{ route('google.redirect') }}" role="button">
                                        <i class="fa-brands fa-google me-2"></i>{{__('ui.continue_with_google')}}
                                    </a>
                                </div>
                                <!-- <div class="col-12 col-md-6 d-flex d-none align-items-stretch">
                                    <a class="btn btn-primary btn-lg btn-block btn-login mb-3" style="background-color: #55acee"
                                        href="#!" role="button">
                                        <i class="fab fa-twitter me-2"></i>Continua con Twitter
                                    </a>
                                </div> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>
