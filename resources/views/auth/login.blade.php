@extends('layouts.app', ['title' => 'Profile'])

@section('content')
    <div class="container mt-3">


        <div class="col-5 mx-auto bg-light p-3 mt-5">

            <div class="col mb-3">Login</div>

            <form action="" method="post">
                @csrf

                <input class="form-control mb-3" type="email" name="email" placeholder="Email" id="">
                <input class="form-control mb-3" type="password" name="password" placeholder="Password" id="">

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="remember-me">
                    <label class="form-check-label" for="flexCheckDefault">
                      Remember Me?
                    </label>
                  </div>


                <button class="btn btn-primary" type="submit">Login</button>
                <br>
                <a href="">Forgot Password?</a>
            </form>

        </div>



    </div>
@endsection
