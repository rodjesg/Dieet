<?php
setlocale(LC_TIME, 'nl_NL', 'nl', 'du');
date_default_timezone_set('Europe/Amsterdam');
$today = date("Y-m-d");
require "includes/header.php";

$birthYear =1984;
$currentYear = date("Y");



?>
    <div class="cardtext">
        <br>
        <h1>Clientkaart</h1>
        <br>
    </div>

    <table class="table table-bordered">
        <tr>
            <th colspan="3">Client: Dhr Geerlings Rodney</th>
        </tr>
        <tr>
            <td>Lengte: 1,63 m</td>
            <td>Leeftijd:<?php print $year = $currentYear - $birthYear; ?></td>
            <td>Tel: </td>
        </tr>
    </table>



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
        <?php
      
                    $query = "SELECT * FROM Card";
                    $result = mysqli_query($conn,$query);
                    while ($row = $result->fetch_array(true)) {  
                  
        ?>
            <tr>
                <td>
                    <?=$row['Dag']?>
                </td>
                <td>
                    <?=$row['Datum']?>
                </td>
                <td>
                    <?=$row['Tijd']?>
                </td>
                <td>
                    <?=$row['Gewicht']?>
                </td>
                <td>
                    <?=$row['BMI']?>
                </td>
                <td>
                    <?=$row['Vet']?>
                </td>
                <td>
                    <?=$row['Visceraalvet']?>
                </td>
                <td>
                    <?=$row['Spiermassa']?>
                </td>
                <td>
                    <?=$row['MO']?>
                </td>
            </tr>

            <!--  Footer  -->
            <?php
                    }
require "includes/footer.php";
?>
    </table>
    <div class="pbottom">
        <p>Annulering tot &eacute;&eacute;n werkdag van tevoren. Nadien wordt het consulttarief in rekening gebracht</p>
    </div>
