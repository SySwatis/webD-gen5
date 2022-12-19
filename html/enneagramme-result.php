<?php

    /* Datas */

    $xmlDataCardsEnneagramme = simplexml_load_file("inc/cartes/dataCardsEnneagramme.xml") or die("Error: Cannot create object");
    // $arrDataCardsEnneagramme = json_decode(json_encode($xmlDataCardsEnneagramme),TRUE); // Convert the object

    include_once 'inc/cartes/dataTextEnneagramme.php';

   
    /* Request */
    $params = isset($_GET['params']) ? $_GET['params'] : "no params" ;

    $param1 = $params[0];
    $param2 = $params[1];
    $param3 = $params[2];
    $param4 = $params[3];
    
?>

<div class="row align-items-center" data-background='{"name":"brown","effect":"duotone"}'>
    
   <div class="col-lg-5 animated fadeInRight">
        <div class="ibox border-top-orange">
            <div class="text-center bg-nav text-white ibox-content">
                <span class="fa fa-line-chart fa-3x p-3"></span>
                <h1>Jeu <span>Énneagramme</span></h1>
            </div>
        </div>
    </div>

    <div class="col-3"></div>

    <!-- <div class="col-lg-4 text-left ">
        <div class="ibox text-center">
            <div class="ibox-content">
                <div class="heading">Enneagramme</div>
                <button data-modal="choiceModal" class="btn btn-success pb-3 mt-3">Plus d'explications</button>
            </div>
        </div>
    </div> -->

</div>
<?php  ?>
<div id="cardFamily" class="row align-items-middle text-center mt-lg-4 enneagramme-step-2">

    <!-- Item description -->
    <div class="col col-lg-6">
        <div class="ibox ibox-background-orange text-white ibox item-card-family-ibox">
            <div class="ibox-content text-center">
                <i class="fa fa-2x fa-star float-right"></i>
                <h2>Mon <span>Énéatype</span></h2>
                <p class="small">est le chiffre</p> 
                <div class="item-enneagramme-type">
                    <h2 class="main-title"><?php echo $dataDescEnneagramme[$param1-1][0]; ?></h2>
                    <p class="text-left"><?php echo $dataDescEnneagramme[$param1-1][1]; ?></p>
                </div>  
            </div>
        </div>
    </div>

    <!-- item1 start -->
    <?php
    $i=$param1-1;
    $item = $xmlDataCardsEnneagramme->row[$i];?>
    <div class="col-12 col-lg-6">
        <div class="item-card-family-1 item-card-family mb-5 cards-enneagramme" data-display="[<?php echo $item->cat ?>]">
        <span class="badge badge-primary"><span class="fa fa-check"></span></span>
            <!-- verso -->
            <div class="item-card verso text-white" style="background-color:#1b1d4e;">
                <h3 class="heading pb-3"><?php echo $item->title; ?></h3>
                <div class="card-slick-carousel">
                    <div class="item">
                        <i class="fa fa-search"></i> <small>Définition</small>
                        <div class="p-3 text-left"><p><?php echo $item->textpart1; ?> (...)</p></div>
                    </div>
                    <div class="item">
                        <i class="fa fa-search"></i> <small>Définition (suite)</small>
                        <div class="p-3 text-left"><p><?php echo $item->textpart2; ?></p></div>
                    </div>
                </div>
                <span class="btn btn-undo btn btn-xs btn-primary mt-4"><i class="fa fa-undo"></i> Retourner</span>
            </div>
            <div class="item-card recto">
                <!-- <h2 class="heading" style="color: #1b1d4e;font-size: 36px;font-weight: 600;"><?php echo $item->title; ?></h2> -->
                <div class="image-card"><img src="/img/enneagramme/x500/recto-type-0<?php echo $param1; ?>.webp"></div>
                <span class="btn btn-undo btn btn-xs btn-success mt-4">Retourner <i class="fa fa-undo"></i></span>
                <!-- <h2 style="color: #1b1d4e;font-size: 36px;font-weight: 600;"><?php echo $item->subtitle; ?></h2> -->
            </div>

        </div>
    </div>
    <!-- item1 end -->

    <div class="col col-lg-6">
        <div class="ibox ibox-background-orange text-white item-card-family-ibox">
            <div class="ibox-content text-center">
                <i class="fa fa-2x fa-paper-plane float-right"></i>
                <h2>Mes <span>Ailes</span></h2>
            </div>
        </div>
    </div>

    <!-- item2 start -->
    <?php
    $i=$param2-1;
    $item = $xmlDataCardsEnneagramme->row[$i];?>
    <div class="col-12 col-lg-6">
        <div class="item-card-family-1 item-card-family mb-5 cards-enneagramme lock" data-display="[<?php echo $item->cat ?>]">
        <span class="badge badge-primary"><span class="fa fa-check"></span></span>
            <!-- verso -->
            <div class="item-card verso text-white" style="background-color:#1b1d4e;">
                <h3 class="heading pb-3"><?php echo $item->title; ?></h3>
                <div class="card-slick-carousel">
                    <div class="item">
                        <i class="fa fa-search"></i> <small>Définition</small>
                        <div class="p-3 text-left"><p><?php echo $item->textpart1; ?> (...)</p></div>
                    </div>
                    <div class="item">
                        <i class="fa fa-search"></i> <small>Définition (suite)</small>
                        <div class="p-3 text-left"><p><?php echo $item->textpart2; ?></p></div>
                    </div>
                </div>
                <span class="btn btn-undo btn btn-xs btn-primary mt-4 mb-2"><i class="fa fa-undo"></i> Retourner</span>
            </div>
            <div class="item-card recto">
                <!-- <h2 class="heading" style="color: #1b1d4e;font-size: 36px;font-weight: 600;"><?php echo $item->title; ?></h2> -->
                <div class="image-card"><img src="/img/enneagramme/x500/recto-type-0<?php echo $param2; ?>.webp"></div>
                <span class="btn btn-undo btn btn-xs btn-success mt-4 mb-2">Retourner <i class="fa fa-undo"></i></span>
                <!-- <h2 style="color: #1b1d4e;font-size: 36px;font-weight: 600;"><?php echo $item->subtitle; ?></h2> -->
            </div>

        </div>
    </div>
    <!-- item2 end -->

    <!-- item3 start -->
    <?php
    $i=$param3-1;
    $item = $xmlDataCardsEnneagramme->row[$i];?>
    <div class="col-12 col-lg-6">
        <div class="item-card-family-1 item-card-family mb-5 cards-enneagramme lock" data-display="[<?php echo $item->cat ?>]">
        <span class="badge badge-primary"><span class="fa fa-check"></span></span>
            <!-- verso -->
            <div class="item-card verso text-white" style="background-color:#1b1d4e;">
                <h3 class="heading pb-3"><?php echo $item->title; ?></h3>
                <div class="card-slick-carousel">
                    <div class="item">
                        <i class="fa fa-search"></i> <small>Définition</small>
                        <div class="p-3 text-left"><p><?php echo $item->textpart1; ?> (...)</p></div>
                    </div>
                    <div class="item">
                        <i class="fa fa-search"></i> <small>Définition (suite)</small>
                        <div class="p-3 text-left"><p><?php echo $item->textpart2; ?></p></div>
                    </div>
                </div>
                <span class="btn btn-undo btn btn-xs btn-primary mt-4 mb-2"><i class="fa fa-undo"></i> Retourner</span>
            </div>
            <div class="item-card recto">
                <!-- <h2 class="heading" style="color: #1b1d4e;font-size: 36px;font-weight: 600;"><?php echo $item->title; ?></h2> -->
                <div class="image-card"><img src="/img/enneagramme/x500/recto-type-0<?php echo $param3; ?>.webp"></div>
                <span class="btn btn-undo btn btn-xs btn-success mt-4 mb-2">Retourner <i class="fa fa-undo"></i></span>
                <!-- <h2 style="color: #1b1d4e;font-size: 36px;font-weight: 600;"><?php echo $item->subtitle; ?></h2> -->
            </div>

        </div>
    </div>
    <!-- item3 end -->
  
    <div class="col-12 col-lg-6"></div>
    <div class="col col-lg-6">
        <div class="ibox ibox-background-orange text-white item-card-family-ibox">
            <div class="ibox-content text-center">
                <i class="fa fa-2x fa-road float-right"></i>
                <h2>Mon <span>Evolution<span></h2>
            </div>
        </div>
    </div>

    <!-- item4 start -->
    <?php
    $i=$param4-1;
    $item = $xmlDataCardsEnneagramme->row[$i];?>
    <div class="col-12 col-lg-6">
        <div class="item-card-family-1 item-card-family mb-5 cards-enneagramme lock" data-display="[<?php echo $item->cat ?>]">
        <span class="badge badge-primary"><span class="fa fa-check"></span></span>
            <!-- verso -->
            <div class="item-card verso text-white" style="background-color:#1b1d4e;">
                <h3 class="heading pb-3"><?php echo $item->title; ?></h3>
                <div class="card-slick-carousel">
                    <div class="item">
                        <i class="fa fa-search"></i> <small>Définition</small>
                        <div class="p-3 text-left"><p><?php echo $item->textpart1; ?> (...)</p></div>
                    </div>
                    <div class="item">
                        <i class="fa fa-search"></i> <small>Définition (suite)</small>
                        <div class="p-3 text-left"><p><?php echo $item->textpart2; ?></p></div>
                    </div>
                </div>
                <span class="btn btn-undo btn btn-xs btn-primary mt-4 mb-2"><i class="fa fa-undo"></i> Retourner</span>
            </div>
            <div class="item-card recto">
                <!-- <h2 class="heading" style="color: #1b1d4e;font-size: 36px;font-weight: 600;"><?php echo $item->title; ?></h2> -->
                <div class="image-card"><img src="/img/enneagramme/x500/recto-type-0<?php echo $param4; ?>.webp"></div>
                <span class="btn btn-undo btn btn-xs btn-success mt-4 mb-2">Retourner <i class="fa fa-undo"></i></span>
                <!-- <h2 style="color: #1b1d4e;font-size: 36px;font-weight: 600;"><?php echo $item->subtitle; ?></h2> -->
            </div>

        </div>
    </div>
    <!-- item4 end -->

</div>
