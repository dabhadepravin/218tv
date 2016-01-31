<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55ffe86a9942511b"
        async="async"></script>


<?php if ($tabs): ?>
    <div class="node-tabs">
        <?php print render($tabs); ?>
    </div>
<?php endif; ?>

<div class="w-main">
    <div class="main">
        <div class="first">


            <div class="strike-through-header">
                <h3 class="bold">ذات علاقة</h3>
            </div>
            <div id="episode-related"></div>


            <?php if (count($popular)) { ?>
                <div class="strike-through-header">
                    <h3 class="bold">الأكثر قراءة  </h3>
                </div>
                <ol class="topfive">


                    <?php for ($i = 0; $i < count($popular); $i++) {
                        $no = $popular[$i]; ?>
                        <li><a href="<?php echo render_href($no->nid) ?>"><?php echo $no->node_title ?></a></li>

                    <?php } ?>
                </ol>

            <?php } ?>



        </div>

        <div class="second">

            <div id="episode-headline">
            </div>

            <div id="episode-page">
            </div>

            <div id="episode-body">
            </div>

        </div>
    </div>
</div>
</div>