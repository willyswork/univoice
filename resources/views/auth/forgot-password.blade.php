<x-guest-layout>
    <x-slot name="titles">
        Forgot Password
    </x-slot>

    <!-- Session Status -->
    <div class="fixed-background"></div>
    <main>
        <div class="container">
            <div class="row h-100">
                <div class="col-12 col-md-10 mx-auto my-auto">
                    <div class="card auth-card">
                        <div class="position-relative image-side ">

                            <p class=" text-white h2">GET YOUR ACCOUNT BACK</p>

                            <p class="white mb-0">
                                If you forgot your password please enter the details needs to retrieve your account.

                            </p>
                        </div>
                        <div class="form-side">
                            <a href="#">
                                <span style="margin-left: -10px;"><img class="mb-4" src="assets/logos/fulllogo.png" height="100" /></span>
                            </a>

                            <form>
                                <div class="form-group ">
                                    <label >Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Eg. johndoe@gmail.com">
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <button class="btn btn-primary btn-lg btn-shadow mt-4" type="submit">RESET</button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-guest-layout>
