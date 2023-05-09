<?php
/*
Template Name: Наша история
*/
?>

<?php
    get_header(); // вставляет сюда содержимое файла header.php
?>

<div class="aboutus">
    <div class="container">
        <h1 class="title">Наша история</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('aboutus_subtitle_1'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('aboutus_text_1'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/about_1.jpg" alt="мир детства">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/about_2.jpg" alt="мир детства">
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('aboutus_subtitle_2'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('aboutus_text_2'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('aboutus_subtitle_3'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('aboutus_text_3'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/about_3.jpg" alt="мир детства">
            </div>
        </div>
    </div>
</div>


<?php
    get_footer(); // вставляет сюда содержимое файла footer.php
?>
