<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = [
            [
                'name' => "yassir",
                "email" => "mail@mail.com"
            ],
            [
                'name' => "anas",
                "email" => "anas@mail.com"
            ],
        ];

        return view("dashboard", ["usersList" => $users]);
    }
}
