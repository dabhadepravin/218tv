<?php //pprint($_SERVER['REQUEST_URI']);

?>

<?php

$nodes = $GLOBALS['_nodes'];
$cm = $GLOBALS['class_map'];
$popular = $GLOBALS['popular'];
?>

<div class="w-main">
    <div class="main">
        <div class="first">
            <img class="topfive-img" src="<?php echo base_path() . path_to_theme() ?>/assets/topfive.jpg" alt="">
            <ol class="topfive">
                <?php foreach ($popular as $k => $p): ?>
                    <li>
                        <span><?php echo $k + 1 ?></span>
                        <a href="<?php echo render_href($p->nid) ?>"><?php echo $p->node_title ?></a>
                    </li>
                <?php endforeach ?>
            </ol>

            <div class="fb-page" data-href="https://www.facebook.com/218tv" data-width="300" data-height="500"
                 data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                 data-show-facepile="true" data-show-posts="true">
                <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="https://www.facebook.com/218tv"><a href="https://www.facebook.com/218tv">218TV</a>
                    </blockquote>
                </div>
            </div>
            <div class="twitter-block">
            <a class="twitter-timeline" href="https://twitter.com/218Tv" data-widget-id="682228831189626880">Tweets by @218Tv</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
            <div class="side-ad">
                <img src="<?php echo base_path() . path_to_theme() ?>/temp/side-ad.jpg" alt="">
            </div>

        </div>
        <div class="second">

            <div class="w-full one-cell">
                <article>
                    <a href="<?php echo render_href($nodes[0]->nid) ?>">
                        <img src="<?php echo render_image('x633', $nodes[0]->field_image['und'][0]['uri']) ?>" alt="">
                    </a>

                    <h3>
                        <a href="<?php echo render_href($nodes[0]->nid) ?>">
                            <?php echo $nodes[0]->title ?>
                        </a>
                    </h3>

                    <p><?php echo render_teaser($nodes[0]) ?></p>

                    <ul class="tags">
                        <?php echo get_tags($nodes[0])['html']; ?>
                    </ul>

                    <?php //if ($n->labels): ?>
                    <!--                        <span class="label"-->
                    <!--                              href="javascript:void(0)">-->
                    <?php //echo current($nq['featured'][2]->labels)['name'] ?><!--</span>-->
                    <?php //endif ?>
                </article>
            </div>
        </div>
        <div class="second pagediv">

            <?php for ($i = 1;
                       $i < 9;
                       $i++) { ?>
                <?php if ($i % 2 != 0) { ?>
                    <div class="w-cnt two-cells pageitem">
                <?php } ?>

                <article class="<?php echo $cm[$i % 2]; ?>">
                    <?php if ($nodes[$i]) { ?>

                        <?php if ($nodes[$i]->type != 'blog') { ?>
                            <a href="<?php echo render_href($nodes[$i]->nid) ?>">
                                <img src="<?php echo render_image('x307', $nodes[$i]->field_image['und'][0]['uri']) ?>"
                                     alt="">
                            </a>


                            <h3>
                                <a href="<?php echo render_href($nodes[$i]->nid) ?>">
                                    <?php echo $nodes[$i]->title ?>
                                </a>
                            </h3>


                            <ul class="tags">
                                <?php echo get_tags($nodes[$i])['html']; ?>
                            </ul>
                        <?php } else { ?>

                            <div class="opinion">
                                <a href="<?php echo render_href($nodes[$i]->nid) ?>">
                                    <h3><?php echo $nodes[$i]->title; ?></h3>
                                </a>

                                <p>
                                    <?php
                                    echo render_teaser($nodes[$i],90);
                                    ?>
                                    ...
                                </p>
                                <?php $a = get_author($nodes[$i]); ?>
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
                    <?php } ?>


                </article>
                <?php if ($i % 2 == 0) { ?>
                    </div>
                <?php } ?>
            <?php } ?>

        <div class="w-pager" style="display:none">
            <?php echo theme('pager', array()); ?>
        </div>
        </div>

    </div>
</div>

