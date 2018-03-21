<?php
/* Smarty version 3.1.30, created on 2018-03-08 21:32:03
  from "/Users/macintosh/Desktop/Php SECK/samanemvc/view/joueur/add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa19dc3757319_97654046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0db8edd0dddcc09512e6bbc6191ac5355a670d58' => 
    array (
      0 => '/Users/macintosh/Desktop/Php SECK/samanemvc/view/joueur/add.html',
      1 => 1520541121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa19dc3757319_97654046 (Smarty_Internal_Template $_smarty_tpl) {
?>


    <div style="width: 70%;margin: auto">
        <div class="panel panel-success">
            <div class="panel-heading"> Formulaire d'ajout de Distributeur</div>
            <div class="panel-body">

                <div class="form-group">
                    <label for="nomJA" class="control-label">Nom</label>
                    <input type="text" name="nomJA" id="nomJA" required="required" class="form-control"/>
                    <input type="hidden" value="" id="niveauDist" name="niveauDist">
                </div>
                <div class="form-group">
                    <label for="prenomJA" class="control-label">Prenom</label>
                    <input type="text" name="prenomJA" id="prenomJA" required="required" class="form-control"/>
                </div>

               <select name="entraineur">
                   <option value=""> </option>
               </select>

                <select name="discipline">
                    <option value=""> </option>
                </select>


                <div class="form-group" style="text-align: center">
                    <button class="btn btn-primary" type="submit" id="saveJoueur" name="valider"> Enregistrer</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-danger" type="reset" name="hideAddJouer" id="hideAddJouer"> Annuler</button>
                </div>

            </div>
        </div>
    </div>
<?php }
}
