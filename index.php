<?php 


?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> <?php if(wp_title('', false)) { echo '|'; } else { echo 'Demo site by saimul';} ?> <?php wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    
<?php wp_footer(); ?>
</body>
</html>