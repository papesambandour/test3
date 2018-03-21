var trTableDistClickeEdition = null ;
var trTableDistClickedDel =null;
var trTableTransClikedEdition = null ;
var trTableTransClickeDelete = null;
var htlll = [] ;
var n = 0 ;

$(document).ready(function () {
    var ismall = true ;
    $('.bouttonSlide').on('click',function () {
        //affichage menu small
        if(!ismall)
        {
            $('.navLeft').animate({width : '-=165'},200,function () {
                $('#imgslide1').hide();
                $('#imgslide2').show();
                ismall = true;
            });
            $('.otherpage').animate({marginLeft:'-=165',width:'+=14%'},200);
            $('.libMenuItem').hide();
            // $('.iconeItemMenu').show();

        }else {
            //affichage menu
            $('.navLeft').animate({width : '+=165'},200,function () {
                $('.libMenuItem').show();
                //  $('.iconeItemMenu').hide();
                $('#imgslide1').show();
                $('#imgslide2').hide();
                ismall = false;
            });

            $('.otherpage').animate({marginLeft:'+=165',width:'-=14%'},200);
        }

    });
    ////DELETE MESSAGE FLATE
    $('#success').fadeOut(7500);
    $('#danger').fadeOut(7500);


    /////AJAX GET DISTRIBUTEUR PAR MAT - ADD TRANSACTION
    $("#mat" ).keyup(function() {
        var matricule = $("#mat" ).val();

        var url = 'trans/getDistributeur';

        $.post(url,
            {
                mat : matricule
            })
            .done(function(data) {
                var localData = jQuery.parseJSON(data+'');
                if(localData.id !== undefined)
                {
                   $('.cache').show();
                    $('#prenom').val(localData.prenom);
                    $('#nom').val(localData.nom);
                    $('#distributeur_id').val(localData.id);
                    setTimeout(function () {
                        $('#messageDangerTrans').hide();
                    },1000);
                }
                else {
                    $('#messageDangerTrans').show();

                    $('#prenom').val('');
                    $('#nom').val('');
                    $('#distributeur_id').val('');
                }

            });
    });
///////////BUTON CANCEL TRANSACTION
    $('#anulerTrans').on('click',function () {
        $('.cache').hide();
    });


 //////ajax recherche dist
 $('#RechercheDist').on('click',function () {
     var url = 'dist/search',matdist = $('#RechercheDistInput').val();//matdist : nom matricule ou prenom
     $.post(url,
         {
             matdist : matdist
         })
         .done(function(html) {
            // var localData = jQuery.parseJSON(data+'');
             if(html==false)
             {
                $('.textMessageInfo').html("Pas De Résultat")
                 $('.alertMessageInfo').show();
             }
             else {
                 $('#findRechercheDist').show();
                 $('#findRechercheDist').css('visibility','visible');
                 $('#paginate').hide();
                 $('#tableDiste').html(html);
             }

         });
 });

////ajax finish recherche dist
    $('#findRechercheDist').on('click',function () {
        var url = 'dist/endsearchdis';

        $.post(url)
            .done(function(html) {
                if(html==false)
                {
                    alert('Verifier votre connexion internet');
                }
                else {
                    $('#tableDiste').html(html);
                    $('#paginate').show();
                 //   $('#findRechercheDist').hide();
                    $('#findRechercheDist').css('visibility','hidden');
                }

            });
    });
//////ADDD DIST POPUP

     //////HIDE POPUD
    $('#hideAddDist').on('click',function () {
        $('#ajoutDistPopop').hide()
    });
    //////SHOW POPUD
    $('#addDistButon').on('click',function () {
        $('#ajoutDistPopop').show()
    });
    //////
    $('#saveDist').on('click',function () {

        if($('#nomadDist').val() == '' || $('#prenomAdist').val() == '' || $('#mateaddDist').val() == '')
        {
            $('.textMessageDanger').html('Renseignez les champs Nom Prénom et Matricule');
            $('.alertMessageDanger').show();
        }
        else
                {
                    var urlSaveDist = '/dist/save';
                    $.post(urlSaveDist,{
                        nom:  $('#nomadDist').val(),
                        prenom: $('#prenomAdist').val(),
                        mat:  $('#mateaddDist').val(),
                        mail :   $('#mailadDist').val(),
                        tel :  $('#teladDist').val(),
                        matParentDist : $('#matParentDistEdit').val()
                    }).done(function (donnes) {
                        console.log(donnes);
                        if(donnes == 1)
                        {
                            $('.textMessageSucces').html('Ajout de distributeur sans parent reussit!');
                            $('#ajoutDistPopop').hide();
                            $('#nomadDist').val('');$('#prenomAdist').val('');$('#mateaddDist').val('');
                            $('#mailadDist').val('');$('#teladDist').val('');$('#matParentDistEdit').val('')
                            $('.alertMessageSucces').show();
                        }
                        else if (donnes == 2)
                        {
                          //  alert("MATRICULE EXITE DEJA")
                            $('.textMessageDanger').html('Le matricule est déja pris');
                            $('.alertMessageDanger').show();
                        }
                        else if(donnes == 11)
                        {
                            $('.textMessageSucces').html('Ajout de distributeur avec parent reussit !');
                            $('#ajoutDistPopop').hide();
                            $('#nomadDist').val('');$('#prenomAdist').val('');$('#mateaddDist').val('');
                            $('#mailadDist').val('');$('#teladDist').val('');$('#matParentDistEdit').val('')
                            $('.alertMessageSucces').show();
                        }
                        else if(donnes == 13)
                        {
                            //  alert("MATRICULE EXITE DEJA")
                            $('.textMessageDanger').html("Le matricule parent n'exist pas ! ");
                            $('.alertMessageDanger').show();
                        }
                    });
                }

    });
//////EDITION DE DIST PAR POPUP
        //////BUTON HIDE POPU EDID
    $('#hideEditDist').on('click',function () {
            $('#edittDistPopop').hide();
    });

    /////buton show dist edition
    $(document).on('click','.showEdition',function () {
        /*GARDE LE BUTTON SUR LE QUELLE ON A CLICKEE POUR L'UTILISEE SUR LE UPDATE POUR REMPLACER LES DONNES SUR LA TABLE*/
        trTableDistClickeEdition = $(this).parent().parent().parent();
        var urlUpdateDist = "/dist/getDistByid" ;
        $.post(urlUpdateDist,{
            idMatDist : $(this).val()
        }).done(function (distEdit) {

            $('#edittDistPopop').show();
            distEditParsed = jQuery.parseJSON(distEdit);
            $('#idDistEdit').val(distEditParsed.id);$('#NomDistEdit').val(distEditParsed.nom);
            $('#prenomDistEdit').val(distEditParsed.prenom);$('#matDistEdit').val(distEditParsed.matricule);
            $('#mailDistEdit').val(distEditParsed.email);$('#telDistEdit').val(distEditParsed.tel);
            $('#niveauDist').val(distEditParsed.niveau);

        });

    });
    ////UPDATE DIST
    $('#updateDistEdit').on('click',function () {
        var urlUpdateDist = "/dist/update";
        $.post(urlUpdateDist,{
            idDistEdit: $('#idDistEdit').val(),
            NomDistEdit: $('#NomDistEdit').val(),
            prenomDistEdit : $('#prenomDistEdit').val(),
            matDistEdit : $('#matDistEdit').val(),
            mailDistEdit : $('#mailDistEdit').val(),
            telDistEdit : $('#telDistEdit').val()
        }).done(function (resultUpdate) {
            if(resultUpdate == 1)
            {

                var htmlHrowUpdate =
                    "                            <td>"+ $('#prenomDistEdit').val()+"</td>\n" +
                    "                            <td>"+ $('#NomDistEdit').val().toLowerCase()+"</td>\n" +
                    "                            <td>"+ $('#matDistEdit').val()+"</td>\n" +
                    "                            <td>"+ $('#telDistEdit').val()+"</td>\n" +
                    "                            <td>"+ $('#mailDistEdit').val()+"</td>\n" +
                    "                            <td><span class=\"label label-success\">Niveau "+ $('#niveauDist').val()+"</span>\n" +
                    "                            </td>\n" +
                    "                            <td>\n" +
                    "                                 <div  style='display: inline-block'>\n" +
                    "                                    <button class='btn btn-success showEdition btnSmall' value=\'"+$('#idDistEdit').val() +"\'><img class=\"logouser\" src=\"/public/img/edit.png\"></button>\n" +
                    "                                </div>\n" +
                    "                                <div  style='display: inline-block'>\n" +
                    "                                    <button class='btn btn-danger deleteDist btnSmall' value=\'"+$('#idDistEdit').val() +"\' ><img class=\"logouser\" src=\"/public/img/delete.png\"></button>\n" +
                    "                                </div>\n" +
                    "                                \n" +
                    "                                \n" +
                    "                             </td>";

                trTableDistClickeEdition.html(htmlHrowUpdate);
                trTableDistClickeEdition = null;
                $('#edittDistPopop').hide();
                $('.textMessageSucces').html('Distibuteur mise a jour avec succes');
                $('.alertMessageSucces').show();
            }
            else
            {
                $('#edittDistPopop').hide();
                $('.textMessageInfo').html('Infos distributeur non modifier');
                $('.alertMessageInfo').show();
            }
        });
    });
        ///////delete dist
    $(document).on('click','.deleteDist',function () {
        trTableDistClickedDel =  $(this).parent().parent().parent();
        if(confirm("Voulez vous Suprimer cette distributeur"))
        {
            var urlDelDist = "/dist/delete";
            $.post(urlDelDist,{
                idDist : $(this).val()
            }).done(function (delInfoDis) {
                if(delInfoDis == 1)
                {
                    trTableDistClickedDel.html('');
                    trTableDistClickedDel=null;
                    $('.textMessageSucces').html('Distibuteur supprimé avec succes');
                    $('.alertMessageSucces').show();

                }
                else
                {
                    $('.textMessageDanger').html('Echec suppression vérifier votre connexion');
                    $('.alertMessageDanger').show();
                }
            });
        }
    });
    ///////MESSAGE SUCES HIDE BTN
    $('#hideBtnMessageSucess').on('click',function () {
        $('.alertMessageSucces').hide();

    });
    $('#hideBtnMessageDanger').on('click',function () {
        $('.alertMessageDanger').hide();
    });

    $('#hideBtnMessageInfo').on('click',function () {
        $('.alertMessageInfo').hide();
    });
////////////SAVE PASSSWORD

    $('#updatePasswordBtn').on('click',function () {
        if($('#actuelPasswod').val() == '' || $('#newPassword').val() == '' || $('#confirmPassword').val() == '')
        {
            $('.textMessageDanger').html('Renseignez les champs Mots de Passe');
            $('.alertMessageDanger').show();
        }
        else
        {
            var urlSaveUserPassword = '/profil/updatePassword';
            $.post(urlSaveUserPassword,{
                actuelPasswod:  $('#actuelPasswod').val(),
                newPassword: $('#newPassword').val(),
                confirmPassword:  $('#confirmPassword').val()
            }).done(function (donnesPassword) {

                if(donnesPassword == 1)
                {
                    $('.textMessageSucces').html('Mot de passe Modifier avec succée');
                    $('#newPassword').val('');$('#confirmPassword').val('');
                    $('#actuelPasswod').val('');
                    $('.alertMessageSucces').show();
                }
                else if (donnesPassword == 2)
                {
                    $('.textMessageDanger').html('Confirmer avec le meme mot de passe');
                    $('.alertMessageDanger').show();
                }
                else if (donnesPassword == 3)
                {
                    $('.textMessageDanger').html('Votre mot de passe est incorecte');
                    $('.alertMessageDanger').show();
                }
            });
        }

    });

    ////////////SAVE PROFILE

    $('#saveInfoProfil').on('click',function () {
        if($('#nomProfil').val() == '' || $('#prenomProfil').val() == '' )
        {
            $('.textMessageDanger').html('Renseignez les champs Nom et Prenom Correctement');
            $('.alertMessageDanger').show();
        }
        else
        {
            var urlSaveUserInfo = '/profil/updateInfoProfile';
            $.post(urlSaveUserInfo,{
                nomProfil:  $('#nomProfil').val(),
                prenomProfil: $('#prenomProfil').val(),
                emaiProfil:  $('#emaiProfil').val(),
                telProfil : $('#telProfil').val(),
                idProfil : $('#idProfil').val()
            }).done(function (donnesUserProfil) {
                var donesUserParsee  = jQuery.parseJSON(donnesUserProfil);
                if(donesUserParsee.nom !== undefined)
                {
                    $('#nomProfil').val(donesUserParsee.nom);
                    $('#prenomProfil').val(donesUserParsee.prenom);
                    $('#emaiProfil').val(donesUserParsee.email);
                    $('#telProfil').val(donesUserParsee.tel);
                    $('.textMessageSucces').html('Info Modifer Avec Succée');
                    $('.alertMessageSucces').show();
                }
                else
                {
                    $('.textMessageDanger').html('Erreu De Modification');
                    $('.alertMessageDanger').show();
                }

            });
        }

    });

    //////SHOW EDIT PASSWORD
    $('#showPassword').on('click',function () {
        $('#contenerPassword').show();
    });
    ///HIDE EDIT PASSWORD
    $('#cancelPassword').on('click',function () {
        $('#contenerPassword').hide();
    });
    ////INIT VALUE PROFILE
    $('#cancelInfoProfil').on('click',function () {
        var urlInitInfoProfil = "/profil/initDefaultValue";

        $.post(urlInitInfoProfil).done(function (initUser) {
            var initUserparsed = jQuery.parseJSON(initUser);

           // $('.textMessageSucces').html('Les données sont reinitialisées');
          //  $('.alertMessageSucces').show();
            $('#nomProfil').val(initUserparsed.nom);
            $('#prenomProfil').val(initUserparsed.prenom);
            $('#emaiProfil').val(initUserparsed.email);
            $('#telProfil').val(initUserparsed.tel);
        });
    });
////////////STATISTIQUE
    $(document).on('click', '#all', function () {
        if ($('#allDate').is(':checked')) {
            $("#dateDebut").prop('disabled', true);
            $("#dateFin").prop('disabled', true);
        } else {
            $("#dateDebut").prop('disabled', false);
            $("#dateFin").prop('disabled', false);
        }
    });
    $('#trieDateStatistique').on('click',function () {
        var urlTrieDate ="/statis/trieDate" ;
        var all= $('#allDate').is(':checked') ? 'yes' : 'no';
        $.post(urlTrieDate,{
            dateDebut: $('#dateDebut').val(),
            dateFin : $('#dateFin').val(),
            matricule : $('#matriculeTriSta').val(),
            allDate : all
        }).done(function (listStatistikTrie) {
            if(listStatistikTrie == false)
            {
                $('.textMessageDanger').html("Pas de transaction sur cette periode");
                $('.alertMessageDanger').show();
            }
            else
            {
                $('#dendTriSta').show();
                $('#contenerMainTabLisStatis').html(listStatistikTrie);

            }

        });
    });

//////end

    /////END TRIE TRANSACTION

    $(document).on('click','#dendTriSta',function () {
        $.get("statis").done(function (donnesStaistik) {
            $('body').html(donnesStaistik);
            $('#dendTriSta').hide();
        })
    });
    //////TABLEAU DE BORD : LES BOUTON MODIFIER ET SUPRIMER

//////AFFICHE TRANS EDIT
    $(document).on('click','.showEditTrans',function () {
        var urlEditTrans = "gettrans";
        $.post(urlEditTrans,{
            idTrans : $(this).val()
        }).done(function (dataTrans) {
            $('#edittTransPopop').show();
            var dataTransParsed = jQuery.parseJSON(dataTrans);
            $('#matDistTrans').val(dataTransParsed.matricule);
            $('#prenomDistTrans').val(dataTransParsed.prenom);
            $('#nomDistTrans').val(dataTransParsed.nom);
            $('#dateTrans').val(dataTransParsed.date);
            $('#montantTrans').val(dataTransParsed.montant);
            $('#designation_idDistTrans option[value='+dataTransParsed.designation_id+']').attr('selected','selected');
            $('#idTrans').val(dataTransParsed.idTrans);
            $('#telTrans').val(dataTransParsed.tel);
            $('#emailTrans').val(dataTransParsed.email);
            $('#niveauTrans').val(dataTransParsed.niveau);
        });
    });

    /////UPDATE TRANSACTION

    $('#updateTrans').on('click',function () {
        var urlUpdateTrans = "update";
        $.post(urlUpdateTrans,{
            idEditTras:$('#idTrans').val(),
            dateEditTras : $('#dateTrans').val(),
            montantEditTras : $('#montantTrans').val(),
            idDesignEditTras : $('#designation_idDistTrans option:selected').val()
        }).done(function (doneeUpdateTrans) {
            console.log(doneeUpdateTrans);
            if(doneeUpdateTrans == 1)
            {
                ////MISE A JOUR DES CHAMPS SUR LE TABLEAUX
                var dateTrans = new Date($('#dateTrans').val());
                var month = parseInt(dateTrans.getMonth()) + 1;
                var dateFr = dateTrans.getDate()+'-'+ month +'-'+dateTrans.getFullYear();
                var idtranse = $('#idTrans').val();
                $('#matricule'+idtranse+'').html($('#matDistTrans').val());
                $('#prenom'+idtranse+'').html($('#prenomDistTrans').val());
                $('#nom'+idtranse+'').html($('#nomDistTrans').val());
                $('#date'+idtranse+'').html(dateFr);
                $('#montant'+idtranse+'').html($('#montantTrans').val());
                $('#tel'+idtranse+'').html($('#telTrans').val());
                $('#email'+idtranse+'').html($('#emailTrans').val());
                $('#niveau'+idtranse+'').html('Niveaux ' + $('#niveauTrans').val());
                $('#libele'+idtranse+'').html($('#designation_idDistTrans option:selected').text());
                ///
                $('#edittTransPopop').hide();
                $('.textMessageSucces').html('Transaction Modifer Avec Succée');
                $('.alertMessageSucces').show();
            }
            else
            {
                $('#edittTransPopop').hide();
                $('.textMessageInfo').html("Transaction non modifié");
                $('.alertMessageInfo').show();
            }
        });
    });
    ///////HIDE TRANS EDIT
    $('#anulerEditTrans').on('click',function () {
        $('#edittTransPopop').hide();
        //$("body > div > div > div:not('#edittTransPopop') ").removeClass("bueEfett");

    });
//////
    ////DELETE TRANSACTION
    $(document).on('click','.deleteTrans',function () {
        trTableTransClickeDelete =$(this).parent().parent().parent();
        if(confirm("Voulez vous suprimer la transaction"))
        {
            var urlDeltRANS = "delete";
            $.post(urlDeltRANS,{
                idDelTras : $(this).val()
            }).done(function (dataDelTrans) {
                if(dataDelTrans == 1)
                {
                    trTableTransClickeDelete.html("");
                    trTableTransClickeDelete = null;
                    $('.textMessageSucces').html('Transaction supprimé Avec Succée');
                    $('.alertMessageSucces').show();
                }
                else
                {
                    $('.textMessageInfo').html("Transaction non supprimé");
                    $('.alertMessageInfo').show();
                }
            });
        }
    });
    ///END TRANSACTION DELETE


    ///////HOME TRANSACTION RECHERCHE
    $(document).on('click','#RechercheHome',function () {
        var urlSearchTrans = "seachtrans";
        var all= $('#allDate').is(':checked') ? 'yes' : 'no';
        $.post(urlSearchTrans,{
            dateDebut: $('#dateDebut').val(),
            dateFin : $('#dateFin').val(),
            matricule : $('#RechercheDistForTrans').val(),
            allDate : all
        }).done(function (dataSearchTrans) {
            if(dataSearchTrans == 0)
            {
                $('.textMessageInfo').html("Pas de résultats trouvés");
                $('.alertMessageInfo').show();
            }else
            {
                $('#finrecherchHome').css('visibility','visible');
                $('#tableTrans').html(dataSearchTrans);
            }

        });
    });


    ///////HOME TRANSACTION END RECHERCHE
    $(document).on('click','#finrecherchHome',function () {
        var urlSearchTrans = "endseachtrans";
        $.post(urlSearchTrans).
        done(function (dataEndSearchTrans) {
            $('#RechercheDistForTrans').val('')
            $('#finrecherchHome').css('visibility','hidden');
            $('#tableTrans').html(dataEndSearchTrans);
            $('#allDate').prop('checked', false);
        });
    });



    /////////////
        ///HILE CHILD
    $(document).on('click','#hideChild',function () {
        $('.popopChild').hide();
    });
    ///SHOW CHILD
    $(document).on('click','.showChild',function () {

        var urlChildget = "/child/getchild";
        $.post(urlChildget,{
            idDistParent : $(this).val()
        }).done(function (dataChild) {
            if(dataChild) {
                try {
                    dataChildParsed = jQuery.parseJSON(dataChild);
                    $('.textMessageInfo').html("Pas d'enfant pour "+dataChildParsed.prenom +' '+dataChildParsed.nom);
                    $('.alertMessageInfo').show();
                } catch(e) {
                    $('.popopChild').show();
                    $('#listFils').html(dataChild);
                }
            }

        })
    });

/////child of child


    ///SHOW CHILD child
    $(document).on('click','.showChild-child',function () {

        var urlChildget = "/child/getchild";
        $.post(urlChildget,{
            idDistParent : $(this).val()
        }).done(function (dataChild) {
            if(dataChild) {
                try {
                    dataChildParsed = jQuery.parseJSON(dataChild);
                    $('.textMessageInfo').html("Pas d'enfant pour "+dataChildParsed.prenom +' '+dataChildParsed.nom);
                    $('.alertMessageInfo').show();
                } catch(e) {
                    $('.popopChild-child').show();
                    $('.listFils-fils').html(dataChild);
                    htlll[n] = dataChild;
                    n++;
                }
            }

        })
    });

    ////hide child child
    $(document).on('click','.returnChild',function () {
        n--;
        if(n == 0)
        {
            $('.popopChild-child').hide();
            htlll = [];
        }
        $('.listFils-fils').html(htlll[n-1]);

    });



    //////Recherche dist child

    $(document).on('click','#RechercheDistChid',function () {
        var urlserachDistChild = "child/search";
        $.post(urlserachDistChild,{
            matDistViaChild : $('#RechercheDistChisld').val()
        }).done(function (dataDistResut) {
            if(dataDistResut == 0)
            {
                $('.textMessageInfo').html("Pas de resultat");
                $('.alertMessageInfo').show();
            }
            else
            {
                $('#findRechercheDistChild').css('visibility','visible');
                $('#tableDisteChild').html(dataDistResut);
                $('#paginate').hide();
            }
        })
    });



////end recher
    $(document).on('click','#findRechercheDistChild',function () {
        var urlserachDistChildEnd = "child/endsearch";
        $.post(urlserachDistChildEnd).done(function (dataDistEndSearch) {

            $('#findRechercheDistChild').css('visibility','hidden');
            $('#tableDisteChild').html(dataDistEndSearch);
            $('#paginate').show();
            $('#RechercheDistChisld').val('')

        });


    });

///////SHOW NATURE
    $(document).on('click','.showNature',function () {
        var urlNature = "/gains/nature" ;
        $.get(urlNature,{
            idgain : $(this).val()
        }).done(function (listNature) {

            try
            {
                var listNatureParsed = jQuery.parseJSON(listNature);
                if(listNatureParsed.length > 0)
                {
                    var htmlNature = "";
                    for(var i = 0 ; i < listNatureParsed.length ; i++)
                    {
                        htmlNature += "<div class='btn btn-success' style='text-align: left'> Nature : " + listNatureParsed[i].libele_nature + " - Quantité : " + listNatureParsed[i].qte_nature + "</div><br><br> "
                    }
                    htmlNature += "";
                    $('.textMessageInfo').html(htmlNature);
                    $('.alertMessageInfo').show();
                }
                else
                {
                    $('.textMessageInfo').html("Pas de nature pour l'instant");
                    $('.alertMessageInfo').show();
                }

            }
            catch (e)
            {
                alert("EROR PARSED"+ listNature);
            }
        });
    });

///TRIE DE GAIN
    $(document).on('click','#trieDateGain',function () {
        //alert($('#dateGain').val())
        var urlGainTrie = "/gains/trie";
        $.get(urlGainTrie,{
            dateGain : $('#dateGain').val(),
            matUser : $('#matriculeTriGain').val()
        }).done(function (dataGainTri) {
            console.log(dataGainTri)
          // var dataGainTriParsed = jQuery.parseJSON(dataGainTri);
            {
                if(dataGainTri == 0)
                {
                    $('.textMessageInfo').html("Pas de resultat");
                    $('.alertMessageInfo').show();
                }
                else
                {
                    $('#tableGain').html(dataGainTri);
                    $('#dendTriGain').css('visibility','visible');
                }
            }
        })
    });

///END TRIE DE GAIN
    $(document).on('click','#dendTriGain',function () {
        //alert($('#dateGain').val())
        var urlGainTrie = '/gains/endtrie';
        $.get(urlGainTrie).done(function (dataGainTri) {
            {

                    $('#tableGain').html(dataGainTri);
                    $('#dendTriGain').css('visibility','hidden');
                    $('#matriculeTriGain').val('')

            }
        })
    });

  ///SHOW ALL

    $(document).on('click','#showAll',function () {
        //alert($('#dateGain').val())
        var urlGainTrie = '/gains/showall';
        $.get(urlGainTrie,{
            matUser : $('#matriculeTriGain').val()
        }).done(function (dataGainTri) {
            {

                if(dataGainTri== 0)
                {
                    $('.textMessageInfo').html("Pas de resultat");
                    $('.alertMessageInfo').show();
                }else
                {
                    $('#tableGain').html(dataGainTri);
                    $('#dendTriGain').css('visibility','visible');

                }

            }
        })
    });

//////SAMANE MVC
$(document).on('click','#addJoueurtButon',function () {

    var urladdJoeur = "joueur/add";
    $.get(urladdJoeur).done(function (dataViewAddJo) {
        $("#addPopul").html(dataViewAddJo);
        $("#addPopul").show();
    });
})

    $(document).on('click','#hideAddJouer',function () {
        $("#addPopul").hide();
    });

////SAVE JOUEUR
    $(document).on('click',"#saveJoueur",function () {
        var urlsaveJoeur = "joueur/save";
        $.get(urladdJoeur,{
            nomj : $("#nomJA").val(),
            prenomj : $("#prenomJA").val(),
            disc : $("#discipline option:selected").val(),
            ent : $("#entraineur option:selected").val()
        }).done(function (dataViewAddJo) {

        });
    });

/////
    /////finn on load DOCUMENT
});

///
function confirmation() {
    return confirm("Voulez vous suprimer")
}

function goBack() {
    window.history.back();
}



