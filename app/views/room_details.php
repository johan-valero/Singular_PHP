<?php $this->view("header", $data); ?>
<!-- Room Page Slider -->
<?php if($details): ?>
    <header class="header slider">
            <div class="owl-carousel owl-theme">
                <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
                <div class="text-center item bg-img" data-overlay-dark="3" data-background="<?= ROOT.$details->img_room?>"></div>
                <div class="text-center item bg-img" data-overlay-dark="3" data-background="<?= ROOT.$details->img2_room ?>"></div>
                <div class="text-center item bg-img" data-overlay-dark="3" data-background="<?= ROOT.$details->img3_room ?>"></div>
            </div>
            <!-- arrow down -->
            <div class="arrow bounce text-center">
                <a href="#" data-scroll-nav="1" class=""> <i class="ti-arrow-down"></i> </a>
            </div>
        </header>
        <!-- Room Content -->
        <section class="rooms-page section-padding" data-scroll-index="1">
            <div class="container">
                <!-- project content -->
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="section-subtitle">Singular</div>
                        <div class="section-title"><?= $details->name_room ?></div>
                    </div>
                    <div class="col-md-8">
                        <p class="mb-30"> <?= $details->description_room ?></p>
                        <div class="row">
                            <div class="col-md-12">
                                <h6>Instructions d'arrivée</h6>
                                <p>Les visiteurs recevront un email lors de la réservations contenant les instructions liées à leurs location. Pour plus de détails, veuillez contacter le service client avec vos informations de réservations.</p>
                            </div>
                            <div class="col-md-12">
                                <h6>Adresse</h6>
                                <p><?= $details->address_room.' '.$details->zip_room.' '.$details->city_room?></p>
                            </div>
                            <div class="col-md-12">
                                <div class="butn-dark mt-15 mb-30"> <a href="rooms2.html"><span>Réserver maintenant</span></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <h6>Informations pratiques</h6>
                        <ul class="list-unstyled page-list mb-30">
                            <li>
                                <div class="page-list-icon"><span><i class="fa-solid fa-igloo"></i></span> </div>
                                <div class="page-list-text">
                                    <p><a href="<?=ROOT?>rooms/category/<?= $details->name_category?>"><?= $details->name_category?></a></p>
                                </div>
                            </li>  
                            <li>
                                <div class="page-list-icon"> <span><i class="fa-solid fa-people-group"></i></span> </div>
                                <div class="page-list-text">
                                    <?php
                                        if($details->persons > 1 ){
                                            echo '<p>1 - '.$details->persons. ' personnes</p>';
                                        }else{
                                            echo '<p>1 personne</p>';
                                        }
                                    ?>
                                </div>
                            </li>
                            <li>
                                <div class="page-list-icon"><span><i class="fa-solid fa-bed"></i></span> </div>
                                <div class="page-list-text">
                                    <p><?= $details->name_bedding?></p>
                                </div>
                            </li> 
                            <li>
                                <div class="page-list-icon"><span><i class="fa-solid fa-dog"></i></span> </div>
                                <div class="page-list-text">
                                    <p>Animaux <?= $details->name_animal?></p>
                                </div>
                            </li>                  
                        </ul>
                        <h6>Options et services</h6>
                        <ul class="list-unstyled page-list mb-30">                   
                            <?php 
                                foreach($accom as $accomodation){
                                    echo '
                                        <li>
                                            <div class="page-list-icon"> <span><i class="'.$accomodation->icon_accomodation.'"></i></span></div>
                                            <div class="page-list-text">
                                                <p>'.$accomodation->name_accomodation.'</p>
                                            </div>
                                        </li>';
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Similiar Room -->
        <section class="pricing section-padding bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="section-subtitle"><span>Logements</span></div>
                        <div class="section-title"><span>Similaire</span></div>
                        <p class="color-2">Nous vous proposons une liste d'hébergements similaires à votre recherche.</p>
                    </div>
                    <div class="col-md-8">
                        <div class="owl-carousel owl-theme">
                            <?php foreach($similar_rooms as $room): ?>
                            <div class="pricing-card">
                                <img src="<?=ROOT.$room->img_room?>" alt="">
                                <div class="desc">
                                    <div class="name"><?=$room->name_room?></div>
                                    <div class="amount"><?=$room->price_room?>€<span>/ jours</span></div>
                                    <ul class="list-unstyled list">
                                        <li><i class="fa-solid fa-people-group"></i>1 - <?=$room->persons?> personnes</li>
                                        <li><i class="fa-solid fa-bed"></i><?=$room->name_bedding?></li>
                                        <li><i class="fa-solid fa-dog"></i>Animaux <?=$room->name_animal?></li>
                                    </ul>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
<?php endif; ?>
<?php $this->view("footer", $data); ?>