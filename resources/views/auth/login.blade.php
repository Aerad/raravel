@extends('layouts.app', ['title' => 'Profile'])

@section('content')
    <style>
        .login {
            color: black;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            text-align: center;
            font-size: 20px;
        }

        .box1 {
            background: #4ADEDE;
            margin-top: 150px;

        }

        .button1 {
            color: black;
            background: #1AA7EC;
            border-color: black;
        }

        .forgot {
            color: black;
            text-decoration: none;
        }
    </style>
    <div class="container mt-3">


        <div class=" box1 col-5 mx-auto p-3">

            <div class=" login col mb-3">LOGIN</div>

            <form action="{{ route('auth.login.store') }}" method="post">
                @csrf

                <input class="form-control mb-3" type="email" name="email" placeholder="Email" id="">
                <input class="form-control mb-3" type="password" name="password" placeholder="Password" id="">

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="remember-me">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember Me?
                    </label>
                </div>


                <button class="button1 btn" type="submit">Login</button>
                <br>

                <a class="forgot" href="">Forgot Password?</a>
            </form>
        </div>

    </div>



    </div>
@endsection
