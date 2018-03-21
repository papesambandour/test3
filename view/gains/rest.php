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

</div>