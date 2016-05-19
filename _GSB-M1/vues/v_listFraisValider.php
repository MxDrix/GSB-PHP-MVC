<h2>Liste visiteurs validés</h2>
    <table class="listeLegere">
        <tr>
            <th style="text-align: left;padding:0.2em;font-size:1.1em;"> Nom </th>
            <th style="text-align: left;padding:0.2em;font-size:1.1em;"> Prenom </th>
            <th style="text-align: center;padding:0.2em;font-size:1.1em;"> Justficatifs</th>
            <th style="text-align: center;padding:0.2em;font-size:1.1em;"> Montant</th>
            <th style="text-align: center;padding:0.2em;font-size:1.1em;"> Date</th>
            <th style="text-align: center;padding:0.2em;font-size:1.1em;"> Etat </th>
            <th style="text-align: center;padding:0.2em;font-size:1.1em;"> Vue détaillée </th>
        </tr>
<?php
foreach($_SESSION['listFraisV'] as $fiche => $cle)
{   echo"<tr style='text-align:center;'>";    
    print_r("<td style='text-align:left;'>".$cle["nom"]."</td>"
            . "<td style='text-align:left;'>".$cle["prenom"]."</td>"
            . "<td style='text-align:center;'>".$cle["nbJustificatifs"]."</td>"
            . "<td style='text-align:center;'>".$cle["montantValide"]." €</td>"
            . "<td style='width:15%;text-align:center;' > ".$cle["dateModif"]."</td>"
            . "<td style='text-align:center;'>".$cle["idEtat"]."</td>"
            . "<td class='TDdoc' style='width: 20%;text-align: center;'><a  id style='display:block;width:100%;height:100%;' href='index.php?uc=suiviFrais&action=listFrais&numero=$fiche'> <i class='fa fa-external-link-square' aria-hidden='true' style='color: blue;font-size: 40px;'></i> </a> </td>");
    echo"</tr>";
    
}
?>
    </table><br/>
<h2>Liste visiteurs Remboursés</h2>
    <table class="listeLegere">
        <tr>
            <th style="text-align: left;padding:0.2em;font-size:1.1em;"> Nom </th>
            <th style="text-align: left;padding:0.2em;font-size:1.1em;"> Prenom </th>
            <th style="text-align: center;padding:0.2em;font-size:1.1em;"> Justficatifs</th>
            <th style="text-align: center;padding:0.2em;font-size:1.1em;"> Montant</th>
            <th style="text-align: center;padding:0.2em;font-size:1.1em;"> Date</th>
            <th style="text-align: center;padding:0.2em;font-size:1.1em;"> Etat </th>
            <th style="text-align: center;padding:0.2em;font-size:1.1em;"> Vue détaillée </th>
        </tr>
<?php 
foreach($_SESSION['listFraisR'] as $fiche => $cle)
{   echo"<tr style='text-align:center;'>";    
    print_r("<td style='text-align:left;'>".$cle["nom"]."</td>"
            . "<td style='text-align:left;'>".$cle["prenom"]."</td>"
            . "<td style='text-align:center;'>".$cle["nbJustificatifs"]."</td>"
            . "<td style='text-align:center;'>".$cle["montantValide"]." €</td>"
            . "<td style='width:15%;text-align:center;'> ".$cle["dateModif"]."</td>"
            . "<td style='text-align:center;'>".$cle["idEtat"]."</td>"
            . "<td class='TDpdf' style='width: 20%;text-align:center;'><a target='_blank' href='index.php?uc=voirPdf&action=vuPdf&numeroPDF=$fiche' style='display:block;width:100%;height:100%;'> <i class='fa fa-file-pdf-o' aria-hidden='true' style='color: red;font-size: 40px;'></i> </a> </td>");
    echo"</tr>";
    
}
?>
    </table>
