@extends('layouts.app', ['title' => 'Profile'])

@section('content')
    <div class="container mt-3">


        <div class="bg-light p-3 col-5 mx-auto">

            <div class="col mb-3">Register</div>

           <div class="mb-3">
            <form action="" method="post">
                @csrf

                <input class="form-control mb-3" type="text" name="" placeholder="Name" id="">
                <input class="form-control mb-3" type="email" name="" placeholder="Email" id="">
                <input class="form-control mb-3" type="text" name="" placeholder="Student ID Number" id="">
                <input class="form-control mb-3" type="password" name="" placeholder="Password" id="">
                <input class="form-control mb-3" type="password" name="" placeholder="ConfirmPassword" id="">
                <button class="btn btn-primary" type="submit">Register</button>
            </form>

           </div>

        </div>



    </div>
@endsection
