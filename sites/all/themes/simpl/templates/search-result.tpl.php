<?php
$n = $result['node'];
?>


<div class="search-result">
    <?php if ($n->type == 'article') { ?>
        <div class="search-left">
            <h3 class="search-title">
                <a href="<?php print $url; ?>"><?php print $title; ?></a>
            </h3>

            <div class="search-date"><?php echo render_ar_date($n->created) ?></div>


            <p class="search-description">
                <?php echo render_teaser($n) ?> &hellip;
            </p>


        </div>

        <div class="search-right">
            <img src="<?php echo render_image('x307', $n->field_image['und'][0]['uri']) ?>" alt="">
        </div>


    <?php } elseif ($n->type == 'blog') { ?>

        <div class="opinion">
            <a href="<?php echo render_href($n->nid) ?>">
                <h3 class="search-title"><?php echo $n->title; ?></h3>

            </a>

            <div class="search-date"><?php echo render_ar_date($n->created) ?></div>

            <p>
                <?php
                echo render_teaser($n, 90);
                ?>
                ...
            </p>
            <?php $a = get_author($n); ?>
            <div class="author">
                <img class="a-img" src="<?php echo $a->image; ?>" alt="">

                <div class="a-info">
                    <div class="a-name">
                        <?php echo $a->title ?>
                    </div>
                    <div class="a-title">
                        <?php echo $a->description ?>
                    </div>
                </div>
            </div>

        </div>


    <?php } ?>


</div>
<div class="search-sep"></div>