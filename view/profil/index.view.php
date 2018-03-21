<div class="container">
    <h1 class="text-center killPappin killMargin">Profile</h1>
<hr>
    <div class="row">
        <!-- left column -->


        <!-- edit form column -->
        <div class="col-md-8 personal-info col-md-offset-2">

            <h3 class="text-center">Informations personnelle</h3>

            <div class="form-horizontal" role="form">
                <div class="form-group">
                        <label class="col-md-2 control-label">Nom:</label>
                    <div class="col-lg-8">
                        <input class="form-control" id="nomProfil" name="nomProfil" type="text" value="<?= $user->nom ?>" >
                        <input class="form-control" id="idProfil" name="idProfil" type="hidden" value="<?= $user->id ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label text-left">Prénom:</label>
                    <div class="col-lg-8">
                        <input class="form-control" id="prenomProfil" name="prenomProfil" type="text" value="<?= $user->prenom ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Email:</label>
                    <div class="col-lg-8">
                        <input class="form-control" id="emaiProfil" name="emailProfil" type="text" value="<?= $user->email ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Tel:</label>
                    <div class="col-lg-8">
                        <input class="form-control" id="telProfil" name="telProfil" type="text" value="<?= $user->tel ?>" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" >Matricule:</label>
                    <div class="col-md-4">
                        <input class="form-control" type="text" disabled value="<?= $user->matricule ?>" >
                    </div>
                    <label class="col-md-2 control-label" >Niveau:</label>
                    <div class="col-md-4">
                        <div class="btn btn-success">Niveau : <?= $user->niveau ?> </div>
                    </div>
                </div>

                <div class="form-group">

                    <div class="col-md-7 col-md-offset-3">
                        <button type="submit" class="btn btn-primary" name="saveInfoProfil" value="Enregistrer" id="saveInfoProfil">Enregistrer</button>
                        <span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-default" name="showPassword"  id="showPassword">Modifier mot de passe</button>
                        <span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="reset" class="btn btn-default" name="cancelInfoProfil" value="Annuler" id="cancelInfoProfil">Annuler</button>
                    </div>
                </div>
                <hr>
                <!-- START EDIT PASSWORD -->



                <div id="contenerPassword">
                    <h3 class="text-center">Mot de passe</h3>
                    <br>

                    <div class="form-group">

                        <div class="">
                            <input class="form-control" type="password" value="" id="actuelPasswod" name="actuelPasswod" placeholder="Mot de passe actuel">
                        </div>

                    </div>
                    <div class="form-group">


                        <div class="">
                            <input class="form-control" type="password" value="" id="newPassword" name="newPassword" placeholder="Nouveau mot de passe">
                        </div>
                        <br>
                        <div class="">
                            <input class="form-control" type="password" value="" id="confirmPassword" name="confirmPassword" placeholder="Confirmer mot de passe">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-md-8 col-md-offset-4">
                            <button  type="submit" class="btn btn-primary" name="updatePasswordBtn" id="updatePasswordBtn" value="Enregistrer">Enregistrer</button>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <button type="reset" class="btn btn-default" name="cancelPassword" id="cancelPassword" value="Annuler">Annuler</button>
                        </div>
                    </div>
                </div>




                <!-- END PASSWORD- -->


            </div>
        </div>
    </div>
</div>


