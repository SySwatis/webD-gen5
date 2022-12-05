
<?php 
include_once('inc/cartes/items.php');
?>

<div class="row align-items-center" data-background='{"name":"brown","effect":"duotone"}'>
    <div class="col-lg-5 animated fadeInRight">

        <div class="ibox border-top-orange">
            <div class="text-center bg-nav text-white ibox-content">
                <span class="fa fa-line-chart fa-3x p-3"></span>
                <h1>
                    Démo <span>Cartes</span>
                </h1>

            </div>
        </div>

    </div>
    <div class="col-3"></div>

    <div class="col-lg-4 text-left ">
        <div class="ibox text-center">
            <div class="ibox-content">
                <div class="heading">Jeu de cartes</div>
                <button data-modal="choiceModal" class="btn btn-success mb-3 mt-3">Choisir une thématique</button>
            </div>
        </div>


    </div>

</div>

<div id="cardFamily" class="row align-items-middle text-center mt-lg-4">

<?php foreach($xmlDataCardsCodesEntreprise as $item)  :?>  

    <!-- item start -->
    
    <div class="col-lg-4">
        <div class="item-4-card-family item-card-family mb-5">

            <div class="item-card verso text-white" style="background-color:#4f6d6b ;">

                <h3 class="heading mb-3"><?php echo $item->title ?></h3>
                <div class="card-slick-carousel">
                    <div class="item">
                        <i class="fa fa-search"></i> <small>Définition</small>
                        <div class="p-3 text-left">
                            <p><?php echo $item->subtitle ?></p>
                            <p><?php echo $item->textpart1 ?></p>
                        </div>
                    </div>
                    <div class="item">
                        <i class="fa fa-search"></i> <small>Définition (suite)</small>
                        <div class="p-3 text-left">
                            <p><?php echo $item->textpart2 ?></p>
                        </div>
                    </div>

                </div>
                <span class="btn btn-undo btn btn-xs btn-primary mt-4 mb-2"><i class="fa fa-undo"></i> Retourner</span>
            </div>

            <div class="item-card recto" style="background-color:<?php echo $item->color ?>;border:6px solid #FFF">
                <h2 class="heading" style="color:#444 ;font-size: 36px;"><?php echo $item->title ?></h2>
                <div class="image-card"><img src="/img/codes-entreprise/<?php echo $item->imagefile ?>"></div>
                <span class="btn btn-undo btn btn-xs btn-success mt-4 mb-2">Retourner <i class="fa fa-undo"></i></span>

            </div>

        </div>
    </div>
    <!-- item end -->

<?php endforeach ?>
<?php $i=1; foreach($xmlDataCardsEnneagramme as $item)  :?>
    <!-- item start -->
    <div class="col-lg-4">
        <div class="item-4-card-family item-card-family mb-5">
            <!-- verso -->
            <div class="item-card verso text-white" style="background-color:#1b1d4e ;">

                <h3 class="heading mb-3"><?php echo $item->title ?></h3>

                <div class="card-slick-carousel">

                    <div class="item">
                        <i class="fa fa-search"></i> <small>Définition</small>
                        <div class="p-3 text-left"><p><?php echo $item->textpart1 ?> (...)</p></div>
                    </div>
                    <div class="item">
                        <i class="fa fa-search"></i> <small>Définition (suite)</small>
                        <div class="p-3 text-left"><p><?php echo $item->textpart2?> (...)</p></div>
                    </div>

                </div>
                <span class="btn btn-undo btn btn-xs btn-primary mt-4 mb-2"><i class="fa fa-undo"></i> Retourner</span>
            </div>

            <div class="item-card recto" style="background-color: #82ca9c;border:6px solid #1b1d4e">
                <h2 class="heading" style="color: #1b1d4e;font-size: 36px;font-weight: 600;"><?php echo $item->title ?></h2>
                <div class="image-card"><img src="/img/enneagramme/x500/recto-type-0<?php echo $i ?>.webp"></div>
                <span class="btn btn-undo btn btn-xs btn-success mt-4 mb-2">Retourner <i class="fa fa-undo"></i></span>
                <h2 style="color: #1b1d4e;font-size: 36px;font-weight: 600;"><?php echo $item->subtitle ?></h2>
            </div>

        </div>
    </div>
    <!-- item end -->
    <?php $i++; endforeach; ?>



<?php foreach($xmlDataCardsSoftSkills as $item)  :?>

     <!-- item start -->
     <div class="col-lg-4">

        <div class="item-1-card-family item-card-family mb-5 <?php echo $item->cat ?> softskills">

            <div class="item-card verso text-white" style="background-color:<?php echo $item->color ?>;">

                <h3 class="heading mb-3"><?php echo $item->title ?></h3>

                <div class="card-slick-carousel">

                    <div class="item">
                        <i class="fa fa-search"></i> <small>Définition</small>
                        <div class="p-3 text-left">
                            <?php echo $item->textpart1; ?>
                        </div>
                    </div>
                    <?php if( empty($item->textpart2)==false ) :?>
                    <div class="item">
                        <i class="fa fa-question-circle-o"></i> <small>Comment développer</small>
                        <div class="p-3 text-left">
                            <?php echo str_replace("•","<br>•",$item->textpart2); ?>
                        </div>
                    </div>
                    <?php endif ?>
                </div>
                <span class="btn btn-undo btn btn-xs btn-primary mt-4 mb-2"><i class="fa fa-undo"></i> Retourner</span>
            </div>

            <div class="item-card recto bg-white">
                <h2 class="heading" style="color:<?php echo $item->color ?>;font-size: 36px;"><?php echo $item->title ?></h2>
                <div class="image-card"><img src="/img/softskills/x500/<?php echo $item->imagefile ?>"></div>
                <span class="btn btn-undo btn btn-xs btn-success mt-4 mb-2">Retourner <i class="fa fa-undo"></i></span>

            </div>

        </div>
    </div>
    <!-- item end -->

   <?php endforeach ?>

</div>


</div>

<div id="choiceModal" class="modal">
    <div class="ibox ibox-background-brown">
        <div class="ibox-content">
            <div class="p-3">
                <button class="btn btn-block btn-outline-success text-uppercase mb-3">
                    Professionnelles</button>
                <button class=" btn btn-block btn-outline-danger text-uppercase mb-3">Personnelles</button>
                <button class=" btn btn-block btn-outline-warning text-uppercase">Interpersonnelles</button>
            </div>
        </div>
    </div>
</div>