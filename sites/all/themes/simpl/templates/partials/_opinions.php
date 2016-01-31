<div class="opinions">
                <?php for ($i=0; $i<3; $i++){ $opn = $nq['opinions'][$i]?>
    <div class="opinion">
        <a href="<?php echo render_href($opn->nid) ?>">
            <h3><?php echo $opn->title; ?></h3>
        </a>

        <p>
            <?php
            echo render_teaser($opn,90);
            ?>
            ...
        </p>
        <?php $a = get_author($opn); ?>
        <div class="author">
            <img class="a-img" src="<?php echo $a->image; ?>" alt="">

            <div class="a-info">
                <div class="a-name">
                    <a href="<?php echo render_href($a->nid) ?>">
                        <?php echo $a->title ?>
                    </a>
                </div>
                <div class="a-title">
                    <?php echo $a->description ?>
                </div>
            </div>
        </div>

    </div>

<?php } ?>


</div>

<div class="mpu">
    <?php print render($page['banners']) ?>
</div>


<div class="opinions">
    <?php for ($i=3; $i<count($nq['opinions']); $i++){ $opn = $nq['opinions'][$i]?>
        <div class="opinion">
            <a href="<?php echo render_href($opn->nid) ?>">
                <h3><?php echo $opn->title; ?></h3>
            </a>

            <p>
                <?php
                echo render_teaser($opn,90);
                ?>
                ...
            </p>
            <?php $a = get_author($opn); ?>
            <div class="author">
                <img class="a-img" src="<?php echo $a->image; ?>" alt="">

                <div class="a-info">
                    <div class="a-name">
                        <a href="<?php echo render_href($a->nid) ?>">
                            <?php echo $a->title ?>
                        </a>
                    </div>
                    <div class="a-title">
                        <?php echo $a->description ?>
                    </div>
                </div>
            </div>

        </div>

    <?php } ?>


</div>