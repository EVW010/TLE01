<?php 
if (isset($_POST['submit'])) {
    $question1 = $_POST['question1'] ?? null;
    $question2 = $_POST['question2'] ?? null;
    $question3 = $_POST['question3'] ?? null;
    $question4 = $_POST['question4'] ?? null;

    $rightAnswers = 0;
    if ($question1 === 'green') {
        $rightAnswers++;
    }

    if ($question2 === 'red') {
        $rightAnswers++;
    }

    if ($question3 === 'green') {
        $rightAnswers++;
    }

    if ($question4 === 'red') {
        $rightAnswers++;
    }

    $score = round($rightAnswers / 4 * 10);
    
    header("location: results.php?number=$score");  
} else {

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training</title>
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style/training.css">
    <script type="application/javascript" src="js/training.js"></script>
</head>
<body>
    <header>
        <nav>
            <div>
                <img src='/images/logo.png' alt="Logo of the site">
            </div>
            <div>
                <a href="index.html">Home</a>
                <a href="training.php">Training</a>
                <a href="results.php">Results</a>
            </div>
        </nav>

        <h1>Is it AI or not?</h1>
        <p>Select the checkmark if you think it is real and the cross if it is AI</p>
    </header>
    <main>
        <form action="" method='post'>
        <div>
        <article>
            <img src="images/monke.png" alt="">
            
            <div>
                <div class="green-button">
                    <label for="green1">✓</label>
                    <input type="radio" class="green-check" id="green1" name='question1' value='green' required>
                </div>
                <div class="red-button">
                    <label for="red1">X</label>
                    <input type="radio" class="red-check" id="red1" name='question1' value='red' required>
                </div>
            </div>

        </article>

        <article>
            <img src="images/tree.png" alt="">
            
            <div>
                <div class="green-button">
                    <label for="green2">✓</label>
                    <input type="radio" class="green-check" id="green2" name='question2' value='green' required>
                </div>
                <div class="red-button">
                    <label for="red2">X</label>
                    <input type="radio" class="red-check" id="red2" name='question2' value='red' required>
                </div>
            </div>
        </article>

        <article>
            <p>"If you are distressed by anything external, the pain is not due to the thing itself, 
                but to your estimate of it; and this you have the power to revoke at any moment. 
                You have power over your mind - not outside events. Realize this, and you will find strength."
            </p>
            
            <div>
                <div class="green-button">
                    <label for="green3">✓</label>
                    <input type="radio" class="green-check" id="green3" name='question3' value='green' required>
                </div>
                <div class="red-button">
                    <label for="red3">X</label>
                    <input type="radio" class="red-check" id="red3" name='question3' value='red' required>
                </div>
            </div>
        </article>

        <article>
            <audio controls>
            <source src="music/AI_sample.mp3" type="audio/mp3">

            </audio>
            
            <div>
                <div class="green-button">
                    <label for="green4">✓</label>
                    <input type="radio" class="green-check" id="green4" name='question4' value='green' required>
                </div>
                <div class="red-button">
                    <label for="red4">X</label>
                    <input type="radio" class="red-check" id="red4" name='question4' value='red' required>
                </div>
            </div>
        </article>
    </div>

    <input type="submit" name="submit">

    </form>
    </main>

    <footer>
        <img src="/images/logo.png" alt="Logo of the website">
        <div class="row-container">
            <a href="">Terms and Conditions</a>
            <a href="">Cookie Policy</a>
            <a href="">Privacy Policy</a>
            <a href="">About</a>



        </div>
        <p>CMGT 2026, All rights reserved.</p>
    </footer>
</body>
</html>