
<?php
include_once 'inc/cartes/items.php';
include_once 'inc/cartes/dataTextEnneagramme.php';
?>

<div class="row align-items-center" data-background='{"name":"brown","effect":"duotone"}'>
    
   <div class="col-lg-5 animated fadeInRight">
        <div class="ibox border-top-orange">
            <div class="text-center bg-nav text-white ibox-content">
                <span class="fa fa-line-chart fa-3x p-3"></span>
                <h1>Jeu <span>Enneagramme</span></h1>
            </div>
        </div>
    </div>

    <div class="col-3"></div>

    <!-- <div class="col-lg-4 text-left ">
        <div class="ibox text-center">
            <div class="ibox-content">
                <div class="heading">Enneagramme</div>
                <button data-modal="choiceModal" class="btn btn-success mb-3 mt-3">Plus d'explications</button>
            </div>
        </div>
    </div> -->

</div>

<div id="enneagramme-step-1" class="row align-items-middle text-center mt-lg-4 enneagramme-step-1">

    <div class="col-lg-22 col-12">
        <div class="ibox">
            
            <div class="ibox-title ibox-title-test text-left ibox-title-orange">
                <h3 id="title-test_1" class="title-test"><span>1</span><span>Choisir 1 texte</span></h3>
            </div>

            <div class="ibox-content">
                <div class="col">
                    <ul class="d-inline-block m-0 p-2 btn-pagination-enneagramme"> 
                        <?php
                        $i = 0;
                        foreach ($dataTextEnneagramme as $itemEnnagramme): ?>
                        <li class="d-inline-block">
                            <button data-slick-index="<?php echo $i; ?>" class="btn btn btn-slick-goto btn-item-<?php echo $i; ?>"><?php echo $itemEnnagramme[0]; ?></button>
                        </li>
                        <?php $i++;endforeach;
                        ?>
                    </ul>
                    <!-- <button class="btn btn-primary">M'aider à choisir</button> -->
                    <div class="slick-enneagramme slick-box-test">
                        <?php $i = 0; foreach ($dataTextEnneagramme as $itemEnnagramme): ?>
                        <div class="row align-items-center step-1">
                            <div class="col-lg-12 col-12 text-left text-lg-left">
                                <h2 class="main-title mb-5"><?php echo $itemEnnagramme[0]; ?></h2>
                                <p><?php echo $itemEnnagramme[1]; ?></p>
                            </div>
                        </div>
                        <?php $i++;endforeach;?>
                    </div>
                </div>
                <div class="btn-set-enneagramme col-12 col-lg-12 m-t-lg">
                    <button type="button" class="btn btn-success btn-valid btn-lg mb-3 mt-3 mr-3 hidden" data-toggle="modal" data-target="#choiceEnneaModal">Choisir</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg mb-3 mt-3 btn-prev hidden" onclick="">Précédent</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg mb-3 mt-3 btn-next" onclick="">Suivant</button>
                </div>
            </div>
            
        </div>    

    </div>
</div>

<div id="cardFamily" class="row align-items-middle text-center mt-lg-4 enneagramme-step-2">
<?php
$i = 1;
foreach ($xmlDataCardsEnneagramme as $item): ?>
    <!-- item start -->
    <div class="col-lg-4 hidden">
        <div class="item-card-family-<?php echo $i; ?> item-card-family mb-5 cards-enneagramme" data-display="[<?php echo $item->cat ?>]">
        <span class="badge badge-primary"><span class="fa fa-check"></span></span>
            <!-- verso -->
            <div class="item-card verso text-white" style="background-color:#1b1d4e ;">

                <h3 class="heading mb-3"><?php echo $item->title; ?></h3>

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
                <div class="image-card"><img src="/img/enneagramme/x500/recto-type-0<?php echo $i; ?>.webp"></div>
                <span class="btn btn-undo btn btn-xs btn-success mt-4 mb-2">Retourner <i class="fa fa-undo"></i></span>
                <!-- <h2 style="color: #1b1d4e;font-size: 36px;font-weight: 600;"><?php echo $item->subtitle; ?></h2> -->
            </div>

        </div>
    </div>
    <!-- item end -->
    <?php $i++;endforeach;
?>
</div>


<!-- Modal -->
<div class="modal fade" id="choiceEnneaModal" tabindex="-1" role="dialog" aria-labelledby="choiceEnneaModal_Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="dialog">
        <div class="modal-body">
            <div class="ibox">
                <div class="ibox-title ibox-title-orange">
                    <h2>Voici votre <span>Enneatype</span></h2>
                </div>
                <div class="ibox-content justify-content-center">
                    <small class="text-center d-inline-block">Votre chiffre correspondant est le</small>
                    <?php 
                    // Start to 1 (slick 1)
                    $i=1; foreach($dataDescEnneagramme as $itemEnnagramme ) : ?>
                        <div id="item-enneagramme-type-<?php echo $i ?>" class="item-enneagramme-type-<?php echo $i ?> item-enneagramme-type hidden">
                            <h2 class="main-title text-center"><?php echo $itemEnnagramme[0]; ?></h2>
                            <p><?php echo $itemEnnagramme[1]; ?></p>
                        </div>
                    <?php $i++; endforeach ?>
                    <div class="text-center mr-5 ml-5">
                        <h2>Je valide ce choix</h2>
                        <button type="button" class="btn btn-success btn-block mb-3 mt-3 btn-valid">Oui</button>
                        <button type="button" class="btn btn-outline-secondary btn-block mb-3 mt-3 btn-restart">Recommencer</button>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
