<?php

namespace App\Services;

class SkillSwap
{
    /**
     * Get the skills in the given category, or all skills for "All".
     *
     * @template TSkill of array{category: string}
     *
     * @param  list<TSkill>  $skills
     * @return list<TSkill>
     */
    public function filterSkillsByCategory(array $skills, string $category): array
    {
        // If no specific category then we can just return everything back
        if ($category === 'All') {
            return $skills;
        }

        // Return specific category
        $filteredSkills = [];

        // Go through all the skills
        foreach ($skills as $skill) {
            // If skill category is the same as the filter category
            if ($skill['category'] === $category) {
                // Append to filtered skill
                $filteredSkills[] = $skill;
            }
        }

        return $filteredSkills;
    }
}
