<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentProfileController extends Controller
{
    public function show($id = null, $dob = null) {
        return view('student.profile', [
            'id' => $id,
            'dob' => $dob,
        ]);
    }
}
