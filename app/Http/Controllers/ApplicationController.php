<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function create_application(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "email" => "required|email",
            "name" => "required|max:50"
        ], [
            "email.required"=>"Поле обязательного заполнения",
            "name.required"=>"Поле обязательного заполнения",
            "name.max"=>"Имя должно содержать максимум 50 символов",
            "email.email"=>"Адрес электронной почты должен быть корректного типа",
              
        ]);
        $application_info = $request->all();

        Application::create([
            "email"=> $application_info["email"],
            "name"=> $application_info["name"],
            "course_id"=> $application_info["course"],

        ]);

        return redirect("/");
    }

    public function confirm($id_application)
    {
        $application = Application::find($id_application);

        $application->is_confirm = 1;

        $application->save();

        return redirect("/admin");
    }
}
