<!doctype html>
<html lang="es">
    <head profile="<?php print $grddl_profile; ?>">
        <meta charset="UTF-8">
        <?php print $head; ?>
        <title><?php print $head_title; ?></title>
        <?php print $styles; ?>
        <?php print $scripts; ?>
    </head>
    <body class="<?php print $classes; ?>" <?php print $attributes;?>>
            <div id="skip-link">
            <a href="#main-content"><?php print t('Skip to main content'); ?></a>
            </div>
            <?php print $page_top; ?>
            <?php print $page; ?>
            <?php print $page_bottom; ?>
    </body>
</html>