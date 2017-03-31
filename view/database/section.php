<section>
    <?php if (isset($title)) : ?>
    <h2><?= $title ?></h2>
    <?php endif; ?>

    <?php if (isset($content)) : ?>
    <p><?= $content ?></p>
    <?php endif; ?>

    <?php if (isset($sql)) : ?>
    <pre><?= $sql ?></pre>
    <?php endif; ?>
</section>
