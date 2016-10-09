<?php
$title = "Home";
$home = true;
setlocale(LC_TIME, 'nl_NL', 'nl', 'du');
date_default_timezone_set('Europe/Amsterdam');
$today = date("Y-m-d");
require "includes/header.php";

?>
    <br>
    <h1>Clientkaart</h1>
    <br>

    <table class="table table-bordered">
        <tr>
            <th colspan="3">Client: Dhr Geerlings Rodney</th>
        </tr>
        <tr>
            <td>Lengte: 1,63 m</td>
            <td>Leeftijd: 31</td>
            <td>Tel: </td>
        </tr>
    </table>

    <?php
         $query = "SELECT * FROM Card";
         $result = mysqli_query($conn,$query);
         while ($row = $result->fetch_array(true))
         
     ?>

        <table class="table table-hover table-bordered table-big">
            <tr>
                <th>Dag</th>
                <th>Datum</th>
                <th>Tijd</th>
                <th>Gewicht KG</th>
                <th>BMI</th>
                <th>Vet %</th>
                <th>Visc.vet</th>
                <th>Spiermassa</th>
                <th>MO</th>
            </tr>

            <tr>
                <th>
                    <?=$prepath?>
                </th>
                <th>
                    <?=$prepath?>
                </th>
                <th>
                    <?=$prepath?>
                </th>
                <th>
                    <?=$prepath?>
                </th>
                <th>
                    <?=$prepath?>
                </th>
                <th>
                    <?=$prepath?>
                </th>
                <th>
                    <?=$prepath?>
                </th>
                <th>
                    <?=$prepath?>
                </th>
                <th>
                    <?=$prepath?>
                </th>
            </tr>

        </table>

        <?php
require "includes/footer.php";
?>
