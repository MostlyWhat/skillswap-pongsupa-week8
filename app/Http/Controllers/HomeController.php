<?php

namespace App\Http\Controllers;

use App\Services\SkillCatalog;
use App\Services\SkillSwap;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    /**
     * Show the home page with the skill cards.
     */
    public function __invoke(SkillCatalog $catalog, SkillSwap $skillSwap): Response
    {
        // Get all the skills and the filter categories from the catalog
        $skills = $catalog->all();
        $categories = $catalog->categories();

        // Filtered skills for each category
        $skillsByCategory = [];

        // Go through all the categories
        foreach ($categories as $category) {
            // Filter the skills for this category and keep them under the category name
            $skillsByCategory[$category] = $skillSwap->filterSkillsByCategory($skills, $category);
        }

        // Send the categories and the filtered skills to the page
        return Inertia::render('Welcome', [
            'categories' => $categories,
            'skillsByCategory' => $skillsByCategory,
        ]);
    }
}
