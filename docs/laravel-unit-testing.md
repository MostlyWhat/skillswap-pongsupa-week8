# Laravel Unit Testing and My Process for Assignment 6

## Summary

For Assignment 6, I used test-driven development (TDD) to add three functions to SkillSwap:
`filterSkillsByCategory`, `calculateTotalCost`, and `matchSkillsToUser`. The assignment examples were in JavaScript, but
my stack for SkillSwap is a Laravel application, so I ported the functions to PHP and wrote the tests with Pest. Each
function has its own branch and pull request. In each branch, I wrote the failing tests first, then the code, then the
UI. The branch was committed when all the tests were passing.

## Unit tests and feature tests in Laravel

Laravel supports 2 types of test, a unit and a feature test. The difference is that a unit test only tests one class or
function without starting the entire framework and feature starts the entire application. I used two types of tests for
this, since Svelte is on the frontend and Laravel is on the backend, so there is data being sent back and forth.

Unit tests were being used to test the PHP functions (filterSkillsByCategory, calculateTotalCost, matchSkillsToUser) in
the `app/Services/SkillSwap.php` with the test file `tests/Unit/SkillSwapTest.php`. Feature tests were being used to
test that the request from the frontend is handled, by sending a request to the route that the forms would send to, and
check if the return is appropriate in `tests/Feature/CalculateCostTest.php` and `tests/Feature/MatchSkillsTest.php`. The
feature test had two files for the cost calculator and for the filter for skills at the top, since both are separate
systems.

Reference: [Laravel Testing Documentation](https://laravel.com/framework/docs/testing)

### 2.2 Pest and PHPUnit

Laravel supports two test frameworks, Pest and PHPUnit, which is the PHP testing just like Jest on JavaScript. The
Laravel Svelte starter kit uses Pest, so I used Pest to match the existing tests and the documentation on their website.

### 2.3 The parts of a Pest test file

My unit test file uses these Pest features:

- `beforeEach()` creates a new `SkillSwap` object and a sample skills array. Each test gets the same starting copy of
  the `SkillSwap` object, so I know the starting point to check as all tests start with the same point.
- `describe()` puts the tests for one function into a group with the function name specified.
- `test()` is a single test. Each test checks one behavior if it matches the expected result and returns a pass or fail.
  The test stores a description to show in plain English what it does when the test command is run.
- `expect()->toBe()` checks for the same value and the same type (`===`). I use it for arrays, so the order and the
  contents must be exact as the result I want.
- `expect()->toEqual()` checks for the same value only (`==`). I use it for the cost, because `20 * 2` gives the integer
  `40`, but `25 * 1.5` gives the float `37.5`. Both are still numbers so type check is not really important, and it
  works in case some decides to put something with a .0 at the end.

## My process completing the assignment

I copied my Week 7 application and moved the skill data into `app/Services/SkillCatalog.php`. The
`HomeController` sends the catalog to the Svelte page. The three new functions go in the SkillSwap class in
`app/Services/SkillSwap.php`. The functions take plain arrays and return plain arrays, so a unit test can work for that
function without starting the app. For each function, I followed the red, green, refactor cycle as resource 3 specified.
I write a failing code, I write the function to test to make the code pass, and then I commit a better code. Then the UI
can call the function after all the PHP implementation passes the check. So the commit history is that below.

1. `test: added tests for filterSkillsByCategory`
2. `feat: implement filterSkillsByCategory`
3. `feat: connect filterSkillsByCategory to UI`
4. `test: added tests for calculateTotalCost`
5. `feat: implement calculateTotalCost`
6. `feat: connect calculateTotalCost to UI`
7. `test: added tests for matchSkillsToUser`
8. `feat: implement matchSkillsToUser`
9. `feat: connect matchSkillsToUser to UI`

All the tests have description of what it tests in there, but here are the files to check since the template comes with
some existing tests.

Actual UI and request tests (Features need to boot the framework)

- Home Page Tests: `tests/Feature/HomeTest.php`
- Match Skill Tests: `tests/Feature/MatchSkillsTest.php`
- Calculate Cost Tests: `tests/Feature/CalculateCostTest.php`

Function Tests (Just Pest unit testing the function itself)

- SkillSwap Tests for the 3 functions: `tests/Unit/SkillSwapTest.php`

Services (The logic that the tests check)

- The 3 functions: `app/Services/SkillSwap.php`
- The skill data and categories: `app/Services/SkillCatalog.php`

Controllers (Call the functions and send the result to the page)

- Home Page: `app/Http/Controllers/HomeController.php`
- Calculate Cost: `app/Http/Controllers/CalculateCostController.php`
- Match Skills: `app/Http/Controllers/MatchSkillsController.php`

Form Requests (Validate the form input before the controller uses it)

- Calculate Cost Validation: `app/Http/Requests/CalculateCostRequest.php`
- Match Skills Validation: `app/Http/Requests/MatchSkillsRequest.php`

Routes

- Calculate Cost and Match Skills Routes: `routes/web.php`

UI (The page that uses the functions)

- Home Page with the filter bar and cost calculator: `resources/js/pages/Welcome.svelte`
- Skill Type: `resources/js/types/skill.ts` and `resources/js/types/index.ts`
