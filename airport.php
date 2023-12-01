<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <div id="banerL"><h2>odloty z lotniska</h2></div>
    <div id="banerP">
        <img src="zad6.png" alt="logotyp">
    </div>
    <main>
        <h4>tabela odlotow</h4>
        <table>
            <tr>
                <td>Lp.</td>
                <td>Numer rejsu</td>
                <td>czas</td>
                <td>kierunek</td>
                <td>status</td>
            </tr>
            <?php
            $conn = mysqli_connect("localhost","root","","samoloty");
            $query = mysqli_query($conn,"SELECT id,nr_rejsu,czas,kierunek,status_lotu FROM odloty GROUP BY czas DESC");
            while($wynik = mysqli_fetch_row($query))
            {
                echo "<tr>

                <td>$wynik[0]</td>
                <td>$wynik[1]</td>
                <td>$wynik[2]</td>
                <td>$wynik[3]</td>
                <td>$wynik[4]</td>
                </tr>";
            }
            mysqli_close($conn);

            ?>
        </table>
    </main>
    <footer id="stopka1"><a href="kw1.jpg">Pobierz Obraz</a></footer>
    <footer id="stopka2">
    <?php
        $conn = mysqli_connect("localhost","root","","samoloty");
        if(isset($_COOKIE["cookie"]))
        {
            echo "<b><p>Milo nam ze nas odwiedziles</p></b>";
        }
        else
        {
            $name="cookie";
            $value="1";
            $expieres = time()+60*60;
            setcookie($name,$value,$expieres);
            echo "<i><p>Dzień dobry! sprawdź regulamin naszej strony</p></i>";
        }
        
        mysqli_close($conn);
    ?>
    </footer>
    <footer id="stopka3">Autor:00000000</footer>
</body>
</html>