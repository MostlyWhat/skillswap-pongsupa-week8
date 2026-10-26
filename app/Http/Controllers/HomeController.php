<?php

namespace App\Http\Controllers;

use App\Services\SkillCatalog;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    /**
     * Show the home page with the skill cards.
     */
    public function __invoke(SkillCatalog $catalog): Response
    {
        return Inertia::render('Welcome', [
            'skills' => $catalog->all(),
        ]);
    }
}
