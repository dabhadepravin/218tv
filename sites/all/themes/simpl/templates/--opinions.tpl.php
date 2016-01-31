<?php

$nodes = $GLOBALS['_nodes'];
$cm = $GLOBALS['class_map'];
$popular = $GLOBALS['popular'];
?>

<div class="w-main">
    <div class="main">
        <div class="first">
            <div class="strike-through-header">
                <h3 class="bold">الأكثر قراءة</h3>
            </div>
            <ol class="topfive">
                <?php foreach ($popular as $k => $p): ?>
                    <li>
                        <span><?php echo $k + 1 ?></span>
                        <a href="<?php echo render_href($p->nid) ?>"><?php echo $p->node_title ?></a>
                    </li>
                <?php endforeach ?>
            </ol>

            <?php include_once 'partials/_opinions.php' ?>

            <div class="side-ad">
                <img src="<?php echo base_path() . path_to_theme() ?>/temp/side-ad.jpg" alt="">
            </div>

        </div>
        <div class="second">

            <div class="w-full one-cell pagediv">
                <div class="pageitem">
                <?php foreach($nodes as $key=>$nod): ?>
                <article>
                    <?php $a = get_author($nodes[$key]); ?>
                    <div class="author">
                        <a href="<?php echo render_href($a->nid) ?>">
                        <img class="a-img" src="<?php echo $a->image; ?>" alt="">
                        </a>

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

                    <?php if($nodes[$key]->field_image['und'][$key]['uri']): ?>
                    <a href="<?php echo render_href($nodes[$key]->nid) ?>">
                        <img src="<?php echo render_image('x633', $nodes[$key]->field_image['und'][$key]['uri']) ?>" alt="">
                    </a>
                    <?php endif ?>

                    <h3>
                        <a href="<?php echo render_href($nodes[$key]->nid) ?>">
                            <?php echo $nodes[$key]->title ?>
                        </a>
                    </h3>

                    <div class="a-date">
                        <?php echo render_ar_date($nodes[$key]->created); ?>
                    </div>

                    <p><?php echo render_teaser($nodes[$key], 210) ?>...</p>

                    <ul class="tags">
                        <?php echo get_tags($nodes[$key])['html']; ?>
                    </ul>
                </article>
                <hr class="line" />
                <?php endforeach ?>
                </div>    
            </div>




        <div class="w-pager" style="display:none">
            <?php echo theme('pager', array()); ?>
        </div>
        </div>

    </div>
</div>

