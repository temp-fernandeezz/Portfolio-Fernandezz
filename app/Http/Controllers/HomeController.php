<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Settings\HomeSetting;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(HomeSetting $settings): View
    {
        $skillsSetting = DB::table('settings')
            ->where('group', 'home')
            ->where('name', 'skills')
            ->first();

        $skills = [];
        if ($skillsSetting && $skillsSetting->payload) {
            $skills = json_decode($skillsSetting->payload, true) ?? [];
        }

        return view('pages.home', [
            'settings' => $settings,
            'skills'   => $skills
        ]);
    }
}
