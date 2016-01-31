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
                <h5 class="block-title">مقالات سابقة للكاتب</h5>
                <ol class="topfive">

                    <?php for ($i = 0; $i < count($readlist); $i++) {
                        $no = $readlist[$i]; ?>
                        <li><a href="<?php echo render_href($no->nid) ?>"><?php echo $no->title ?></a></li>

                    <?php } ?>
                </ol>

            <?php } ?>

            <div class="profile">
                <div class="author">
                    <div>
                        <img class="a-img" src="<?php echo render_image('x100', $n->field_image['und'][0]['uri']) ?>" alt="">
                        <div class="a-info">
                            <div class="a-name"><?php echo $n->title ?></div>
                            <div class="a-title">
                                <?php echo $n->field_description['und'][0]['safe_value'] ?>
                            </div>
                        </div>
                    </div>
                    <p><?php echo render_teaser($n, 400) ?></p>
                </div>
            </div>

            <?php include_once 'partials/_opinions.php' ?>

        </div>

        <div class="second">
            <?php foreach($opinions_author as $opinion): ?>
                <h4 class="date"><?php echo render_ar_date($opinion->created); ?></h4>
                <h3>
                    <a href="<?php echo render_href($opinion->nid) ?>"><?php echo $opinion->title; ?></a>
                </h3>
                <p><?php echo render_teaser($opinion, 300) ?> ...</p>
                <hr class="line" />
            <?php endforeach ?>

        </div>
    </div>
</div>
</div>