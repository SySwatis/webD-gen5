<!-- item start -->
     <div class="col-lg-4">
        <div class="item-4-card-family item-card-family mb-5">
            <!-- verso -->
            <div class="item-card verso text-white" style="background-color:#1b1d4e;">

                <h3 class="heading mb-3"><?php echo $item->title ?></h3>

                <div class="card-slick-carousel">
                <?php $i=0; $textParts = explode('|', $item->text); ?>
                <?php foreach($textParts as $textPart)  :?>
                    <div class="item">
                    <i class="fa fa-search"></i> <small>Définition<?php if($i>0) : ?>(suite)<?php endif ?></small>
                        <div class="p-3 text-left">
                            <p><?php echo $textPart ?></p>
                        </div>
                    </div>
                <?php $i++; endforeach ?>
                </div>
                <span class="btn btn-undo btn btn-xs btn-primary mt-4 mb-2"><i class="fa fa-undo"></i> Retourner</span>
            </div>

            <div class="item-card recto" style="background-color: <?php echo $item->bgColor; ?>;border:6px solid #1b1d4e">
                <h2 class="heading" style="color: #1b1d4e;font-size: 36px;font-weight: 600;"><?php echo $item->title ?></h2>
                <div class="image-card"><img src="/img/<?php echo $item->imageFile ?>"></div>
                <span class="btn btn-undo btn btn-xs btn-success mt-4 mb-2">Retourner <i class="fa fa-undo"></i></span>
                <h2 style="color: #1b1d4e;font-size: 36px;font-weight: 600;"><?php echo $item->subTitle ?></h2>
            </div>

        </div>
    </div>
    <!-- item end -->