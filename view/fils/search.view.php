

    <div class="text-center h4 ">Resultats de Recherche

    </div>



<table class="table table-hover dataTable table-striped">
    <thead >

    <tr class="gras">
        <th>PRENOM </th>
        <th>NOM</th>
        <th>MATRICULE</th>
        <th>TELEPHONE</th>
        <th>EMAIL</th>
        <th>NIVEAU</th>
        <th>Fils</th>
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