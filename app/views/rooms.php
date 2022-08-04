<?php $this->view('header', $data)?>

<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="<?=ROOT?>uploads/h1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left caption mt-90">
                <h2 style="letter-spacing:10px;text-transform:uppercase;text-align:center;">Nos hébergements</h2>
                <h5 style="text-align:center;"><span style="color:#cd701c;font-weight:600;">Insolite</span></h5>
            </div>
        </div>
    </div>
</div>
<!-- News 2 -->
<section class="news2 section-padding">
        <div class="container" style="max-width:1800px;">
            <div class="row rooms1">
                <div class="col-md-3"><?php $this->view('sidebar.inc', $data) ?></div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12" style="display:flex;flex-wrap:inherit;">
                            <?php if(isset($_GET['find'])):?>
                                <div class="col-md-4">
                                    <h5><b><?= $search_rooms ? count($search_rooms) : 0 ;?></b> résultats pour " <b><?= ucwords($_GET['find'])?></b> " :</h5>  
                                </div>
                            <?php else:?>
                                <?php if(isset($rooms) && is_array($rooms)):?>
                                    <div class="col-md-4">
                                    <h3><b><i class="<?= $rooms[0]->icon_category?>"></i></b> <?= $rooms[0]->name_category?></h3>  
                                    </div>
                                <?php endif;?>
                            <?php endif;?>
                        </div>
                        <div class="col-md-12" style="display:flex;flex-wrap:inherit;">
                            <?php if(isset($rooms) && is_array($rooms)):?>
                                <?php foreach($rooms as $room):?>
                                    <div class="col-md-4">
                                        <?php $this->view('rooms.inc',$room)?>
                                    </div>
                                <?php endforeach; ?>
                            <?php elseif(isset($all_rooms) && is_array($all_rooms)): ?>
                                <?php foreach($all_rooms as $all_room):?>
                                    <div class="col-md-4">
                                        <?php $this->view('rooms.inc',$all_room)?>
                                    </div>
                                <?php endforeach; ?>
                            <?php elseif(isset($search_rooms) && is_array($search_rooms)): ?>
                                <?php foreach($search_rooms as $search_room):?>
                                    <div class="col-md-4">
                                        <?php $this->view('rooms.inc',$search_room)?>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="col-md-4">
                                    Pas de logements disponibles dans cette catégorie.
                                </div>
                            <?php endif; ?>
                        </div>
                                
                        <div class="col-md-12">
                            <!-- Pagination -->
                            <ul class="news-pagination-wrap align-center mb-30 mt-30">
                                <li><a href="blog2.html#"><i class="ti-angle-left"></i></a></li>
                                <li><a href="blog2.html#">1</a></li>
                                <li><a href="blog2.html#" class="active">2</a></li>
                                <li><a href="blog2.html#">3</a></li>
                                <li><a href="blog2.html#"><i class="ti-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $this->view('footer', $data)?>