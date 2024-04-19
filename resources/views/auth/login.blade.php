<x-guest-layout>

    <x-slot name="titles">
        Login
    </x-slot>
 <!-- Session Status -->
 <x-auth-session-status class="mb-4" :status="session('status')" />


    <div class="fixed-background"></div>
    <main>
        <div class="container">
            <div class="row h-100">
                <div class="col-12 col-md-10 mx-auto my-auto">
                    <div class="card auth-card">
                        <div class="position-relative image-side ">

                            <p class=" text-white h2">GET YOUR FINANCES IN ORDER</p>

                            <p class="white mb-0">
                                Please use your credentials to login.
                                <br>If you are not a member, please
                                <a href="{{ route('register') }}"  style="font-size:16px;color:white !important;text-decoration:underline;">Register</a>.
                            </p>
                        </div>
                        <div class="form-side">
                            <a href="#">
                                <span style="margin-left: -10px;"><img class="mb-4" src="assets/logos/fulllogo.png" height="100" /></span>
                            </a>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group ">
                                    <label >Email</label>
                                    <input type="text" class="form-control" id="email" name="email" :value="old('email')" required autofocus autocomplete="username"  placeholder="Eg. johndoe@gmail.com">
                                </div>

                                <div class="form-group ">
                                    <label>Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                    required autocomplete="current-password" placeholder="Enter Password">
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="forgot-password">Forget password?</a>
                                    <button class="btn btn-primary btn-lg btn-shadow" type="submit">LOGIN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-guest-layout>
