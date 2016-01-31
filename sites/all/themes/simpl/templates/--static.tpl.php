
<?php if ($tabs): ?>
    <div class="node-tabs">
        <?php print render($tabs); ?>
    </div>
<?php endif; ?>

<div class="w-main">
    <div class="main">

        <div class="second">

            <h3 class="node-title"><?php echo $title ?></h3>

            <?php if ($n->field_image['und'][0]['uri']): ?>
                <img src="<?php echo render_image('x585', $n->field_image['und'][0]['uri']); ?>" alt=""/>
            <?php endif ?>

            <?php if (($n->field_image['und'][0]['alt'])) { ?>
                <div class="img-caption"><?php echo $n->field_image['und'][0]['alt'] ?></div>
            <?php } ?>

            <div class="node-body">
                <?php print $n->body['und'][0]['value']; ?>
            </div>

            <div class="node-form">
                <?php
                $block = module_invoke('webform', 'block_view', 'client-block-'.$n->nid);
                //pprint($block);
                print render($block['content']);
                ?>
            </div>

        </div>
    </div>
</div>
</div>