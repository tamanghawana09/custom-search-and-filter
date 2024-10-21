<?php
/**
 * Template Name: Custom Search and Filter Template
 */
get_header();
?>
<div class="content-wrapper">

<div class="main-container">
    <form action="" method="GET" class="main-filter-form">
        <label for="product-name">Product Name:</label>
        <input type="text" name="product-name" id="product-name"
            value="<?php echo isset($_GET['product-name']) ? esc_attr($_GET['product-name']) : ''; ?>">
        
        <label for="category">Category:</label>
        <select name="category" id="category">
            <option value=""> All categories</option>
            <?php
            $taxonomies = array('electronic-accessories', 'men-fashion', 'tv-and-home-appliances', 'watch-and-accessories', 'women-fashion');
            $terms = get_terms(array(
                'taxonomy' => $taxonomies,
                'hide_empty' => false,
            ));
            if(!empty($terms)) {
                foreach ($terms as $term) {
                    echo '<option value="' . esc_attr($term->slug) . '" ' . selected($_GET['category'], $term->slug, false) . '>' . esc_html($term->name) . '</option>';
                }
            }
            ?>
        </select>
        
        <label for="date">Date:</label>
        <input type="date" name="date" id="date"
            value="<?php echo isset($_GET['date']) ? esc_attr($_GET['date']) : ''; ?>">
    </form>
</div>

<div class="side-container">
    <form action="" method="GET" class="side-filter-form">
        <label for="product-price">Product Price:</label>
        <input type="text" name="product_price" id="product_price"
            value="<?php echo isset($_GET['product_price']) ? esc_attr($_GET['product_price']) : '';?>">

        <label for="manufacturer"> Manufacturer:</label>
        <select name="manufacturer" id="manufacturer">
            <option value="">All Manufacturers</option>
            <?php
                $manufacturers = get_field('manufacturer');
                if ($manufacturers) {
                    foreach ($manufacturers as $manu) {
                        echo '<option value="' . esc_html($manu) . '">' . esc_html($manu) . '</option>';
                    }
                } else {
                    echo '<option value="">No Manufacturers Found</option>';
                }
            ?>
        </select>
    </form>
</div>
</div>

<!-- Products Grid Layout -->
<div class="products-grid">
<?php
// Define the query arguments
$args = array(
    'post_type' => 'product', // Replace 'product' with your CPT slug
    'posts_per_page' => 10, // Number of posts to retrieve (use -1 for all)
    'orderby' => 'date', // Order by date
    'order' => 'DESC' // Descending order
);

$query = new WP_Query($args);

// Start the Loop
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        ?>
        <div class="product-item">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
            <?php
            $manufacturer = get_field('manufacturer');
            if ($manufacturer) {
                echo '<p class="manufacturer">Manufacturer: ' . esc_html($manufacturer) . '</p>';
            }
            ?>
        </div>
        <?php
    endwhile;

    // Restore original Post Data
    wp_reset_postdata();
else :
    echo '<p>No products found.</p>';
endif;
?>
</div>

<?php get_footer(); ?>
