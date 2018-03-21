
<h1 class="h1" style="margin-bottom: 30px; text-align: center;">Ajouter de Distributeur</h1>

<div style="width: 70%;margin: auto">
    <div class="panel panel-info">
        <div class="panel-heading"> Formulaire d'ajout de Distributeur</div>
        <div class="panel-body">
            <form method="post" action="/dist/save" class="form-group">
                <div class="form-group">
                    <label for="nom" class="control-label">Nom</label>
                    <input type="text" name="nom" id="nom" required="required" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="prenom" class="control-label">Prenom</label>
                    <input type="text" name="prenom" id="prenom" required="required" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="mate" class="control-label">Matricule</label>
                    <input type="text" name="mat" id="mate" required="required" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="mail" class="control-label">Email</label>
                    <input type="email" name="mail" id="mail"  class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="tel" class="control-label">Téléphone</label>
                    <input type="tel" name="tel" id="tel" required="required" class="form-control"/>
                </div>

                <div class="form-group" style="text-align: center">
                    <button class="btn btn-primary" type="submit" name="valider"> Enregistrer</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-danger" type="reset" name="annuler" onclick="goBack()"> Annuler</button>
                </div>

            </form>
        </div>
    </div>
</div>