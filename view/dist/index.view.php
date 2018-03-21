
<h1 class="h3 texBlu killMargin titleTab">
    Tous les distributeurs
</h1>
<div class="barHorizontal blu">

</div>
<h1 class="h3 alert-success text-leftr blu">

</h1>

<div class="row rechercheAndAddCollapContainer">
    <div class="col-md-3">
            <div class="form-group">
                <input type="text" id="RechercheDistInput" required name="RechercheDist" placeholder="Rechercher" class="form-control smallInput" style="width: 153px;display: inline-block">
                <div class="btn btn-primary btnSmall" id="RechercheDist">
                    <img class="iconeItemMenu"  src="/public/img/search2.png" >
                </div>
                <div id="findRechercheDist" class="btn btn-danger btnSmall"><img src="/public/img/cancel-button.png"></div>
            </div>
    </div>
    <div class="col-md-3 col-md-offset-6" id="addDistButon">
       <button class="btn btn-danger smallInput" style="padding: 1px 3px"> Ajouter un nouveau distributeur</button>
    </div>


 </div>
    <div class="h1">

    </div>

    <div class="row" id="tableDiste">
        <table class="table table-hover dataTable table-striped">
            <thead >

            <tr class="gras">
                <th>PRENOM </th>
                <th>NOM</th>
                <th>MATRICULE</th>
                <th>TELEPHONE</th>
                <th>EMAIL</th>
                <th>NIVEAU</th>
                <th>Action</th>
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
                                    <button class='btn btn-success showEdition btnSmall' value='".$ligne->id."'><img class=\"logouser\" src=\"/public/img/edit.png\"></button>
                                </div>
                                <div  style='display: inline-block'>
                                    <input type='hidden' name='id' value='".$ligne->id."'>
                                    <button class='btn btn-danger deleteDist btnSmall' value='".$ligne->id."' ><img class=\"logouser\" src=\"/public/img/delete.png\"></button>
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

<div id="ajoutDistPopop" >


    <div style="width: 70%;margin: auto">
        <div class="panel panel-success">
            <div class="panel-heading"> Formulaire d'ajout de Distributeur</div>
            <div class="panel-body">

                <div class="form-group">
                    <label for="nom" class="control-label">Nom</label>
                    <input type="text" name="nom" id="nomadDist" required="required" class="form-control"/>
                    <input type="hidden" value="" id="niveauDist" name="niveauDist">
                </div>
                <div class="form-group">
                    <label for="prenomAdist" class="control-label">Prenom</label>
                    <input type="text" name="prenom" id="prenomAdist" required="required" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="mate" class="control-label">Matricule</label>
                    <input type="text" name="mat" id="mateaddDist" required="required" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="mail" class="control-label">Email</label>
                    <input type="email" name="mail" id="mailadDist"  class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="tel" class="control-label">Téléphone</label>
                    <input type="tel" name="tel" id="teladDist" required="required" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="tel" class="control-label">Matricule parent</label>
                    <input type="tel" name="matParentDistEdit" id="matParentDistEdit" required="required" class="form-control" value=""/>
                </div>

                <div class="form-group" style="text-align: center">
                    <button class="btn btn-primary" type="submit" id="saveDist" name="valider"> Enregistrer</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-danger" type="reset" name="hideAddDist" id="hideAddDist"> Annuler</button>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- FINPOPUP  -->

<!-- EDIDE DISTRIBUTEUR POPUP -->

<div id="edittDistPopop" >


    <div style="width: 70%;margin: auto">
        <div class="panel panel-success">
            <div class="panel-heading"> Formulaire d'édition de distributeur</div>
            <div class="panel-body">

                <div class="form-group">
                    <label for="NomColEdit" class="control-label">Nom</label>
                    <input type="text" name="NomDistEdit" id="NomDistEdit" required="required" class="form-control" value=""/>
                    <input type="hidden" name="idDistEdit" id="idDistEdit" value="">
                </div>
                <div class="form-group">
                    <label for="prenom" class="control-label">Prenom</label>
                    <input type="text" name="prenomDistEdit" id="prenomDistEdit" required="required" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="mateEdit" class="control-label">Matricule</label>
                    <input type="text" name="matDistEdit" id="matDistEdit" DISABLED required="required" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="mail" class="control-label">Email</label>
                    <input type="email" name="mailDistEdit" id="mailDistEdit"  class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="tel" class="control-label">Téléphone</label>
                    <input type="tel" name="telDistEdit" id="telDistEdit" required="required" class="form-control" value=""/>
                </div>

                <div class="form-group" style="text-align: center">
                    <button class="btn btn-primary" type="submit" name="updateDistEdit" id="updateDistEdit"> Enregistrer</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-danger" type="reset" name="hideEditDist" id="hideEditDist"> Annuler</button>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- FINPOPUP  -->