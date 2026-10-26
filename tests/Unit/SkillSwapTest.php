<?php

use App\Services\SkillSwap;

beforeEach(function () {
    $this->skillSwap = new SkillSwap;

    $this->skills = [
        ['title' => 'Python Tutoring', 'category' => 'Programming', 'price' => 20],
        ['title' => 'Guitar Lessons', 'category' => 'Music', 'price' => 15],
        ['title' => 'Resume Review', 'category' => 'Career', 'price' => 0],
        ['title' => 'Web Development', 'category' => 'Programming', 'price' => 25],
    ];
});

describe('filterSkillsByCategory', function () {
    test('filters skills by category', function () {
        $result = $this->skillSwap->filterSkillsByCategory($this->skills, 'Programming');

        expect($result)->toBe([
            ['title' => 'Python Tutoring', 'category' => 'Programming', 'price' => 20],
            ['title' => 'Web Development', 'category' => 'Programming', 'price' => 25],
        ]);
    });

    test('returns all skills for the All category', function () {
        $result = $this->skillSwap->filterSkillsByCategory($this->skills, 'All');

        expect($result)->toBe($this->skills);
    });

    test('returns an empty array when no skills match', function () {
        $result = $this->skillSwap->filterSkillsByCategory($this->skills, 'Cooking');

        expect($result)->toBe([]);
    });
});

describe('calculateTotalCost', function () {
    test('returns the correct total for different rates and hours', function () {
        expect($this->skillSwap->calculateTotalCost(20, 2))->toEqual(40);
        expect($this->skillSwap->calculateTotalCost(15, 3))->toEqual(45);
    });

    test('returns 0 for a free session', function () {
        expect($this->skillSwap->calculateTotalCost(0, 3))->toEqual(0);
    });

    test('returns 0 for zero hours', function () {
        expect($this->skillSwap->calculateTotalCost(20, 0))->toEqual(0);
    });

    test('returns the correct total for decimal hours', function () {
        expect($this->skillSwap->calculateTotalCost(25, 1.5))->toEqual(37.5);
    });
});
