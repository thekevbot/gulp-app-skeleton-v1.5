<?php require_once('inc/header.php'); ?>
<?php require_once('inc/sidebar.php'); ?>

<section class="lsg__content">
    <h1>Icons</h1>
    <h3>Creating an Icon</h3>
    <p>Icons are created using an <code class="il">&lt;i&gt;</code> element with the class <code class="il">.icon</code> and an additional class that consists of the icon name &amp; prefix.</p>
    <div class="well no--pad">
        <div class="well__row">
            <div class="well__section well--code no--pad">
<pre><code>&lt;i class=&quot;icon icon--name&quot;&gt;&lt;/i&gt;</code></pre>
            </div>
        </div>
    </div>
    <h3>Sizes</h3>
    <p>By default, icons are 16x16px inside of a 24x24px bounding box. Adding the class <code class="il">icon--l</code> generates a large version (32x32px icon inside of a 40x40px bounding box.)</p>
    <div class="well no--pad">
        <div class="well__row">
            <div class="well__section center center--h">
                <svg class="icon icon--star"><use xlink:href="#icon-star"></use></svg>
            </div>
            <div class="well__section center center--h">
                <svg class="icon icon--star icon--l"></svg>
            </div>
        </div>
    </div>
    <h3>Icon Glossary</h3>
    <p><strong>Important:</strong> icon names must always be prefixed with <code class="il">icon--</code>.</p>
    <div class="well no--pad">
        <div class="well__row">
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--cart-s"><use xlink:href="#icon-cart-s"></use></svg>
                <p><code class="il">cart-s</code></p>
            </div>
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--cart-m"><use xlink:href="#icon-cart-m"></use></svg>
                <p><code class="il">cart-m</code></p>
            </div>
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--list-s"><use xlink:href="#icon-list-s"></svg>
                <p><code class="il">list-s</code></p>
            </div>
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--list-m"><use xlink:href="#icon-list-m"></use></svg>
                <p><code class="il">list-m</code></p>
            </div>
        </div>
        <div class="well__row">
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--license"><use xlink:href="#icon-license"></use></svg>
                <p><code class="il">license</code></p>
            </div>
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--promo"></svg>
                <p><code class="il">promo</code></p>
            </div>
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--star"><use xlink:href="#icon-star"></use></svg>
                <p><code class="il">star</code></p>
            </div>
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--star-outline"><use xlink:href="#icon-star-outline"></use></svg>
                <p><code class="il">star-outline</code></p>
            </div>
        </div>
        <div class="well__row">
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--location"></svg>
                <p><code class="il">location</code></p>
            </div>
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--search"></svg>
                <p><code class="il">search</code></p>
            </div>
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--settings"><use xlink:href="#icon-settings"></use></svg>
                <p><code class="il">settings</code></p>
            </div>
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--facebook"><use xlink:href="#icon-facebook"></use></svg>
                <p><code class="il">facebook</code></p>
            </div>
        </div>
        <div class="well__row">
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--twitter"></svg>
                <p><code class="il">twitter</code></p>
            </div>
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--google-plus"></svg>
                <p><code class="il">google-plus</code></p>
            </div>
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--rss"><use xlink:href="#icon-rss"></use></svg>
                <p><code class="il">rss</code></p>
            </div>
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--details"></svg>
                <p><code class="il">details</code></p>
            </div>
        </div>
        <div class="well__row">
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--info"><use xlink:href="#icon-info"></use></svg>
                <p><code class="il">info</code></p>
            </div>
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--questions"><use xlink:href="#icon-questions"></use></svg>
                <p><code class="il">questions</code></p>
            </div>
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--x"><use xlink:href="#icon-x"></use></svg>
                <p><code class="il">x</code></p>
            </div>
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--calendar"><use xlink:href="#icon-calendar"></use></svg>
                <p><code class="il">calendar</code></p>
            </div>
        </div>
        <div class="well__row">
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--help"></svg>
                <p><code class="il">help</code></p>
            </div>
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--alert"><use xlink:href="#icon-alert"></use></svg>
                <p><code class="il">alert</code></p>
            </div>
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--return"></svg>
                <p><code class="il">return</code></p>
            </div>
            <div class="well__section is-quartered center center--h">
                <svg class="icon icon--check"><use xlink:href="#icon-check"></use></svg>
                <p><code class="il">check</code></p>
            </div>
        </div>
    </div>
</section>

<!-- Empty Box -->
<!-- <div class="well__section is-quartered bg--light-gray"></div> -->

<?php require_once('inc/footer.php'); ?>
