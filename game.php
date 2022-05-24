<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <?php
    $playerOne = $_REQUEST['playerOne'];
    $playerTwo = $_REQUEST['playerTwo'];
    ?>
    <header>
        <div class="container">
            <div class="header-logo">
                <h1>Super Extreme Toe-Tic-Tac <span>3</span>!!!</h1>
            </div>
        </div>
    </header>
    <!--* END NAVIGATION header-->

    <div class="container-row container-space-between content" style="border: 3px solid blue;">
        <main class="col-3">
            <section style="border: 1px solid red">
                <div>
                    <h2>Player vs Player</h2>
                </div>
                <div>
                    <h2>Current Player</h2>
                </div>
            </section>



            <section style="border: 1px solid red">
                <div class="ttt-table">

                </div>
            </section>
        </main>




        <aside class="col-1" style="border: 1px solid red">
            <h1>Game Information</h1>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, quis!
            </p>
        </aside>
    </div>
    <!--* END .container -->










    <footer>
        <p>&copy;<span id="year">2022</span> Super Extreme Toe-Tic-Tac 3</p>
    </footer>
    <!--* END footer-->
</body>

</html>