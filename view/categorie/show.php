                <div class="col-xs-12 col-md-10">
                    <div class="main-content">
                        <h2>Formation Professionnelle</h2>
                        <input class="form-control search-input" id="search-input" type="text" placeholder="Filtrer...">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Nom</th>
                                        <?php 
                                            if ($ecoles[0]->domaine!=null) {
                                                echo "<th scope=\"col\">Domaine</th>";
                                            }
                                        ?>
                                        <th scope="col">Wilaya</th>
                                        <th scope="col">Commune</th>
                                        <th scope="col">Adresse</th>
                                        <th scope="col">Téléphones</th>
                                        <th scope="col">Fax</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach ($ecoles as $ecole) {
                                            echo "<tr>";
                                                echo "<th scope=\"row\">".$ecole->nom."</th>";
                                                if ($ecole->domaine!=null) {
                                                    echo "<td>".$ecole->domaine."</td>";
                                                } 
                                                echo "<td>".$ecole->wilaya."</td>";
                                                echo "<td>".$ecole->commune."</td>";
                                                echo "<td>".$ecole->adresse."</td>";
                                                echo "<td>".$ecole->telephone."</td>";
                                                echo "<td>".$ecole->fax."</td>";
                                                echo "<td>";
                                                    echo "<a class=\"btn btn-secondary\" href="."\"".BASE_URL."/commentaire/index/".$ecole->id."\""."\" role=\"button\">";
                                                        echo "<span>Commenter</span>";
                                                    echo "</a>";
                                                echo "</td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>