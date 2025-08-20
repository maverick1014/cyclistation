<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyclistation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to Cyclistation</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <h2>Home</h2>
            <p>Welcome to our website!</p>
            <?php
                $current_time = date('Y-m-d H:i:s');
                echo "<p>Current server time: " . $current_time . "</p>";
            ?>
        </section>

        <section id="about">
            <h2>About</h2>
            <p>Learn more about what we do.</p>
        </section>

        <section id="contact">
            <h2>Contact</h2>
            <p>Get in touch with us.</p>
            <button id="contactBtn">Click Me</button>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Cyclistation. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>