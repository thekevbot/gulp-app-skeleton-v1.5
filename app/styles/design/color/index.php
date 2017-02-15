<?php require_once('../../_inc/header.php'); ?>
<?php require_once('../../_inc/sidebar.php'); ?>

<section class="lsg__content" id="contentArea">

    <h1>Color</h1>
    <h3>Brand Colors</h3>
    <p>Primary brand colors are used for elements that must reflect the brand. Each color has a darker and a lighter shade.</p>

    <!--
        NOTE:
        HEX value is added dynamically to the swatch client-side. The user can click a swatch to copy the HEX to their clipboard.
    -->

    <div class="well cf">
        <!-- Color Swatch -->
        <ul class="lsg__color-group">
            <li class="lsg__color bg--light-brand textColor--darkest-gray">
                Light Brand
            </li>
            <li class="lsg__color bg--brand">
                Brand
            </li>
            <li class="lsg__color bg--dark-brand">
                Dark Brand
            </li>
        </ul>
        <!-- /Color Swatch -->

        <!-- Color Swatch -->
        <ul class="lsg__color-group">
            <li class="lsg__color bg--light-accent textColor--darkest-gray">
                Light Accent
            </li>
            <li class="lsg__color bg--accent">
                Accent
            </li>
            <li class="lsg__color bg--dark-accent">
                Dark Accent
            </li>
        </ul>
        <!-- /Color Swatch -->

        <!-- Color Swatch -->
        <ul class="lsg__color-group">
            <li class="lsg__color bg--light-tertiary textColor--darkest-gray">
                Light Tertiary
            </li>
            <li class="lsg__color bg--tertiary">
                Tertiary
            </li>
            <li class="lsg__color bg--dark-tertiary">
                Dark Tertiary
            </li>
        </ul>
        <!-- /Color Swatch -->

        <!-- Color Swatch -->
        <ul class="lsg__color-group">
            <li class="lsg__color bg--light-negative textColor--darkest-gray">
                Light Negative
            </li>
            <li class="lsg__color bg--negative">
                Negative
            </li>
            <li class="lsg__color bg--dark-negative">
                Dark Negative
            </li>
        </ul>
        <!-- /Color Swatch -->
    </div>

    <h3>Grays</h3>
    <p>Grey colors are used for text, backgrounds, lines and borders.</p>
    <div class="well cf">
        <!-- Color Swatch -->
        <ul class="lsg__color-group">
            <li class="lsg__color bg--lightest-gray textColor--darkest-gray">
                Lightest Gray
            </li>
        </ul>
        <!-- /Color Swatch -->

        <!-- Color Swatch -->
        <ul class="lsg__color-group">
            <li class="lsg__color bg--light-gray textColor--darkest-gray">
                Light Gray
            </li>
        </ul>
        <!-- /Color Swatch -->

        <!-- Color Swatch -->
        <ul class="lsg__color-group">
            <li class="lsg__color bg--gray textColor--darkest-gray">
                Gray
            </li>
        </ul>
        <!-- /Color Swatch -->

        <!-- Color Swatch -->
        <ul class="lsg__color-group">
            <li class="lsg__color bg--dark-gray">
                Dark Gray
            </li>
        </ul>
        <!-- /Color Swatch -->

        <!-- Color Swatch -->
        <ul class="lsg__color-group">
            <li class="lsg__color bg--darkest-gray">
                Darkest Gray
            </li>
        </ul>
        <!-- /Color Swatch -->
    </div>

    <h3>Black &amp; White</h3>
    <p>Black is never pure black, white is pure white. Additionally, there are five variations for each that incrementally add alpha-transparency at <code class="il">80%</code>, <code class="il">60%</code>, <code class="il">40%</code>, <code class="il">20%</code>, <code class="il">15%</code> and <code class="il">10%</code></p>
    <div class="well no--pad">
        <div class="well__row">
            <div class="well__section cf">
                <!-- Color Swatch -->
                <ul class="lsg__color-group">
                    <li class="lsg__color bg--white textColor--dark-gray">
                        White
                    </li>
                </ul>
                <!-- /Color Swatch -->

                <!-- Color Swatch -->
                <ul class="lsg__color-group">
                    <li class="lsg__color bg--black">
                        Black
                    </li>
                </ul>
                <!-- /Color Swatch -->
            </div>
        </div>
        <div class="well__row">
            <div class="well__section well--code no--pad">
                <pre><code >&lt;!-- White --&gt;
&lt;div class=&quot;bg--white&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--white-80&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--white-60&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--white-40&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--white-20&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--white-15&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--white-10&quot;&gt;&lt;/div&gt;

&lt;!-- Black --&gt;
&lt;div class=&quot;bg--black&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--black-80&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--black-60&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--black-40&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--black-20&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--black-15&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--black-10&quot;&gt;&lt;/div&gt;</code></pre>
            </div>
        </div>
    </div>


</section>

<?php require_once('../../_inc/footer.php'); ?>
