<?php
/* Smarty version 3.1.30, created on 2018-03-08 21:02:38
  from "/Users/macintosh/Desktop/Php SECK/samanemvc/view/default.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa196dece76e9_59323545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7710e3a3abe77bdead425d7ebd909c639c2bc839' => 
    array (
      0 => '/Users/macintosh/Desktop/Php SECK/samanemvc/view/default.html',
      1 => 1520539357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa196dece76e9_59323545 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/app.css">

    <link rel="stylesheet" media="screen" href="/public/css/mycss.css">
    <title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
<!--STAR NAV --->
<nav>
    <!-- NAV  BAR--->
    <div class="row menuBarMain  " >
        <div class="col-md-3 col-lg-3 col-sm-6  col-xs-7 col-md-offset-5 col-lg-offset-5 col-sm-offset-4 col-xs-4" >
            <div class="logoPExp">
                <a class="h3" href="/">OLYMPIC GAME</a>
            </div>
        </div>


    </div>
    <!-- NAV  BAR END--->
</nav>
<!--END NAV --->

<!-- MAIN CONTAINER--->

<div class="container" style="margin: 0;padding: 0">
    <!-- NAV  LEFT--->
    <div class="navLeft ">
        <div class="bouttonSlide" >
            <img id ="imgslide1" src="/public/img/menusmall2.png" >
            <img id ="imgslide2" src="/public/img/menu.png" >
        </div>
        <div class="containmenuItemLeft">
            <div class=" menuItemBarLeft"><a href="/"><img class="iconeItemMenu" src="/public/img/home.png" ><span class="libMenuItem">&nbsp;&nbsp;&nbsp;Home</span></a></div>
            <div class=" menuItemBarLeft"><a href="/discipline"><img class="iconeItemMenu" src="/public/img/pp.png" ><span class="libMenuItem">&nbsp;&nbsp;&nbsp;Players</span></a></div>



        </div>
    </div>
    <!-- NAV  FELT END--->
    <!-- OTHER PAGE -->
    <div class=" otherpage  ">




        <h1 class="h3  killMargin titleTab " style="color: black">
            Olympic Game player
        </h1>
        <hr>
        <h1 class="h3 alert-success text-leftr blu">

        </h1>

        <div class="row rechercheAndAddCollapContainer">
            <div class="col-md-3">
                <div class="form-group">
                    <input type="text" id="RechercheDistInput" required name="RechercheJoueur" placeholder="Rechercher" class="form-control smallInput" style="width: 153px;display: inline-block">
                    <div class="btn btn-primary btnSmall" id="RechercheJoueur">
                        <img class="iconeItemMenu"  src="/public/img/search2.png" >
                    </div>
                    <div id="findRechercheJoeur" class="btn btn-danger btnSmall"><img src="/public/img/cancel-button.png"></div>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-6" id="addJoueurtButon">
                <button class="btn btn-success " > Ajouter un nouveau joueur</button>
            </div>


        </div>
        <div class="h1">

        </div>

        <div class="row" id="tableDiste">
            <table class="table table-hover dataTable table-striped">
                <thead >

                <tr class="gras">
                    <th>Id</th>
                    <th>PRENOM </th>
                    <th>NOM</th>
                    <th>Action</th>
                </tr>
                </thead>

<!--


                <td>
                    <div  style='display: inline-block'>
                        <button class='btn btn-success showEditJouer btnSmall' value=""><img class="logouser" src="/public/img/edit.png"></button>
                    </div>
                    <div  style='display: inline-block'>
                        <input type='hidden' name='id' value='".$ligne->id."'>
                        <button class='btn btn-danger deletJoueur btnSmall' value=""><img class="logouser" src="/public/img/delete.png"></button>
                    </div>


                </td>
                </tr>


            -->

            </table>

        </div>


    </div>

</div>
<!-- FOOTER--->
<footer>

</footer>
<!-- FOOTER END--->


<!-- dynamic popu-->
<div id="addPopul" >



</div>
<!-- FINPOPUP  -->

  <div class="alertMessageSucces">
     <div style="width: 40%;margin: auto">
            <div class="panel panel-success " style="margin: 35% 10% 15% 10%;margin-bottom: 0px">
                     <div class="panel-heading text-center">
                         Information
                     </div>
                     <div class="panel-body" style="margin: 0">
                            <div class="text-center" style="margin-bottom: 10px">
                                  <span CLASS="textMessageSucces">Succes</span>
                            </div>
                            <div class="text-center">
                                  <button class="btn btn-primary" id="hideBtnMessageSucess">Ok</button>
                            </div>
                     </div>
                 </div>
            </div>
     </div>


<!--
MESSAGE DANGER STARD

-->
      <div class="alertMessageDanger">
          <div style="width: 40%;margin: auto">
              <div class="panel panel-danger " style="margin: 35% 10% 15% 10%;margin-bottom: 0px;">
                          <div class="panel-heading text-center">
                              Information
                          </div>
                          <div class="panel-body" style="margin: 0">
                            <div class="text-center" style="margin-bottom: 10px">
                                  <span CLASS="textMessageDanger">Erreur </span>
                            </div>
                             <div class="text-center">
                                  <button class="btn btn-danger" id="hideBtnMessageDanger">Ok</button>
                            </div>
                          </div>
                  </div>
              </div>
          </div>

<!--
INFO  MESSAGE

-->
<div class="alertMessageInfo">
    <div style="width: 40%;margin: auto">
        <div class="panel panel-info " style="margin: 35% 10% 15% 10%;margin-bottom: 0px;">
            <div class="panel-heading text-center">
                Information
            </div>
            <div class="panel-body" style="margin: 0">
                <div class="text-center" style="margin-bottom: 10px">
                    <span CLASS="textMessageInfo">Info </span>
                </div>
                <div class="text-center">
                    <button class="btn btn-info" id="hideBtnMessageInfo">Ok</button>
                </div>
            </div>
        </div>
    </div>
</div>




<!--
END MESSAGE





-->
    <?php echo '<script'; ?>
 src="/public/js/jquery.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="/public/js/mymenu.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
