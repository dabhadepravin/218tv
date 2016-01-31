
<?php if ($search_results): ?>


    <?php print $search_results; ?>

  <?php print $pager; ?>
<?php else : ?>
  <h2><?php print t('لم يتم العثور على نتائج.');?></h2>

<?php endif; ?>
