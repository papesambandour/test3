


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
                            <td>$ligne->nom</td>
                            <td>$ligne->matricule</td>
                            <td>$ligne->tel</td>
                            <td>$ligne->email</td>
                            <td><span class=\"label label-success\">Niveau $ligne->niveau</span>
                            </td>
                            <td>
                                 <div  style='display: inline-block'>
                                    <button class='btn btn-success showEdition' value='".$ligne->id."'><img class=\"logouser\" src=\"/public/img/edit.png\"></button>
                                </div>
                                <div  style='display: inline-block'>
                                    <input type='hidden' name='id' value='".$ligne->id."'>
                                    <button class='btn btn-danger deleteDist' value='".$ligne->id."' ><img class=\"logouser\" src=\"/public/img/delete.png\"></button>
                                </div>
                             </td></tr>
                          ";
    }
    ?>
</table>



