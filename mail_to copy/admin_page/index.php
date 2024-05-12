<?php
session_start(); 

if(!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <div class="admin-panel">
            <div class="main">
                <h3>Ադմինիստրատորի վահանակ</h3> <br><hr>
            </div>
            <br>
            <h3>Գլխավոր</h3> <br><hr class = "dashHr">
            <div class="change-navbar">
                <div class = 'test-link'>Թեստեր</div><br><hr><br>
                <div class = "new-test">Ավելացնել նոր թեստ</div>
                <a href = '../../main/index.php' class = "see-page">Այցելել էջ</a>

            </div>
        </div>

        <div class="add-info-panel">
            <div class="main">
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass search-icon" style="color: #fafafa;"></i>
                </div>
                <div>
                    <div class="admin-name">
                        <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>
                    </div>
                    <div class="admin-icon"><i class="fa-regular fa-user" style="color: #fcfcfc;"></i></div>
                        <button class = 'logout'>Դուրս գալ</button>
                </div>
            </div>

            
            <div class="add-info-table" style = "display:none">
                <form id="testForm" method="post" action="add_test.php">
                    <i class="fa-solid fa-circle-xmark close" style="color: #396384;"></i>
                    <table border="1">
                        <tr colspan="3">
                            <th colspan="3"><h3>Ավելացնել նոր թեստ</h3></th>
                        </tr>
                        <tr>
                            <th><label for="question">Ավելացնել նոր հարց</label></th>
                            <td><input type="text" name="question" id="question"></td>
                            <th>Ճիշտ պատասխան</th>
                        </tr>
                        <tr>
                            <th><label for="option1">պատասխան 1</label></th>
                            <td><input type="text" name="option1" id="option1"></td>
                            <td><input type="radio" name="correct_answer" value="1" class = "correct-ans"></td>
                        </tr>
                        <tr>
                            <th><label for="option2">պատասխան 2</label></th>
                            <td><input type="text" name="option2" id="option2"></td>
                            <td><input type="radio" name="correct_answer" value="2" class = "correct-ans"></td>
                        </tr>
                        <tr>
                            <th><label for="option3">պատասխան 3</label></th>
                            <td><input type="text" name="option3" id="option3"></td>
                            <td><input type="radio" name="correct_answer" value="3" class = "correct-ans"></td>
                        </tr>
                        <tr>
                            <th><label for="option4">պատասխան 4</label></th>
                            <td><input type="text" name="option4" id="option4"></td>
                            <td><input type="radio" name="correct_answer" value="4" class = "correct-ans"></td>
                        </tr>
                        <tr>
                            <th colspan="3"  class = "h3"><label for="hard_level">Ընտրել դժվարության աստիճան</label></th>
                        </tr>
                        <tr>
                            <td colspan="3" class = "hard_level">
                                <label for="radio1">1</label>
                                <input type="radio" name="check_level" value="1"> 
                                <label for="radio2">2</label>
                                <input type="radio" name="check_level" value="2"> 
                                <label for="radio3">3</label>
                                <input type="radio" name="check_level" value="3"> 
                            </td>
                        </tr>
                    </table>
                    <input type="submit" value="Ավելացնել" id="submitBtn">
                </form>

            </div>

            <?php
                include '../../config.php';

                $sql = "SELECT * FROM questions ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo '<div class="show-info-table" style = "display:block">';
                    echo '<form id="testForm" method="post" action="">';
                    echo "<i class='fa-solid fa-circle-xmark select-close' style='color: #396384;'></i>";
                    echo '<table border="1">';
                    echo '<tr colspan="3">';
                    echo '<th colspan=9"><h3>Տեսնել բոլոր թեստերը</h3></th>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<th></th>';
                    echo '<th class = "question">Հարց</th>';
                    echo '<th class = "answer">պատասխան_1</th>';
                    echo '<th class = "answer">պատասխան_2</th>';
                    echo '<th class = "answer">պատասխան_3</th>';
                    echo '<th class = "answer">պատասխան_4</th>';
                    echo '<th class = "correct-answer">Ճիշտ պատասխան</th>';
                    echo '<th class="h3">Դժվարության աստիճան</th>';
                    echo '</tr>';

                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $row["id"] . '</td>';
                        echo '<td><span class="editable" contenteditable>' . $row["question"] . '</span></td>';
                        echo '<td><span class="editable" contenteditable>' . $row["option1"] . '</span></td>';
                        echo '<td><span class="editable" contenteditable>' . $row["option2"] . '</span></td>';
                        echo '<td><span class="editable" contenteditable>' . $row["option3"] . '</span></td>';
                        echo '<td><span class="editable" contenteditable>' . $row["option4"] . '</span></td>';
                        echo '<td><span class="editable" contenteditable>' . $row["correct_answer"] . '</span></td>';
                        echo '<td class = "change-btns">';
                        echo '<button class = "update" onclick="updateQuestion(' . $row["id"] . ')">Update</button>';
                        echo '<button class = "delete" onclick="deleteQuestion(' . $row["id"] . ')">Delete</button>';
                        echo '</td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                    echo '</form>';
                    echo '</div>';
                } else {
                    echo "No results found";
                }

                $conn->close();
            ?>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
