<?php
//pprint($readlist);
?>
<?php if ($tabs): ?>
    <div class="node-tabs">
        <?php print render($tabs); ?>
    </div>
<?php endif; ?>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55ffe86a9942511b"
        async="async"></script>


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

            <div class="fb-page" data-href="https://www.facebook.com/218tv" data-width="300" data-height="500"
                 data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                 data-show-facepile="true" data-show-posts="true">
                <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="https://www.facebook.com/218tv"><a href="https://www.facebook.com/218tv">218TV</a>
                    </blockquote>
                </div>
            </div>

            <?php if (count($related)) { ?>

                <div class="strike-through-header">
                    <h3 class="bold">ذات علاقة </h3>
                </div>
                <ol class="topfive">

                    <?php for ($i = 0; $i < count($related); $i++) {
                        $no = $related[$i]; ?>
                        <li><a href="<?php echo render_href($no->nid) ?>"><?php echo $no->title ?></a></li>

                    <?php } ?>
                </ol>

            <?php } ?>


        </div>

        <div class="second">

            <?php if ($author->title) { ?>

                <div class="author">
                    <img class="a-img" src="<?php echo $author->image ?>" alt="">

                    <div class="a-info">
                        <div class="a-name"><?php echo $author->title ?></div>
                        <div class="a-title">
                            <?php echo $author->description ?>
                            <span class="a-date">
                            <?php echo render_ar_date($n->created); ?>
                        </span>
                        </div>
                    </div>


                </div>
            <?php } else { ?>

                <div class="no-author">
                    <?php echo render_ar_date($n->created); ?>
                </div>

            <?php } ?>

            <ul class="tags">
                <?php echo $tags['html']; ?>
            </ul>

            <h3 class="node-title"><?php echo $title ?></h3>



             <div class="node-body">
                <?php //pprint($n); ?>
                <?php echo $n->body['und'][0]['value']; ?>
            </div>

            <div class="node-body">
                <?php echo $n->field_embed['und'][0]['value']; ?>
            </div>

        </div>
    </div>
</div>
</div>