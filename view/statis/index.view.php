
<h1 class="h3 texBlu killMargin titleTab">
    Statistique
</h1>
<div class="barHorizontal blu">

</div>
<?php
$date = new DateTime();
$dateDebut = $date -> format('Y-m-01');
$dateCoutant = $date -> format("Y-m-d");
?>
<div class="row form-group">

    <?php
        if(\model\Auth::isAdmin())
            echo "
                 <div class=\"col-md-1 col-md-offset-1\" id=\"all\">
                    <label for=\"allDate\">Tous &nbsp;&nbsp;&nbsp;</label>
                    <input type=\"checkbox\" name=\"allDate\" id=\"allDate\"  >
                  </div>
                <label class='col-md-1 ' >Matricule</label>
                <input class=\"col-md-1 smallInput\" type=\"text\" id=\"matriculeTriSta\" name=\"matriculeTriSta\" placeholder=\"Matricule\">
            <label class=\" col-md-1 \">Date début</label>";
        else
            echo "
                 <div class=\"col-md-1 col-md-offset-2\" id=\"all\">
                    <label for=\"allDate\">Tous &nbsp;&nbsp;&nbsp;</label>
                    <input type=\"checkbox\" name=\"allDate\" id=\"allDate\"  >
                </div>
                <label class=\" col-md-1 \">Datee début</label>";
    ?>


    <input id="dateDebut" name="dateDebut" type="date" class="col-md-2 smallInput" value="<?= $dateDebut ?>" >
    <label class="col-md-1" >Dade fin</label>
    <input id="dateFin" name="dateFin" type="date" class=" col-md-2 smallInput"  value="<?= $dateCoutant?>" > &nbsp;&nbsp;&nbsp;
    <button id="trieDateStatistique"  type="button" class="btn btn-primary btnSmall" style="height: 28px"> <img src="/public/img/click.png" ></button>
    <button id="dendTriSta"  type="button" class="btn btn-danger btnSmall" style="height: 28px"> <img src="/public/img/cancel2.png"></button>

</div>

<div class="row" id="contenerMainTabLisStatis">




                <!--   TABLEAU PARTENAIRE -->
                <table class="table  table-responsive  table-inverse table-striped">
                    <tr class="gras">
                        <th>PRENOM </th>
                        <th>NOM</th>
                        <th>MATRICULE</th>
                        <th>TELEPHONE</th>
                        <th>EMAIL</th>
                        <th>DESIGNATION</th>
                        <th>MONTANT TOTAL</th>
                        <th>TRANSACTION</th>
                        <th>FILLEUL</th>
                        <th>NIVEAU</th>
                    </tr>
                    <?php
                    while ($ligne = $liststatis->fetch())
                    {

                        $nbenfanfant = \doa\DOA::getNumChild($ligne->idUser)->nbChild;
                        echo "<tr>
                            <td>$ligne->prenom</td>
                            <td>$ligne->nom</td>
                            <td>$ligne->matricule</td>
                            <td>$ligne->tel</td>
                            <td>$ligne->email</td>
                            <td>$ligne->libele</td>
                            <td>$ligne->montantTotal</td>
                            <td>$ligne->nombreTrans</td>
                            <td>$nbenfanfant</td>
                            <td><span class=\"label label-success\">Niveau $ligne->niveau</span></td>
                            
                          ";
                    }
                    ?>
                </table>


    <div class="row text-right killMargin killPappin" style="height: ">
        <?= \src\Helper::links()
        ?>
    </div>
</div>




