<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $applications = Application::all();

        foreach($applications as $key => $application){
        $applications[$key]->course_id = $this->get_course_from_id($application->course_id);
    }
    
        return view("admin.admin",[
        "applications"=>$applications,
        "categories"=>Category::all()
    ]);
    }

    protected function get_course_from_id($id_course){
        return Course::find($id_course)->title;
    }
}
