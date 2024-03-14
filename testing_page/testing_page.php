<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
    <link rel="stylesheet" href="testing_page.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
    <form class="content" action="" method="POST">

        <div class="test-title">Մակարդակ 1</div>

        <div class="timer-box">

        </div>
        <hr class="first-hr">

        <div class="questions">
            <?php
            include '../config.php';
            global $conn; 

            $query = "SELECT * FROM questions";
            $result = mysqli_query($con, $query);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $question = $row['question'];
                    echo '<div class="question">' . $question . '</div>';
                }
            } else {
                echo "Error: " . mysqli_error($con);
            }

            mysqli_close($con);
            ?>
        </div>

        <div class="answers">
            <?php
            $answers = array('Answer1', 'Answer2', 'Answer3', 'Answer4');
            $top = 10;
            for ($i = 0; $i < count($answers); $i++) {
                $answer = $answers[$i];
                echo '<div class="answer answer' . ($i + 1) . '" name="answer' . ($i + 1) . '" style="margin-top: ' . $top . 'px;">' . $answer . '</div>';
                $top += 80;
            }
            ?>
        </div>



        </div>

        <button class="next-btn">Հաջորդը</button>
        <div class="count-of-answers"></div>
        <button class="went-btn">Դուրս գալ</button>

        <div class="box-window">
    <div class="start-box"></div>
    <div class="start-box-title">Սկսել խաղը</div>
    <input type="submit" class="start-btn" value="Սկսել" name="start">
</div>

    </form>

<script>

let boxWindow = document.querySelector('.box-window');
    let startBtn = document.querySelector('.start-btn');

    let questionText = document.querySelector('.questions');
    let answers = document.querySelectorAll('.answer');

    // let questions = [
    //     { number: 1, question: 'Sample question 1', options: ['Option A', 'Option B', 'Option C', 'Option D'] },
    // ];

    
    startBtn.addEventListener('click', function(event) {
            event.preventDefault(); 
            boxWindow.style.display = 'none';

            // questionText.innerText = questions[0].number + '. ' + questions[0].question;
            // for (let i = 0; i < answers.length; i++) {
            //     answers[i].innerText = questions[0].options[i];
            // }
        });

       
    
</script>


<script src="../functions.js"></script>
</body>
</html>