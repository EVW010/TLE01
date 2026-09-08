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
    <title>Document</title>
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
    </header>
    <main>
        <form action="" method='post'>
        <article>
            <img src="images/placeholder.jpg" alt="">
            
            <div>
                <label for="green1">✓</label>
                <input type="radio" class="green-button" id="green1" name='question1' value='green' required>

                <label for="red1">X</label>
                <input type="radio" class="red-button" id="red1" name='question1' value='red' required>
            </div>

        </article>

        <article>
            <img src="images/placeholder.jpg" alt="">
            
            <div>
                <label for="green2">✓</label>
                <input type="radio" class="green-button" id="green2" name='question2' value='green' required>

                <label for="red2">X</label>
                <input type="radio" class="red-button" id="red2" name='question2' value='red' required>
            </div>
        </article>

        <article>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras imperdiet commodo risus, vitae vehicula nulla eleifend non. Vestibulum viverra lectus quis enim accumsan ullamcorper. Morbi a sapien justo. Nullam sed tincidunt eros, at sollicitudin nisl. Mauris ac orci arcu. Nullam eget pellentesque diam. Sed fringilla, lacus eu viverra sodales, eros erat convallis justo, ac ultrices nunc massa sit amet dui. Quisque quis tempor arcu. Duis molestie pulvinar dui quis gravida. Maecenas a maximus tortor.
</p>
            
            <div>
                <label for="green3">✓</label>
                <input type="radio" class="green-button" id="green3" name='question3' value='green' required>

                <label for="red3">X</label>
                <input type="radio" class="red-button" id="red3" name='question3' value='red' required>
            </div>
        </article>

        <article>
            <audio controls>
            <source src="horse.ogg" type="audio/mp3">

            </audio>
            
            <div>
                <label for="green4">✓</label>
                <input type="radio" class="green-button" id="green4" name='question4' value='green' required>

                <label for="red4">X</label>
                <input type="radio" class="red-button" id="red4" name='question4' value='red' required>
            </div></article>
            <input type="submit" name="submit">

</form>
    </main>

    <footer></footer>
</body>
</html>