<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cxllective cxllective cxllective</title>
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>

    <header>
        <div id="news">
            &asymp; &asymp; &asymp; &asymp; &asymp; &nbsp;
            <p>"ABYSS" drumkit is already out! Use code ABYSS15 to save 5€</p>
            &nbsp;&asymp; &asymp; &asymp; &asymp; &asymp;
        </div>
        <div class="">
            <ul class="">
                <?php if (is_user_logged_in()) : ?>
                    <li>
                        <a href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))) ?>" class="nav-link">My account</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(wp_logout_url(get_permalink(get_option('woocommerce_myaccount_page_id')))) ?>" class="nav-link">Logout</a>
                    </li>
                <?php else : ?>
                    <li>
                        <a href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))) ?>" class="nav-link">Login / Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="cart text-right">
            <a href="<?php echo wc_get_cart_url(); ?>"><span class="cart-icon"></span></a>
            <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
        </div>
        <div id="logo">cxllective</div>
        <nav>
            <a href="#">drumkits</a>
            <a href="#">sample kits</a>
            <a href="#">community</a>
        </nav>
    </header>