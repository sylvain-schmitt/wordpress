<?php get_header() ?>

<?php if (have_posts()) : ?>
<div class="row">
    <?php while (have_posts()) : the_post(); ?>
    <div class="col-lg-4">
        <div class="card">
            <?php the_post_thumbnail('medium',
                ['class' => 'card-img-top', 'alt' => ''])
            ?>
            <div class="card-body">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php the_category(); ?></h6>
                <p>Publier par: <span class="text-muted"><?php the_author() ?> le <?php the_time('j F Y à H:i') ?></span></p>
                <p class="card-text"><?php the_content('en voir plus'); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire la suite</a>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
</div>
    <?php else: ?>
        <p>Aucuns articles :(</p>
    <?php endif; ?>
<?php get_footer() ?>
