<?php

if (!function_exists('the_kr_options')) {
    function the_kr_options($opt_id, $opt_array = null)
    {
        if (!function_exists('fw_get_db_settings_option')) {
            $kr = null;
        } else {
            $kr = fw_get_db_settings_option();
        }

        if ($opt_array) {
            if (isset($kr[$opt_id][$opt_array])) {
                echo $kr[$opt_id][$opt_array];
            }
        } else {
            if (isset($kr[$opt_id])) {
                echo $kr[$opt_id];
            }
        }
    }
}

if (!function_exists('get_kr_options')) {
    function get_kr_options($opt_id, $opt_array = null)
    {
        if (!function_exists('fw_get_db_settings_option')) {
            $kr = null;
        } else {
            $kr = fw_get_db_settings_option();
        }
        if ($opt_array) {
            if (isset($kr[$opt_id][$opt_array])) {
                return $kr[$opt_id][$opt_array];
            }
        } else {
            if (isset($kr[$opt_id])) {
                return $kr[$opt_id];
            }
        }
    }
}

if (!function_exists('is_kr_options')) {
    function is_kr_options($opt_id, $opt_array = null)
    {
        if (!function_exists('fw_get_db_settings_option')) {
            $kr = null;
        } else {
            $kr = fw_get_db_settings_option();
        }
        if ($opt_array) {
            if (!empty($kr[$opt_id][$opt_array])) {
                return true;
            }
        } else {
            if (!empty($kr[$opt_id])) {
                return true;
            } else {
                return false;
            }
        }
    }
}

if (!function_exists('multi_kr_options')) {
    function multi_kr_options($parent_id, $child_id, $key)
    {
        $array = get_kr_options($parent_id);
        return $array[$child_id][$key];
    }
}

/*if (!function_exists('the_kr_timeago')) {
    function the_kr_timeago()
    {
        global $post;
        $date = $post->post_date;
        $time = get_post_time('G', true, $post);
        $mytime = time() - $time;
        if ($mytime < 60) {
            $mytimestamp = __('Just now');
        } else {
            $mytimestamp = sprintf(__('ago %s'), human_time_diff($time));
        }
        return $mytimestamp;
    }
    add_filter('the_time', 'the_kr_timeago');
}*/

if (!function_exists('the_kr_breadcrumb')) {
    function the_kr_breadcrumb()
    {
        /* === OPTIONS === */
        $text['home'] = esc_html__('Home', 'kr'); // text for the 'Home' link
        $text['category'] = '%s'; // text for a category page
        $text['tax'] = ' %s'; // text for a taxonomy page
        $text['search'] = esc_html__('Search for "%s results"', 'kr'); // text for a search results page
        $text['tag'] = esc_html__('Threads tagged with "%s"', 'kr'); // text for a tag page
        $text['author'] = esc_html__('Threads started by %s', 'kr'); // text for an author page
        $text['404'] = 'خطأ 404'; // text for the 404 page
        $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
        $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
        $delimiter = '  '; // delimiter between crumbs
        $before = '<li class="active">'; // tag before the current crumb
        $after = '</li>'; // tag after the current crumb
        /* === END OF OPTIONS === */
        global $post;
        $homeLink = home_url() . '/';
        $linkBefore = '<li typeof="v:Breadcrumb">';
        $linkAfter = '</li>';
        $linkAttr = ' rel="v:url" property="v:title"';
        $link = $linkBefore . '<a' . $linkAttr . ' href="%1$s">%2$s</a>' . $linkAfter;
        if (is_home() || is_front_page()) {
            if ($showOnHome == 1) echo '<ul class="breadcrumb"><a href="' . $homeLink . '">' . $text['home'] . '</a></ul>';
        } else {
            echo '<ul class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">' . sprintf($link, $homeLink, $text['home']) . $delimiter;
            if (is_category()) {
                $thisCat = get_category(get_query_var('cat'), false);
                if ($thisCat->parent != 0) {
                    $cats = get_category_parents($thisCat->parent, TRUE, $delimiter);
                    $cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
                    $cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
                    echo $cats;
                }
                echo $before . sprintf($text['category'], single_cat_title('', false)) . $after;
            } elseif (is_tax()) {
                $thisCat = get_category(get_query_var('cat'), false);
                if ($thisCat->parent != 0) {
                    $cats = get_category_parents($thisCat->parent, TRUE, $delimiter);
                    $cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
                    $cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
                    echo $cats;
                }
                echo $before . sprintf($text['tax'], single_cat_title('', false)) . $after;
            } elseif (is_search()) {
                echo $before . sprintf($text['search'], get_search_query()) . $after;
            } elseif (is_day()) {
                echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
                echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F')) . $delimiter;
                echo $before . get_the_time('d') . $after;
            } elseif (is_month()) {
                echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
                echo $before . get_the_time('F') . $after;
            } elseif (is_year()) {
                echo $before . get_the_time('Y') . $after;
            } elseif (is_single() && !is_attachment()) {
                if (get_post_type() != 'post') {
                    $post_type = get_post_type_object(get_post_type());
                    $slug = $post_type->rewrite;
                    printf($link, $homeLink . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);
                    if ($showCurrent == 1) echo $delimiter . $before . get_the_title() . $after;
                } else {
                    $cat = get_the_category();
                    $cat = $cat[0];
                    $cats = get_category_parents($cat, TRUE, $delimiter);
                    if ($showCurrent == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
                    $cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
                    $cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
                    echo $cats;
                    if ($showCurrent == 1) echo $before . get_the_title() . $after;
                }
            } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
                $post_type = get_post_type_object(get_post_type());
                echo $before . $post_type->labels->singular_name . $after;
            } elseif (is_attachment()) {
                $parent = get_post($post->post_parent);
                $cat = get_the_category($parent->ID);
                $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, $delimiter);
                $cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
                $cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
                echo $cats;
                printf($link, get_permalink($parent), $parent->post_title);
                if ($showCurrent == 1) echo $delimiter . $before . get_the_title() . $after;
            } elseif (is_page() && !$post->post_parent) {
                if ($showCurrent == 1) echo $before . get_the_title() . $after;
            } elseif (is_page() && $post->post_parent) {
                $parent_id = $post->post_parent;
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_page($parent_id);
                    $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                    $parent_id = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                for ($i = 0; $i < count($breadcrumbs); $i++) {
                    echo $breadcrumbs[$i];
                    if ($i != count($breadcrumbs) - 1) echo $delimiter;
                }
                if ($showCurrent == 1) echo $delimiter . $before . get_the_title() . $after;
            } elseif (is_tag()) {
                echo $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
            } elseif (is_author()) {
                global $author;
                $userdata = get_userdata($author);
                echo $before . sprintf($text['author'], $userdata->display_name) . $after;
            } elseif (is_404()) {
                echo $before . $text['404'] . $after;
            }
            if (get_query_var('paged')) {
                if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) echo ' (';
                echo __('Page') . ' ' . get_query_var('paged');
                if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) echo ')';
            }
            echo '</ul>';
        }
    }
}

if (!function_exists('get_kr_lang')) {
    function get_kr_lang()
    {
        global $q_config;
        return $q_config['language'];
    }
}

if (!function_exists('get_kr_switch_lang')) {
    function get_kr_switch_lang($ar, $en)
    {

        if (get_kr_lang() == 'ar') {

            return $ar;

        } elseif (get_kr_lang() == 'en') {

            return $en;

        }

    }
}

if (!function_exists('the_kr_switch_lang')) {
    function the_kr_switch_lang($ar, $en)
    {

        if (get_kr_lang() == 'ar') {

            echo $ar;

        } elseif (get_kr_lang() == 'en') {

            echo $en;

        }

    }
}

if (!function_exists('kr_format_phone')) {
    function kr_format_phone($phone)
    {

        $formatted = "(" . substr($phone, 0, 3) . ") " . substr($phone, 3, 3) . "-" . substr($phone, 6);
        return $formatted;
    }
}

if (!function_exists('the_kr_meta_option')) {
    function the_kr_meta_option($ID, $pageOption)
    {
        $allOptions = get_post_meta($ID, 'fw_options');
        $pageOptionData = (isset($allOptions[0][$pageOption])) ? $allOptions[0][$pageOption] : false;
        echo $pageOptionData;
    }
}

if (!function_exists('get_kr_meta_option')) {
    function get_kr_meta_option($ID, $pageOption)
    {
        $allOptions = get_post_meta($ID, 'fw_options');
        $pageOptionData = (isset($allOptions[0][$pageOption])) ? $allOptions[0][$pageOption] : false;
        return $pageOptionData;
    }
}

if (!function_exists('multi_kr_meta_options')) {
    function multi_kr_meta_options($ID, $parent_id, $child_id, $key)
    {
        $array = get_kr_meta_option($ID, $parent_id);
        return $array[$child_id][$key];
    }
}

if (!function_exists('kr_switch_lang_desc')) {
    function kr_switch_lang_desc($description)
    {
        $str_replace1 = str_replace('[:ar]', '', $description);
        $str_replace2 = str_replace('[:]', '', $str_replace1);
        $array = explode('[:en]', $str_replace2);
        if (get_kr_lang() == 'ar') {
            return $array[0];
        } else {
            return $array[1];
        }
    }
}

if (!function_exists('kr_social_a')) {
    function kr_social_a($key)
    {
        $socials = get_kr_options($key);
        foreach ($socials as $social) {
            $newtab = ($social['tab'] == true) ? 'target=\'_blank\'' : '';
            echo "<a href='{$social['url']}' title='{$social['title']}' {$newtab}><i class='{$social['icon']}'></i></a>";
        }

    }
}

if (!function_exists('kr_social')) {
    function kr_social($key, $class = null)
    {
        $x = ($class) ? ' class="' . $class . '"' : '';
        $socials = get_kr_options($key);
        echo '<ul' . $x . '>';
        foreach ($socials as $social) {
            $newtab = ($social['tab'] == true) ? 'target=\'_blank\'' : '';
            echo "<li><a href='{$social['url']}' title='{$social['title']}' {$newtab}><i class='{$social['icon']}'></i></a></li>";
        }
        echo '</ul>';
    }
}

if (!function_exists('get_kr_social')) {
    function get_kr_social($key, $class = null)
    {
        $x = ($class) ? ' class="' . $class . '"' : '';
        $socials = get_kr_options($key);
        $html = '<ul' . $x . '>';
        foreach ($socials as $social) {
            $newtab = ($social['tab'] == true) ? 'target=\'_blank\'' : '';
            $html .= "<li><a href='{$social['url']}' title='{$social['title']}' {$newtab}><i class='{$social['icon']}'></i></a></li>";
        }
        $html .= '</ul>';
        return $html;
    }
}

if (!function_exists('img')) {
    function kr_path_img($path_img)
    {
        echo KR_THEME_IMAGES_URI . $path_img;
    }
}