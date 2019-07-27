            <div class="col-xs-12 col-md-10">
                    <div class="main-content">
                        <div class="container">
                            <div class="row">
                                <?php 
                                    foreach ($categorieEcole as $categorie) {
                                        echo "<div class=\"col-xs-12 col-md-6 col-lg-4\">";
                                            echo "<div class=\"card\">";
                                                echo "<img src=\"assets/categoriesImages/".$categorie->designation.".jpg\" class=\"card-img-top\" alt=\"test\">";
                                                echo "<div class=\"card-body\">";
                                                echo "<a href=\"".BASE_URL."/categorie/show/".$categorie->id."\" class=\"btn btn-outline-primary btn-block\">".$categorie->designation."</a>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>