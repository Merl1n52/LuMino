<?php
/**
 * Header template for Lumino Design Studio (Dark Edition)
 *
 * @package Lumino
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
$studio_name = get_theme_mod('lumino_studio_name', 'LUMINO DESIGN STUDIO');
?>

<!-- Minimal Dark Top Bar -->
<header class="lumino-top-bar">
    <div class="lumino-container">
        <div class="lumino-top-bar__inner">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="lumino-logo-pill">
                <?php esc_html_e('Lumino', 'lumino'); ?>
            </a>

            <button id="lumino-top-toggle" class="lumino-top-nav-toggle" aria-label="<?php esc_attr_e('Toggle Menu', 'lumino'); ?>">
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>
