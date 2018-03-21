


                <!--   TABLEAU PARTENAIRE -->
                <table class="table  table-responsive  table-inverse table-striped">
                    <tr class="gras">
                        <th>PRENOM </th>
                        <th>NOM</th>
                        <th>MATRICULE</th>
                        <th>TELEPHONE</th>
                        <th>EMAIL</th>
                        <th>DESIGNATION</th>
                        <th>MONTANT TOTAL</th>
                        <th>NB TRANSACTION</th>
                        <th>NB EFANTS</th>
                        <th>NIVEAU</th>
                    </tr>
                    <?php
                    while ($ligne = $liststatis->fetch())
                    {
                        $nbenfanfant = \doa\DOA::getNumChild($ligne->idUser)->nbChild;
                        echo "<tr>
                            <td>$ligne->prenom</td>
                            <td>$ligne->nom</td>
                            <td>$ligne->matricule</td>
                            <td>$ligne->tel</td>
                            <td>$ligne->email</td>
                            <td>$ligne->libele</td>
                            <td>$ligne->montantTotal</td>
                            <td>$ligne->nombreTrans</td>
                            <td>$nbenfanfant</td>
                            <td><span class=\"label label-success\">Niveau $ligne->niveau</span></td>
                            
                          ";
                    }
                    ?>
                </table>


<?= \src\Helper::links()?>




