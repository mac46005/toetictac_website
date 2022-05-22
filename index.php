<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Extreme Toe-Tic-Tac</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>






    <header>
        <div class="container">
            <div class="header-logo">
                <h1>Super Extreme Toe-Tic-Tac <span>3</span>!!!</h1>
            </div>
        </div>
    </header><!--* END NAVIGATION header-->









    <div class="container">
        <?php
        if(isset($_POST['submit'])){
            echo '<p>'.$_POST['playerOne'].'</p>';
            echo '<p>'.$_POST['playerTwo'].'</p>';
            header("index.php",true, 303);
        }
        ?>



        <main class="col-4">
            <form method="post" action="game.php" class="form container">
                <fieldset>
                    <legend>Player One</legend>
                    <label for="">
                        Name: 
                        <input type="text" name="playerOne" id="playerOne" placeholder="Player One">
                    </label>
                </fieldset>

                <fieldset>
                    <legend>Player Two</legend>
                    <label for="">
                        Name: 
                        <input type="text" name="playerTwo" id="playerTwo" placeholder="Player Two">
                    </label>
                </fieldset>

                <input class="btn-primary" name="submit" type="submit" value="Create Game">
            </form>
        </main>








        <aside>

        </aside>
    </div><!--* END .container -->











    <footer>
        <p>&copy;<span id="year">2022</span> Super Extreme Toe-Tic-Tac 3</p>
    </footer><!--* END footer-->




    
</body>
</html>