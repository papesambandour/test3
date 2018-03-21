


<div style="width: 50%;margin: auto; min-width: 500px">

    <h1 class="h3 titleTab" style="margin-bottom: 30px; text-align: center;">Créditer un distributeur</h1>
    <h1 class="h5 titleTab btn-danger" id="messageDangerTrans" style="margin-bottom: 30px; text-align: center;">Matricule inexistant</h1>
    <div class="panel panel-info formAddCollab">

        <div class="panel-heading"> Formulaire de créditation </div>
        <div class="panel-body">
            <form method="post" action="/trans/save" class="form-group">
                <div class="form-group">
                    <label for="nom" class="control-label">Matricule Distributeur</label>
                    <input type="text" name="nom" id="mat" required="required" value="" class="form-control"/>
                    <input type="text" name="distributeur_id" id="distributeur_id" value="" style="display: none">
                </div>
                <div class="cache">
                    <div class="form-group">
                        <label for="prenom" class="control-label">Prenom</label>
                        <input type="text" name="prenom" id="prenom"  required="required" disabled value="" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="nom" class="control-label">Nom</label>
                        <input type="text" name="nom" id="nom" required="required" value="" disabled class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Designation</label>
                    <select name="designation_id" required="required" class="form-control">
                        <option value="" selected disabled hidden>...</option>
                        <?php

                        while ($designation = $designations->fetch())
                        {

                            echo "<option value='".$designation->id."'> ".$designation->libele ."</option>";

                        }
                        ?>
                    </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Choisir la date</label>
                    <input type="date" required="required" name="date" value="<?php echo date('Y-m-d'); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="montant" class="control-label">Montant</label>
                        <input type="number" name="montant" id="montant" required="required" class="form-control"/>
                    </div>
                    <div class="form-group" style="text-align: center">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;
                        <button type="reset" id="anulerTrans" class="btn btn-danger" >Annuler</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>