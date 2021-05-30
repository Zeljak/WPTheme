<?php
/**
 * Template Name: Template: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="home-banner">
</div>

<div class="new-articles">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="#" class="recepti">
                <div class="first-news">
                    <div class="image">
                        <div class="title">Brzi recepti</div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
            <a href="#" class="obitelj">
                <div class="first-news">
                     <div class="image2">
                     <div class="title">Obitelj u uredu</div>
                     </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4"> 
                <a href="#" class="lifestyle">
                <div class="first-news">
                <div class="image3">
                <div class="title">Savršeni izleti</div>
                </a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="main-article">
    <div class="container">
        <h3>Egida</h3>
        <h1>Lorem ipsum dolor sit amet</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-8">
            <p class="tagline">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique dicta unde molestias! Consequuntur hic tempora, repellendus fuga dignissimos nemo placeat in. Cum labore aut neque reprehenderit, at nesciunt ipsa consectetur!
            </p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique dicta unde molestias! Consequuntur hic tempora, repellendus fuga dignissimos nemo placeat in. Cum labore aut neque reprehenderit, at nesciunt ipsa consectetur!</p>
        </div>
    </div>
</div>


<?php
get_footer();
