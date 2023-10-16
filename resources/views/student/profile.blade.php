@extends('layouts.app', ['title' => 'Profile'])

@section('content')

<style>
.box {
    padding: 5px;
    background-color: yellow;
    border: 1px solid black;
    width: 300px;
    padding-left: 10px;
    margin-top: 20px;
    margin-left: 10px;
    border-radius: 10px;
}
</style>
<div class="box">

<h1 style="color: red; font-family:'Times New Roman', Times, serif">Student Profile</h1>



<div class="mt-3">
    {{ $id }}
    {{ $dob }}
</div>

<h3 style="font-family: sans-serif"> Olla Amigo!</h3>
</div>
@endsection

