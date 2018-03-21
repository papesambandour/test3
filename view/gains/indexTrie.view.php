
    <table class="table table-hover dataTable table-striped">
        <thead >

        <tr class="gras">
            <th style="background: lightsteelblue">PRENOM </th>
            <th style="background: lightsteelblue">NOM</th>
            <th style="background: lightsteelblue">MATRICULE</th>
            <th style="background: lightsteelblue">TEL</th>
            <th style="background: lightsteelblue">BONUS</th>
            <th style="background: lightsteelblue">SUPPLEMENT</th>
            <th style="background: lightsteelblue">NATURE</th>

            <th style="background: lightsteelblue">MOIS</th>
            <th style="background: green">TOTAL GAIN</th>
        </tr>
        </thead>
        <?php
        while ($ligne = $gainUsers->fetch())
        {
            echo "<tr>
                            <td>$ligne->prenom</td>
                            <td>$ligne->nom</td>
                            <td>$ligne->matricule</td>
                            
                            <td>$ligne->tel</td>
                            <td>".number_format($ligne->montant_bonus,0,","," ") ." </td>
                            <td>".number_format($ligne->montantsuple,0,","," ")." </td>
                            <td> <button class='btn btn-success btnSmall showNature'  value='".$ligne->idGain."'> <img src=\"/public/img/eye.png\"  ></button>  </td>
                         
                            <td> ".\src\Helper::dateFrensh($ligne->dateGain)."</td>
                            <td style=\"background: lightcyan\">". number_format($ligne->totalGain,0,","," ")." </td>
                      </tr> ";
        }
        ?>
    </table>




