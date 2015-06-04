<?php
    global $post;

    // default attributes for shortcode
    $shortcode_default_attrs = array(
         'author' => '',
         'show' => 5,
         'excerpt' => 'false',
         'thumbnail' => 'false',
         'post_type' => 'post',
         'category' => '',
         'tag' => ''
    );
    
    // overrides default attributes set above and separates into individual varaibles.
    extract(shortcode_atts( $shortcode_default_attrs, $inserted_attrs ));

    if(!empty($author)) {
        
        // checks if there are multiple authors set.
        $author_has_comma = strpos($author, ',');
        if($author_has_comma === false) {

            // gets the author data for a single author.
            $author_data = get_user_by( 'login', $author );

            if(!empty( $author_data)) {
                $args = array(
                    'author' => $author_data->ID,
                    'posts_per_page' => $show,
                    'post_type' => $post_type,
                    'category_name' => $category,
                    'tag' => $tag,
                );
            }

        } else {
            
            // gets the author data for multiple authors.
            $authors = explode(',', $author);
            $author_data = '';
            foreach($authors as $author_login) {
                $author_user = get_user_by('login', $author_login);
                $author_data .= $author_user->ID . ',';
            }

            $args = array(
                'author' => $author_data,
                'posts_per_page' => $show,
                'post_type' => $post_type,
                'category_name' => $category,
                'tag' => $tag,
            );
        }
    } elseif (empty($author)) {

        $args = array(
            'author' => $author,
            'posts_per_page' => $show,
            'post_type' => $post_type,
            'category_name' => $category,
            'tag' => $tag,
        );
    }
        
    // gets posts form database
    $post_query = new WP_Query( $args );

    // displays posts 
    if($post_query) {
        $data = '';
        $data .= '<ul class="latest_post">';
        while ($post_query->have_posts()) : $post_query->the_post();
            $data .= '<li>';
            
            // displays a link to the post, using the post title
            $data .= '<a href="' . get_permalink() . '" title="' . get_the_title() . '" style="display: block;">';
            $data .= get_the_title();
            $data .= '</a>';

            // display a linked featured image if post has
            if($thumbnail == 'true') { 
                if(has_post_thumbnail()) { 
                    $data .= '<a href="' . get_permalink() . '" title="' . get_the_title() . '">';
                    $data .= get_the_post_thumbnail(get_the_id(), 'thumbnail');
                    $data .= '</a>';
                }
            }
            
            // displays the post excerpt if "excerpt" has been set to true
            if($excerpt == 'true') {
                $data .= '<p>' . get_the_excerpt() . '</p>';
            }

            $data .= '</li>';
        endwhile;
        $data .= '</ul>';
    }

    wp_reset_postdata();

    echo $data;