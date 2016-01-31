<?php render($page['content']); ?>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55ffe86a9942511b"
        async="async"></script>-->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-569280f151cdc999" async="async"></script>

<script type="text/javascript">
var addthis_share = {
// ... other options
url_transforms : {
shorten: {
twitter: 'bitly',
google:'bitly',    
facebook: 'bitly'
}
}, 
shorteners : {
bitly : {} 
}
}
</script>

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
                    <h3 class="bold">قائمة القراءة </h3>
                </div>
            
                <ol class="topfive">


                    <?php for ($i = 0; $i < count($readlist); $i++) {
                        $no = $readlist[$i]; ?>
                        <li><a href="<?php echo render_href($no->nid) ?>"><?php echo $no->title ?></a></li>

                    <?php } ?>
                </ol>

            <?php } ?>


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
            <?php if (count($related)) { ?>

                <div class="strike-through-header">
                    <h3 class="bold">تصفح المزيد</h3>
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

                <!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55ffe86a9942511b"
                        async="async"></script>-->

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
            <?php if(isset($n->field_subtitle)) { ?>
            <span class="subtitle"><?php echo $n->field_subtitle['und'][0]['value']?></span>
            <h3 class="node-title" style="margin-top:0.5em !important;"><?php echo $title ?></h3>
            <?php } else { ?>
            <h3 class="node-title"><?php echo $title ?></h3>
            <?php } ?>
            <?php if ($n->field_image['und'][0]['uri']): ?>
                <img src="<?php echo render_image('x585', $n->field_image['und'][0]['uri']); ?>" alt=""/>
            <?php endif ?>

            <?php if (($n->field_image['und'][0]['alt'])) { ?>
                <div class="img-caption"><?php echo $n->field_image['und'][0]['alt'] ?></div>
            <?php } ?>

            <div class="node-body">
                <?php echo $r ?>
            </div>


            <?php if (count($more)) { ?>

            <div class="strike-through-header">
                <h3 class="bold">ذات علاقة</h3>
            </div>




            <div class="w-three-col">
                <div class="one">
                    <img src="<?php echo render_image('x307',$more[0]->field_image['und'][0]['uri']); ?>" alt="">

                    <a href="<?php echo render_href($more[0]->nid); ?>"><h4><?php echo $more[0]->title ?></h4></a>
                </div>
                <?php if ($more[1]) { ?>
                <div class="two">
                    <img src="<?php echo render_image('x307',$more[1]->field_image['und'][0]['uri']); ?>" alt="">


                    <a href="<?php echo render_href($more[1]->nid); ?>"><h4><?php echo $more[1]->title ?></h4></a>
                </div>
                <?php } ?>
                <?php if ($more[2]) { ?>
                <div class="three">
                    <img src="<?php echo render_image('x307',$more[2]->field_image['und'][0]['uri']); ?>" alt="">
                    <a href="<?php echo render_href($more[2]->nid); ?>"><h4><?php echo $more[2]->title ?></h4></a>
                </div>
                <?php } ?>
            </div>

            <?php } ?>

        </div>
    </div>
</div>
</div>