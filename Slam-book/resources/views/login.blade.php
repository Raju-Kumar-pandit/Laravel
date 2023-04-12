<x-layout>
    <div class="container-flud p-2 bg-baner">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mt-5 p-5 text-center">
                    <h2 class="text-info">Your Welcome!</h2>
                    <h5 class="text-info">You can create own your Slam Book for memories yor funny moment in your life with his friend and families.</h5>
                </div>
                <div class="col-md-5 p-3">
                    <h3 class="m-5 text-info text-center">User Login</h3>
                    <form action="/login" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <input type="email" name="email" id="email" class="form-control mt-3" placeholder="Please Enter email.." required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                        <input type="password" name="password" id="password" class="form-control mt-3" placeholder="Please Enter Password..">
                        <button type="submit" class="btn bg-info text-white mt-3">Log In</button>
                        <hr>
                    </form>
                    <p>Are you not registered? Now Go to <a href="/register">Register</a></p>
                    <hr>
                    <p>Forgot Password? <a href="">Go to</a></p>
                    <div class="p-3 mb-2 bg-info text-white text-center rounded border-2">Thank you!</div>
                </div>
            </div>
        </div>
    </div>
</x-layout>