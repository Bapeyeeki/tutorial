<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
   <header>
        <div id='b1'>
            <h2>MÓJ ORGANIZER</h2>
        </div>
        <div id='b2'>
            <form action="kalendarz.php" method="post">
                    <label >
                        Wpis wydarzenia: <input type="text" name='wpis'>
                    </label>
                    <input type="submit" value="ZAPISZ" name='dodaj'>
            </form>
            <?php
                if(isset($_POST['dodaj']))
                {
                    $wpis = $_POST['wpis'];
                    $conn = mysqli_connect('localhost','root','','egzamin6');
                    $zap1  = "UPDATE `zadania` SET `wpis`='$wpis'WHERE dataZadania = '2020-08-27'";
                    mysqli_query($conn, $zap1);
                }
            ?>
             </div>
        <div id='b3'>
            <img src="logo2.png" alt="Mój organizer">
        </div>
   </header>
    <main>
        <div id='glowny'>
            <?php
                    $conn = mysqli_connect('localhost','root','','egzamin6');
                    $zap2  = "SELECT dataZadania, miesiac, wpis FROM `zadania` WHERE miesiac = 'sierpien';";
                    $wynik = mysqli_query($conn, $zap2);
                    while($row = mysqli_fetch_row($wynik))
                    {
                        echo "<div class='blok'>
                            <h6>$row[0], $row[1]</h6>
                            <p>$row[2]</p>
                        </div>
                        ";
                    }
            ?>
        </div>
    </main>
    <footer>
        <div id ='stopka'>
                <?php
                     $zap3  = "SELECT miesiac, rok FROM `zadania` WHERE dataZadania = '2020-08-01';";
                    $wynik2 = mysqli_query($conn, $zap3);
                     while($row = mysqli_fetch_row($wynik2))
                    {   
                        echo "<h1>miesiąc: $row[0], rok: $row[1]</h1> ";
                    }
                ?>
            <p>Stronę wykonał: 06252602319</p>
        </div>
    </footer>

</body>
</html>