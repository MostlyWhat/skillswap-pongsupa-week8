<?php

use Inertia\Testing\AssertableInertia as Assert;

test('home page sends all the skills from the catalog', function () {
    $response = $this->get(route('home'));

    $response->assertInertia(fn (Assert $page) => $page
        ->component('Welcome')
        ->has('skillsByCategory.All', 4)
        ->has('skillsByCategory.All.0', fn (Assert $skill) => $skill
            ->where('title', 'Chemistry Tutoring (Intermediate)')
            ->where('category', 'Chemistry')
            ->where('price', 20)
            ->etc()
        )
    );
});

test('home page includes a free skill', function () {
    $response = $this->get(route('home'));

    $response->assertInertia(fn (Assert $page) => $page
        ->where('skillsByCategory.All.3.tutor', 'Jami Doe')
        ->where('skillsByCategory.All.3.price', 0)
    );
});

test('home page sends the catalog categories with All first', function () {
    $response = $this->get(route('home'));

    $response->assertInertia(fn (Assert $page) => $page
        ->where('categories', ['All', 'Chemistry', 'Computer Science', 'Engineering Science'])
    );
});

test('home page sends the skills filtered for each category', function () {
    $response = $this->get(route('home'));

    $response->assertInertia(fn (Assert $page) => $page
        ->has('skillsByCategory.Chemistry', 1)
        ->has('skillsByCategory.Computer Science', 2)
        ->where('skillsByCategory.Computer Science.0.tutor', 'Jane Doe')
        ->where('skillsByCategory.Computer Science.1.tutor', 'Jami Doe')
        ->has('skillsByCategory.Engineering Science', 1)
    );
});
