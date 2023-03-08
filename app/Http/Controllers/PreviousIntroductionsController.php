<?php

namespace App\Http\Controllers;

use App\Models\Introduction;
use Illuminate\View\View;

class PreviousIntroductionsController extends Controller
{
    public function __invoke(): View
    {
        $introductions = Introduction::query()->latest()->get();

        return view('previous-introductions')->with('introductions', $introductions);
    }
}
