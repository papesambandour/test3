
<h1 class="h3 texBlu killMargin titleTab">
    Parrain - Filleul
</h1>
<div class="barHorizontal blu">

</div>
<h1 class="h3 alert-success text-leftr blu">

</h1>

<div class="row rechercheAndAddCollapContainer">
    <div class="col-md-3">
        <div class="form-group">
            <input type="text" id="RechercheDistChisld" required name="RechercheDistChisld" placeholder="Rechercher" class="form-control smallInput" style="width: 153px;display: inline-block">
            <div class="btn btn-primary btnSmall" id="RechercheDistChid">
                <img class="iconeItemMenu"  src="/public/img/search2.png" >
            </div>
            <div id="findRechercheDistChild" class="btn btn-danger btnSmall"><img src="/public/img/delete.png"></div>
        </div>
    </div>


</div>

<div class="row" id="tableDisteChild">
    <table class="table table-hover dataTable table-striped">
        <thead >

        <tr class="gras">
            <th>PRENOM </th>
            <th>NOM</th>
            <th>MATRICULE</th>
            <th>TELEPHONE</th>
            <th>EMAIL</th>
            <th>NIVEAU</th>
            <th>FILLEUL</th>
        </tr>
        </thead>
        <?php
        while ($ligne = $distributeurs->fetch())
        {
            echo "<tr>
                            <td>$ligne->prenom</td>
                            <td>$ligne->upernom</td>
                            <td>$ligne->matricule</td>
                            <td>$ligne->tel</td>
                            <td>$ligne->email</td>
                            <td><span class=\"label label-success\">Niveau $ligne->niveau</span>
                            </td>
                            <td>
                                 <div  style='display: inline-block'>
                                    <button class='btn btn-primary showChild btnSmall' value='".$ligne->id."'><img class=\"logouser\" src=\"/public/img/right-arrow.png\"></button>
                                </div>  
                             </td></tr>
                           
                            
                          ";
        }
        ?>
    </table>
</div>


<div class="row text-right killMargin killPappin" id="paginate" style="height: ">

    <?= \src\Helper::links() ?>
</div>

<!-- AJOUT DISTRIBUTEUR POPUP -->


<!-- LIST FILS -->

<div class="popopChild" >

    <div style="width: 80%;margin: auto">
        <div class="panel panel-primary">
            <div class="panel-heading text-center " ><button class="btn btn-danger btnChildRigth"  id="hideChild" style="position: absolute;right: 10%;top:10%;"><img src="/public/img/cancel2.png" class="text-right"></button> Tableau de parenté  </div>
            <div class="panel-body" style="overflow: scroll; height: 500px" id="listFils">



            </div>
        </div>
    </div>
</div>
<!-- FINLIST FILST -->

<div class="popopChild-child" >

    <div style="width: 80%;margin: auto">
        <div class="panel panel-primary">
            <div class="panel-heading text-center  "><button class="btn btn-primary returnChild btnChildLelt" ><img src="/public/img/retour11.png" class="text-right"></button> Tableau de parenté  </div>
            <div class="panel-body listFils-fils" style="overflow: scroll; height: 500px" >



            </div>
        </div>
    </div>
</div>
<!-- FINLIST FILST -->