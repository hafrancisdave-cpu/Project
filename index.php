<?php
require __DIR__ . '/data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dave | PHP Activities</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>

<body>

    <!-- ============ NAVIGATION ============ -->
    <nav>
        <div class="wrap">
            <a href="#home" class="logo">Dave</a>

            <ul id="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#activities">Activities</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#reflection">Reflection</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>


    <!-- ============ 1. HOME ============ -->
    <header class="hero" id="home">
        <div class="wrap">

            <div class="avatar">
    <img src="ako.jpg" alt="Franci Dave Ferolino">
            </div>

            <div>
                <div class="tag">Welcome!</div>
                <h1>Hi, I’m <span>Francis Dave Ferolino</span>.</h1>
                <p>
                    BS Information Systems student at Mount Carmel College of Escalante, INC., 1st Year.
                </p>
                <a href="#activities" class="btn">View My Activities</a>
                <a href="#contact" class="btn o">Contact Me</a>
            </div>

        </div>
    </header>


    <!-- ============ 2. ABOUT ME ============ -->
    <section id="about">
        <div class="wrap">
            <h2>About <span>Me</span></h2>
            <p class="sub">A little about who I am and where I’m headed.</p>

            <div class="about">

                <!-- Left: personal introduction -->
                <div class="card">
                    <p class="lead">
                        I’m Francis Dave, a Bachelor of Science in Information Systems student at the
                        Mount Carmel College of Escalante, INC. Learning PHP showed me how a web page can
                        think, calculate, and respond instead of just sitting there. I enjoy turning
                        a problem into steps and then watching those steps work in the browser.
                    </p>
                    <p class="gap">
                        My goal is to become an IT professional who builds reliable, useful systems
                        for real people and organizations.
                    </p>
                </div>

                <!-- Right: quick facts -->
                <ul class="card">
                    <li><b>Name:</b> Francis Dave Ferolino</li>
                    <li><b>Education:</b> BSIS 1st year student at Mount Carmel College of Escalante, INC.</li>
                    <li><b>Interests:</b> Web development, problem solving, automation, and cybersecurity</li>
                    <li><b>Learning:</b> PHP syntax, Arrays, and Loops</li>
                  <li><b>Technical Skills:</b> PHP, HTML, CSS, XAMPP, and VS Code</li>
                </ul>

            </div>
        </div>
    </section>


    <!-- ============ 3. PHP ACTIVITIES ============ -->
    <section id="activities">
        <div class="wrap">
            <h2>PHP Activities</h2>
            <p class="sub">
                <?php echo count($activities); ?> activities and exercises from this semester.
                Each card shows the program output, with a link to run it.
            </p>

            <div class="grid">
                <?php foreach ($activities as $i => $a): ?>
                    <div class="card proj">
                        <?php $shot = screenshot_for($a['file']); ?>
                        <?php if ($shot): ?>
                            <a class="shot-link" href="<?php echo e($shot); ?>" target="_blank" rel="noopener">
                                <img class="shot" src="<?php echo e($shot); ?>"
                                     alt="Screenshot of the <?php echo e($a['title']); ?> output" loading="lazy">
                            </a>
                        <?php else: ?>
                            <div class="shot shot-empty">Screenshot coming soon</div>
                        <?php endif; ?>

                        <div class="meta">
                            <span class="pill"><?php echo e($a['concept']); ?></span>
                            <span class="num"><?php echo sprintf('%02d', $i + 1); ?></span>
                        </div>
                        <h3><?php echo e($a['title']); ?></h3>
                        <p><?php echo e($a['desc']); ?></p>

                        <div class="actions">
                            <?php if (demo_exists($a['file'])): ?>
                                <a class="go" href="<?php echo e(PROJECT_DIR . $a['file']); ?>">View demo &rarr;</a>
                            <?php else: ?>
                                <span class="go">Coming soon</span>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ============ 4. SKILLS AND TECHNOLOGIES ============ -->
    <section id="skills">
        <div class="wrap">
            <h2>Skills</h2>

            <div class="grid">
                <?php foreach ($skills as $skill): ?>
                    <div class="card">
                        <h3><?php echo e($skill['name']); ?></h3>
                        <p><?php echo e($skill['desc']); ?></p>
                        <span class="pill"><?php echo e($skill['level']); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- ============ 5. REFLECTION AND LEARNING EXPERIENCE ============ -->
    <section id="reflection">
        <div class="wrap">
            <h2>Reflection</h2>
            <p class="sub">What this course taught me.</p>

            <div class="refl">

                <h3>What have I learned in PHP?</h3>
                <p>
                    Throughout this course I learned that PHP is a server-side language: the code runs
                    on the server and sends plain HTML to the browser. I learned how to write PHP syntax,
                    store data in variables, use operators to compute results, make decisions with
                    conditions, repeat work with loops, and organize data using arrays. Setting up XAMPP
                    and running my files through localhost also taught me how a real web server handles
                    a request, which made everything feel closer to actual web development.
                </p>

                <h3>What was the most challenging topic?</h3>
                <p>
                    Loops were the hardest for me, especially nested loops like the ones used in the box
                    and pyramid activities. It was difficult to predict how many times each loop would run
                    and how the rows and columns related to each other. A small mistake in a counter or
                    condition changed the whole output.
                </p>

                <h3>How did I overcome the challenges?</h3>
                <p>
                    I slowed down and traced the code by hand, writing out the value of each variable on
                    every pass through the loop. I also changed one thing at a time and refreshed the page
                    to see what happened, and I asked my classmates and teacher when I was stuck. Reading
                    my own errors carefully, instead of rewriting everything, helped me find problems faster.
                </p>

                <h3>Which project am I most proud of?</h3>
                <p>
                    I am most proud of the calculator activities. They were the first programs that took
                    input and gave back a result, so they felt like real software instead of just printed
                    text. Getting the operators and the output to work correctly showed me that I could
                    build something useful from the basics.
                </p>

                <h3>How will I apply this in the future?</h3>
                <p>
                    As an Information Systems student, I will use PHP and the habits I built here, such as
                    breaking problems into steps, testing often, and keeping files organized, when I create
                    systems that handle forms, users, and data. I want to continue by learning databases
                    like MySQL so that my programs can store information permanently, and eventually build
                    complete web applications for real organizations.
                </p>

            </div>
        </div>
    </section>


    <!-- ============ 6. CONTACT ============ -->
    <section id="contact">
        <div class="wrap">
            <h2>Contacts</h2>
            <p class="sub">Want to talk about PHP, projects, or opportunities? Reach out.</p>

            <div class="grid">
                <div class="card">
                    <h3>Email</h3>
                    <p><a class="link" href="mailto:hafrancisdave@gmail.com">hafrancisdave@gmail.com</a></p>
                </div>

                <div class="card">
                    <h3>Facebook</h3>
                    <p>
                        <a class="link" href="https://www.facebook.com/makenosense.0" target="_blank" rel="noopener">
    facebook.com/makenosense.0
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- ============ FOOTER ============ -->
    <footer>
        <div class="wrap">
            <p>&copy; <?php echo date("Y"); ?> Francis Dave &middot; BSIS, Mount Carmel College of Escalante, INC.</p>
            <div class="links">
                <a href="#home">Home</a>
                <a href="#activities">Activities</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </footer>

</body>

</html>
