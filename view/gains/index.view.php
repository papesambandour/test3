
<h1 class="h3 texBlu killMargin titleTab">
    <?php
        if (\model\Auth::isAdmin())
        {
            echo "Gains distributeurs";

        }
        else
        {
            echo "Mes Gains";
        }
    ?>

</h1>
<div class="barHorizontal blu">

</div>

<div class="row form-group">

    <?php
    $dateDebut = (new DateTime())->format("Y-m-d");
    if(\model\Auth::isAdmin())
        echo "
                
                <label class='col-md-1 ' >Matricule</label>
                <input class=\"col-md-1 smallInput\" type=\"text\" id=\"matriculeTriGain\" name=\"matriculeTriGain\" placeholder=\"Matricule\">
            <label class=\" col-md-1 \">Chosir Mois</label>";
    else
        echo "
                 
                <label class=\" col-md-1 \">Choisir Mois</label>";
    ?>


    <input id="dateGain" name="dateGain" type="date" class="col-md-2 smallInput" value="<?= $dateDebut ?>" >
    &nbsp;&nbsp;
    <button id="trieDateGain"  type="button" class="btn btn-primary btnSmall" style="height: 28px"> <img src="/public/img/click.png" ></button>
    <button id="dendTriGain"  type="button" class="btn btn-danger btnSmall" style="height: 28px"> <img src="/public/img/cancel2.png"></button>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <label>Voir tout&nbsp;&nbsp; <button class='btn btn-primary btnSmall ' id="showAll" > <img src="/public/img/eye.png"  ></button> </label>

</div>


<div class="row " id="tableGain">
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

</div>



