<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2><?= $portfolioData['title'] ?></h2>
        <p><?= $portfolioData['description'] ?></p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-excel">Excel</li>
                <li data-filter=".filter-canva">Canva</li>
                <!-- <li data-filter=".filter-app">certificate</li> -->
                <!-- <li data-filter=".filter-branding">Branding</li> -->
                <!-- <li data-filter=".filter-books">Books</li> -->
            </ul><!-- End Portfolio Filters -->

            <!-- ALL -->
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                <?php while ($item = mysqli_fetch_assoc($qPortfolioItems)) : ?>
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-<?= $qPortfolioItems['category'] ?>">
                        <div class="portfolio-content h-100">
                            <img src="public/portfolio/<?= $item['image'] ?>" class="img-fluid" alt="">

                            <div class="portfolio-info">
                                <h4><?= $item['tagline'] ?></h4>
                                <p><?= $item['title_image'] ?></p>

                                <a href="public/portfolio/<?= $item['image'] ?>"
                                    title="<?= $item['tagline'] ?>"
                                    data-gallery="portfolio-gallery"
                                    class="glightbox preview-link">
                                    <i class="bi bi-zoom-in"></i>
                                </a>

                                <?php if (!empty($item['url'])) : ?>
                                    <a href="<?= $item['url'] ?>" class="details-link">
                                        <i class="bi bi-link-45deg"></i>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div><!-- End Portfolio Container -->

        </div>

    </div>

</section><!-- /Portfolio Section -->