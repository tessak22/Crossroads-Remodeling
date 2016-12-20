<?php
/**
 * sidebar
 *
 * @package Bedstone
 */
?>

<aside class="sidebar col-sm-3" role="complementary">

    <nav class="nav-categories hidden-print">
        <h4>Categories</h4>
        <ul>
            <?php wp_list_categories('title_li='); ?>
        </ul>
    </nav>

    <div class="contact-information" itemscope itemtype="http://schema.org/LocalBusiness">
        <h4 itemprop="name"><?php bloginfo('name'); ?></h4>
        <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress">Address</span>
            <br>
            <span itemprop="addressLocality">City</span>,
            <span itemprop="addressRegion">State</span> <span itemprop="postalCode">12345</span>
        </address>
        <h4>Phone: <span itemprop="telephone">123-456-7890</span></h4>
        Fax: <span itemprop="faxNumber">123-456-7890</span>
        <br>
        Email: <a itemprop="email" href="mailto:email@email.com">email@email.com</a>
        <div class="visible-print-block">
            <span itemprop="url">http://yoursite.com</span>
        </div>
    </div>

</aside>
