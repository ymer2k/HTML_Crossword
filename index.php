<!DOCTYPE html>
<html lang="en">

<head>
    <!-- For bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <!-- for encryption of answer SHA256 -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crossword</title>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js">//Import the cryptoJS library</script>
    <!--Needed to link this html document to the css file.-->
    <link rel="styleSheet" type="text/css" href="squareStyle.css">
</head>

<body>

    <?php
    include "db_connect.php";
    ?>

    <div class="Title" style="text-align:center">
        <h2>Crossword with a game theme!</h2>
        <p>Find the answer to the question below to win!</p>
    </div>

    <div class="container">
        <div class="fixed" style="background-color: red;">1&nbsp;
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">2&nbsp;
            <!--This style overrides the style in the css file-->
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="width:50px">3&nbsp;
            <!--style="width:25px"-->
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed">5&nbsp;
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">6&nbsp;
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">7&nbsp;
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed">8&nbsp;
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
    </div>

    <div class="container">
        <div class="fixed">10
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: white;">
            <!--This style overrides the style in the css file-->
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="width:50px">
            <!--style="width:25px"-->
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed">11
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
    </div>

    <div class="container">
        <div class="fixed" style="background-color: red;">12
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">13
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">14
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
    </div>
    <div class="container">
        <div class="fixed">15
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed">16
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
    </div>
    <div class="container">
        <div class="fixed">17
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: red;">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">18
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">19
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
    </div>

    <div class="container">
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed">20
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
    </div>
    <div class="container">
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed">21
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: red;">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">22
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">23
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
    </div>
    <div class="container">
        <div class="fixed">24
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed">25
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: red;">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
    </div>
    <!--8th row-->
    <div class="container">
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="width:1px;background-color: black;">
            <!--style="width:25px"-->
        </div>
        <div class="fixed" style="width:47px;">26
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">27
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">28
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: red;">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
    </div>

    <div class="container">
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed">29
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed">30
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
    </div>

    <div class="container">
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed">31
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed" style="background-color: black;">
        </div>
        <div class="fixed">32
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
        <div class="fixed">
            <input id="input" type="text" maxlength="1" onkeyup="makeUpperCase(this);" />
        </div>
    </div>


    <div class="clueContainer" style="text-align:center">
        <div class="column">
            <h2>Across</h2>
            <ol type="1">
                <li value="1">Genetic code</li>
                <li value="5">Not me</li>
                <li value="10">Indian Administrative Service</li>
                <li value="11">panoramic dental x-ray</li>
                <li value="12">Lechuck's adversary</li>
                <li value="15">Stone Ocean character</li>
                <li value="17">
                    <audio controls>
                        <source src="17AcrossSound.mp3" type="audio/mpeg" height:10px;>
                        Your browser does not support the audio element.
                    </audio>
                </li>
                <li value="21">Japanese martial artist and leader of the japanese Manji party</li>
                <li value="25">City in Germany</li>
                <li value="26">Sonic</li>
                <li value="29">Bungie West's only game</li>
                <li value="30">Ontario University Athletics</li>
                <li value="31">Great sorrow or distress</li>
                <li value="32">An electronic circuit with a voltage or voltage-driven oscillator that constantly adjusts
                    to match the frequency of an input signal.</li>
            </ol>
        </div>
        <div class="column">
            <h2>Down</h2>
            <ol type="1">
                <li value="1" >After eating</li>
                <li value="2">tiny island country in Micronesia</li>
                <li value="3">Follow the curve</li>
                <li value="5">Not me</li>
                <li value="6">... I did it again</li>
                <li value="7">Used to express disgust or horror.</li>
                <li value="8">Croft</li>
                <li value="13">Homer's favorite beverage</li>
                <li value="14">Retail Sales Representative</li>
                <li value="16">Where souvenirs can be found</li>
                <li value="18">Windows Installe extension</li>
                <li value="19">What every worker needs</li>
                <li value="20">Caused by muscrhooms</li>
                <li value="22">Peter's daughter</li>
                <li value="23">서울</li>
                <li value="24">Rip and tear</li>
                <li value="26">Hur</li>
                <li value="27">British Musician</li>
                <li value="28">D20</li>
            </ol>
        </div>
    </div>

    <div class="question" style="text-align:center">
        <h2>Question</h2>
        <p>Enter the hidden famous game character from the red boxes!</p>
        <input id="answer" type="text" style="width: 150px;" maxlength="6" onkeyup="makeCapitalLetters(this);" />
        <button onclick="checkAnswer2()">Submit</button>

    </div>

    <hr />
        <form class="form-horizontal" action="add_comment.php" >

            <fieldset>

                <!-- Form Name -->
                <legend style="text-align:center">Please leave a comment</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="fname">Name:</label>
                    <div class="col-md-4">
                        <input id="fname" name="fname" type="text" style="width: 200px; class=" form-control input-md"
                            required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="femail">Email:</label>
                    <div class="col-md-4">
                        <input id="femail" name="femail" type="email" style="width: 200px; class=" form-control
                            input-md" required="">

                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="fcomment">Comment:</label>
                    <div class="col-md-4">
                        <textarea class="form-control" id="fcomment" name="fcomment" rows="4" cols="50"
                            required></textarea>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="submit"></label>
                    <div class="col-md-4">
                        <button id="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </fieldset>
        </form>



        <?php
        //Get the table "commentsTable" from the database
        $sql = "SELECT idComment, commentUserName, commentEmail, commentText FROM commentsTable";
        $result = $mysqli->query($sql);
        ?>

        <div id="commentSection" class="commentSection" style="text-align:center">

        <div class="content">
        <?php
        //If there any values in the table, display them on at a time.
        if ($result->num_rows > 0) {
            //output data of each row
            while ($row = $result->fetch_assoc()) {
                //echo "#" . $row["idComment"] . " - Username: " . $row["commentUserName"] .
                //    " Text: " . $row["commentText"] . "<br>";
                echo "<h4><strong>$row[commentUserName]</strong> - #$row[idComment]</h4>";
                echo "<body> $row[commentText]</body>";
                echo "<hr width=\"25%\" />";
                //echo "<p>&nbsp;</p>";

            }
        } else {
            echo "No comments";
        }
        ?>
        </div>
        </div>


    <hr />
    <div class="Credits" style="text-align:center">
        <h2>Made By Jonas</h2>
        <p>&nbsp;</p>
        <h5>Continously deployed from github</h5>
    </div>

    <script type="text/javascript">
        function makeUpperCase(input) {
            input.value = input.value.replace(/\W|\d/g, '').substr(0, 1).toUpperCase();
        }

        function makeCapitalLetters(input) {
            input.value = input.value.replace(/\W|\d/g, '').toUpperCase();
        }

        function checkAnswer2() {
            let inputAnswer = document.getElementById("answer").value;
            var secretQuestionAnswerHash = "351966051718a9153f5a36365f84319ef528015b1a94048626a851469206e2e7"; // SHA256
            var inputHash = CryptoJS.SHA256(inputAnswer);
            //console.log(inputHash.toString()); // Debugging
            if (inputHash == secretQuestionAnswerHash) {
                alert("YOU WIN!\nThanks for playing :)\nPlease leave a comment!");
            }
            else {
                alert("WRONG ANSWER! Try again!!")
            }
        }

    </script>





</body>

</html>