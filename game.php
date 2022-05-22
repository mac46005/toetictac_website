<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
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
    </header><!--* END NAVIGATION header-->

    <div class="container">
        <main class="col-3 container">
            <!-- Game information -->
            <section>
                <div class="title">
                    <h2>playerOne VS playerTwo</h2>
                </div>
                <div class="current-move card">
                    <h2>Current Move</h2>

                </div>
            </section>

            <!-- The game -->
            <section>
                <table>

                </table>
            </section>
        </main><!-- END .main -->






        <!-- Game Details -->
        <aside class="col-1">

        </aside><!--* END aside -->
    </div><!--* END .container -->










    <footer>
        <p>&copy;<span id="year">2022</span> Super Extreme Toe-Tic-Tac 3</p>
    </footer><!--* END footer-->
</body>
</html>