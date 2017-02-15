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
</div>
