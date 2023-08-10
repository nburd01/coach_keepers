<?php
/*
Template Name: Index
*/

// Add your custom page code here

// For example, you can output some content:
get_header();
?>
<section class="--purple">
    <div class="container title-container">
        <h1>Container small</h1>
    </div>
    <div class="container-sm">
        <h2>Container small</h2>
    </div>
</section>
<section class="--darkblue"> 
    <div class="container title-container">
        <h1>Container</h1>
    </div>
    <div class="container">
        <h2>Container</h2>
    </div> 
</section>
<section class="--purple">
    <div class="container title-container">
        <h1>Container large</h1>
    </div>
    <div class="container-lg">
        <h2>Container large</h2>
    </div>
</section>
<section class="--darkblue">
    <div class="container title-container">
        <h1>Buttons</h1>
    </div>
    <div class="container">
        <button class="btn-bluelighter3">Nous suivre</button>
        <button class="btn">Contact</button>
        <button class="btn">Demander un devis</button>
        <button class="btn">S'inscrire</button>
    </div>
</section>
<section class="--purple">
        <div class="container title-container">
            <h1>Buttons</h1>
        </div>
    <div class="container">
        <button class="btn-bluelighter3">Nous suivre</button>
        <button class="btn">Contact</button>
        <button class="btn">Demander un devis</button>
        <button class="btn">S'inscrire</button>
    </div>
    <div class="container but-container">
        <button class="btn">Nous suivre</button>
    </div>
</section>
<section class="--darkblue">
    <div class="container title-container">
        <h1>Cards</h1>
    </div>
    <div class="container">
        <div class="cards">
            <div class="cards__card">
                <div class="cards__card__img"> <img
                    src="resources/images/restaurants/stil-u2Lp8tXIcjw-unsplash.jpg"
                    alt="La palette des goûts"
                  ></div>
                <div class="cards__card__title">Title</div>
                <div class="cards__card__subtitle">Subtitle</div>
            </div>
            <div class="cards__card">
                <div class="cards__card__img"> <img
                    src="resources/images/restaurants/stil-u2Lp8tXIcjw-unsplash.jpg"
                    alt="La palette des goûts"
                  ></div>
                <div class="cards__card__title">Title</div>
                <div class="cards__card__subtitle">Subtitle</div>
            </div>
            <div class="cards__card">
                <div class="cards__card__img"> <img
                    src="resources/images/restaurants/stil-u2Lp8tXIcjw-unsplash.jpg"
                    alt="La palette des goûts"
                  ></div>
                <div class="cards__card__title">Title</div>
                <div class="cards__card__subtitle">Subtitle</div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
