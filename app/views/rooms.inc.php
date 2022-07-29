<div class="col-md-4">
    <div class="item">
        <div class="position-re o-hidden"> <img src="<?= ROOT.$data->img_room?>" alt="Logement"> </div> <span class="category"><a href="#">Réserver</a></span>
        <div class="con">
            <h6><a href="room-details.html"><?= $data->price_room ?>€ / Nuits</a></h6>
            <h5><a href="room-details.html"><?= $data->name_room ?></a> </h5>
            <div class="line"></div>
            <div class="row facilities">
                <div class="col col-md-7">
                    <ul>
                        <li><i class="flaticon-bed"></i></li>
                        <li><i class="flaticon-bath"></i></li>
                        <li><i class="flaticon-breakfast"></i></li>
                        <li><i class="flaticon-towel"></i></li>
                    </ul>
                </div>
                <div class="col col-md-5 text-right">
                    <div class="permalink"><a href="<?=ROOT?>room_details/<?=$data->slug?>">Détails <i class="ti-arrow-right"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>