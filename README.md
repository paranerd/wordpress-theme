# Wordpress theme tutorial

## Structure

All themes are in wp-content/themes/[theme_name]

All main files (e.g. index.php, header.php, style.css, ...) are directly in that folder

If you're building a standalone theme, both index.php and style.css are required for wordpress to recognize the folder as a theme

Alternatively you may just want to modify an existing theme, which would only require the style.css (see section [child-themes](#child-themes) for more info)

## The main files

### index.php
- landing page
- includes header, sidebar, footer, etc. via get_header(), etc.

### header.php
- opening <html\>, entire <head\> and opening <body\> as well as the actual header layout

### footer.php
- footer layout as well as closing </body\> and </html\>

### sidebar.php
- layout for the sidebar... duh^^

### single.php
- layout for post-page

### style.css

## Child themes
You can modify an existing theme by inheriting from it

You need at least 2 files:
- style.css
- functions.php

The following goes into the style.css

```
/*
 Theme Name:   Twenty Fifteen Child
 Theme URI:    http://example.com/twenty-fifteen-child/
 Description:  Twenty Fifteen Child Theme
 Author:       John Doe
 Author URI:   http://example.com
 Template:     twentyfifteen
 Version:      1.0.0
 Text Domain:  twenty-fifteen-child
*/
```

The following goes into the functions.php
```php
<?php
function my_theme_enqueue_styles() {
    $parent_style = 'twentyfifteen-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ), // dependency
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
```

The third parameter in setting the child-style is the dependency-parameter to make sure the parent-styles are loaded before the child style

## Pagination
```php
<div>
<?php
// Previous/next page navigation.
the_posts_pagination(array(
    'prev_text'          => '<<',
    'next_text'          => '>>',
    'before_page_number' => '<span>' . __( 'Page', 'twentyfifteen' ) . ' </span>',
    'screen_reader_text' => __( ' ' ),
));
?>
</div>
```

## functions.php
- contains functions to use in the templates
```php
<?php
// in functions.php
function get_test() {
    echo "worx";
}
```
```php
<?php
// e.g. in index.php
echo get_test();
```
