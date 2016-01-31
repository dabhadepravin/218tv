<?php render($page['content']); ?>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55ffe86a9942511b" async="async"></script>


<?php if ($tabs): ?>
    <div class="node-tabs">
        <?php print render($tabs); ?>
    </div>
<?php endif; ?>

<div class="w-main">
    <div class="main">
        <div class="first">

            <?php if (count($readlist)) { ?>

                <div class="strike-through-header">
                    <h3 class="bold">  مقالات سابقة</h3>
                </div>

                <ol class="topfive">

                    <?php for ($i = 0; $i < count($readlist); $i++) {
                        $no = $readlist[$i]; ?>
                        <li><a href="<?php echo render_href($no->nid) ?>"><?php echo $no->title ?></a></li>

                    <?php } ?>
                </ol>

            <?php } ?>



            <?php include_once 'partials/_opinions.php' ?>

        </div>

        <div class="second">

            <div class="author clearfix">
                <a href="<?php echo render_href($blog['author']->nid) ?>">
                    <img class="a-img" src="<?php echo $blog['author']->image ?>" alt="">
                </a>

                <div class="a-info">
                    <div class="a-name">
                        <a href="<?php echo render_href($blog['author']->nid) ?>">
                            <?php echo $blog['author']->title ?>
                        </a>
                    </div>
                    <div class="a-title">
                        <?php echo $blog['author']->description ?>
                        <span class="a-date">
<?php echo render_ar_date($n->created); ?>
                </span>
                    </div>
                </div>


            </div>


            <ul class="tags">
                <?php echo $tags['html']; ?>
            </ul>

            <h3 class="node-title"><?php echo $title ?></h3>

            <?php if ($n->field_image['und'][0]['uri']): ?>
                <img src="<?php echo render_image('x585', $n->field_image['und'][0]['uri']); ?>" alt=""/>
            <?php endif ?>

            <?php if (($n->field_image['und'][0]['alt'])) { ?>
                <div class="img-caption"><?php echo $n->field_image['und'][0]['alt'] ?></div>
            <?php } ?>

            <div class="node-body">
                <?php echo $n->body['und'][0]['value']; ?>
            </div>

        </div>
    </div>
</div>
</div>