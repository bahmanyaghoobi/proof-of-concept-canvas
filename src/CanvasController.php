<?php

namespace UofT\Canvas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CanvasController extends Controller
{
    public function get_user($course_id) {
        return "I will return all students in the course with course id: " + $course_id;
    }
}
