<?php
// Shared by index.php and source.php: folder names, helper functions and page data.

const PROJECT_DIR = 'projects/';        // where the activity .php files live
const IMAGE_DIR   = 'assets/images/';   // where the screenshots go

// Safely print text inside HTML (escapes <, >, & and quotes)
function e($text)
{
    return htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

// True only if the activity file really exists in the projects folder.
// __DIR__ makes the check work no matter where Apache runs from.
function demo_exists($file)
{
    return is_file(__DIR__ . '/' . PROJECT_DIR . $file);
}

// Finds the screenshot for an activity: assets/images/<file name>.png
// (.jpg, .jpeg and .webp also work). Returns null if there is none yet.
// Example: array.php -> assets/images/array.png
function screenshot_for($file)
{
    $name = pathinfo($file, PATHINFO_FILENAME);
    foreach (['png', 'jpg', 'jpeg', 'webp'] as $ext) {
        if (is_file(__DIR__ . '/' . IMAGE_DIR . $name . '.' . $ext)) {
            return IMAGE_DIR . $name . '.' . $ext;
        }
    }
    return null;
}

// Finds an activity by its file name. source.php uses this so that only
// files listed below can ever be shown (visitors can't ask for any other file).
function find_activity($activities, $file)
{
    foreach ($activities as $a) {
        if ($a['file'] === $file) {
            return $a;
        }
    }
    return null;
}

// ---------------------------------------------------------------
// ACTIVITIES: one block per activity.
// To add one, copy a block and edit it.
// ---------------------------------------------------------------
$activities = [
    [
        'concept' => 'Arrays',
        'title'   => 'Array Activity',
        'desc'    => 'Stores a list of values in an array and displays them using PHP.',
        'file'    => 'array.php',
    ],
    [
        'concept' => 'Loops',
        'title'   => 'Box',
        'desc'    => 'Prints a box pattern on the page using nested loops.',
        'file'    => 'Box.php',
    ],
    [
        'concept' => 'Operators',
        'title'   => 'Calculator',
        'desc'    => 'Performs arithmetic on numbers using PHP operators.',
        'file'    => 'calculator.php',
    ],
    [
        'concept' => 'Mixed Concepts',
        'title'   => 'Independent Practice',
        'desc'    => 'A self-directed exercise applying the topics covered in class.',
        'file'    => 'independent_practice.php',
    ],
    [
        'concept' => 'Loops',
        'title'   => 'Loop Activity',
        'desc'    => 'First loop exercise: repeating output with a loop structure.',
        'file'    => 'Loop_act.php',
    ],
    [
        'concept' => 'Loops',
        'title'   => 'Loop Activity 1',
        'desc'    => 'Second loop exercise building on the first.',
        'file'    => 'Loop_act1.php',
    ],
    [
        'concept' => 'Loops',
        'title'   => 'Loop Activity 2',
        'desc'    => 'Third loop exercise with more control over the repetition.',
        'file'    => 'Loop_act2.php',
    ],
    // TODO: replace each Performance Task description below with one
    // sentence about what that task actually does.
    [
        'concept' => 'Performance Task',
        'title'   => 'Performance Task 1',
        'desc'    => 'Graded hands-on task applying PHP fundamentals.',
        'file'    => 'performance_task1.php',
    ],
    [
        'concept' => 'Performance Task',
        'title'   => 'Performance Task 2',
        'desc'    => 'Graded hands-on task applying PHP fundamentals.',
        'file'    => 'performance_task2.php',
    ],
    [
        'concept' => 'Performance Task',
        'title'   => 'Performance Task 3',
        'desc'    => 'Graded hands-on task applying PHP fundamentals.',
        'file'    => 'performance_task3.php',
    ],
    [
        'concept' => 'Performance Task',
        'title'   => 'Performance Task 4',
        'desc'    => 'Graded hands-on task applying PHP fundamentals.',
        'file'    => 'performance_task4.php',
    ],
    [
        'concept' => 'Performance Task',
        'title'   => 'Performance Task 5',
        'desc'    => 'Graded hands-on task applying PHP fundamentals.',
        'file'    => 'performance_task5.php',
    ],
    [
        'concept' => 'Prelim Exam',
        'title'   => 'Prelim Exam',
        'desc'    => 'My practical output for the preliminary exam.',
        'file'    => 'prelim_exam.php',
    ],
    [
        'concept' => 'Nested Loops',
        'title'   => 'Pyramid',
        'desc'    => 'Prints a pyramid pattern using nested loops.',
        'file'    => 'pyramid.php',
    ],
    [
        'concept' => 'Operators',
        'title'   => 'Scale Calculator',
        'desc'    => 'Computes a result based on the values entered into the program.',
        'file'    => 'scale_calculator.php',
    ],
];

// ---------------------------------------------------------------
// SKILLS: name, short description, and an honest level label.
// ---------------------------------------------------------------
$skills = [
    ['name' => 'PHP',     'desc' => 'Variables, operators, loops, arrays', 'level' => 'Comfortable'],
    ['name' => 'HTML',    'desc' => 'Page structure and semantic markup',  'level' => 'Strong'],
    ['name' => 'CSS',     'desc' => 'Layout, responsive design, styling',  'level' => 'Comfortable'],
    ['name' => 'XAMPP',   'desc' => 'Running PHP locally with Apache',     'level' => 'Learning'],
    ['name' => 'VS Code', 'desc' => 'Writing and organizing code',         'level' => 'Comfortable'],
];
