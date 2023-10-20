@extends('layouts.app', ['title' => 'Profile'])

@section('content')
<style>
    .register {
        color: black;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        text-align: center;
        font-size: 20px;
    }

    .box1 {
        background: #FFF0DC;
        margin-top: 100px;

    }

    .button1 {
        color: black;
        background: #FEB72F;
        border-color: black;
    }


</style>
    <div class="container mt-3">


        <div class=" box1 p-3 col-5 mx-auto">

            <div class="register col mb-3">REGISTER</div>

           <div class="mb-3">
            <form action="" method="post">
                @csrf

                <input class="form-control mb-3" type="text" name="" placeholder="Name" id="">
                <input class="form-control mb-3" type="email" name="" placeholder="Email" id="">
                <input class="form-control mb-3" type="text" name="" placeholder="Student ID Number" id="">
                <input class="form-control mb-3" type="password" name="" placeholder="Password" id="">
                <input class="form-control mb-3" type="password" name="" placeholder="ConfirmPassword" id="">
                <button class="button1 btn btn-primary" type="submit">Register</button>
            </form>

           </div>

        </div>



    </div>
@endsection
