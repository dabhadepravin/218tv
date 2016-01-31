<?php //pprint($node->field_image[und]) ?>

<div id="owl-gallery" class="owl-carousel">
    <?php foreach($node->field_image[und] as $g): ?>
        <div>
            <img src="<?php echo render_image('x585', $g['uri']) ?>" />
        </div>
    <?php endforeach ?>
</div>
