<?php if ($title): ?>
    <h1 class="title" id="page-title">
        <?php print $title; ?>
    </h1>
<?php endif; ?>

<?php if ($tabs): ?>
    <div class="w-tabs">
        <?php print render($tabs); ?>
    </div>
<?php endif; ?>

<?php print render($page['help']); ?>

<?php if ($action_links): ?>
    <ul class="action-links">
        <?php print render($action_links); ?>
    </ul>
<?php endif; ?>

<?php print render($page['content']); ?>


<?php include 'sidebar.php'; ?>
