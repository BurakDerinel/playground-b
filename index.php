<?php get_header(); ?>
<main class="container py-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="mb-4">
            <h2 class="mb-2"><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
        </article>
    <?php endwhile; else : ?>
        <p>Keine Beiträge gefunden.</p>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
