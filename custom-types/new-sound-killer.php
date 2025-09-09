<?php
add_action('init', 'recent_works_register');

function recent_works_register()
{
    $labels = array(
        'name' => 'Отзывы',
        'singular_name' => 'reviews',
        'add_new' => 'Добавить отзывы',
        'add_new_item' => 'Добавить новый отзыв',
        'edit_item' => 'Редактировать отзыв',
        'new_item' => 'Новый отзыв',
        'view_item' => 'Просмотр отзыва',
        'search_items' => 'Поиск',
        'not_found' => 'Нет отзывов',
        'not_found_in_trash' => 'Нет отзывов в корзине',
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_admin_bar' => false,
        'show_in_nav_menus' => false,
        'publicly_queryable' => false,
        'query_var' => false,
        'has_archive' => false,
        'rewrite' => array('slug' => 'recent-works', 'with_front' => false),
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => array('title', 'editor', 'thumbnail'),
        'exclude_from_search' => true
    );

    register_post_type('recent-works', $args);
    register_taxonomy("recent-works_category", array("recent-works"), array("hierarchical" => true, "label" => "Категории", "singular_label" => "recent-works", "rewrite" => true));
}

add_shortcode('recent-works-list', 'recent_works_shortcode');
function recent_works_shortcode($attr)
{
    extract(shortcode_atts(array(
        "count" => -1,
        "name" => ""
    ), $attr));

    $query_args = array(
        'post_type' => 'recent-works',
        'posts_per_page' => $count,
        'post_status' => 'publish'
    );

    $html = '';
    $query = new WP_Query($query_args);

    if ($query->have_posts()) {
        $html = '<div class="owl-carousel owl-theme owl-recent-works">';

        while ($query->have_posts()) {
            $query->the_post();
            
            $html .= '<div class="single-recent-works-item">';
            
            // Добавляем изображение, если есть
            if (has_post_thumbnail()) {
                $html .= '<div class="recent-works-thumbnail">';
                $html .= get_the_post_thumbnail(get_the_ID(), 'medium');
                $html .= '</div>';
            }
            
            $html .= '<div class="single-recent-works-item-body">';
            $html .= '<div class="single-recent-works-item-title">' . get_the_title() . '</div>';
            $html .= '<div class="single-recent-works-item-content">' . get_the_content() . '</div>';
            $html .= '</div>';
            $html .= '</div>'; // закрываем single-recent-works-item
        }

        $html .= '</div>';
        wp_reset_postdata();
    }
    
    return $html; // Важно: возвращаем HTML, а не просто выводим
}

