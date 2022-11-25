<?php
global $wpdb;
$result = $wpdb->get_results( "SELECT NOMBRE, URL,IMAGEN ,INFO FROM Productos");

echo"
<style>
.elementor-posts-container .elementor-post{
padding:10px !important; 

}
</style>

<div id=\"content\" class=\"site-content\">
                <div class=\"ast-container\">
                    <div
                        data-elementor-type=\"wp-page\"
                        class=\"elementor elementor-557\">
                        <section
                            class=\"elementor-section elementor-top-section elementor-element elementor-element-cc38fd1 elementor-section-boxed elementor-section-height-default elementor-section-height-default\"
                            
                            data-element_type=\"section\">
                            <div class=\"elementor-container elementor-column-gap-default\">
                                <div
                                    class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ab9bb63\"
                                    
                                    data-element_type=\"column\">
                                    <div class=\"elementor-widget-wrap elementor-element-populated\">";
                                   

echo"<div class=\"elementor-element-6ebb0a4 elementor-grid-3 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-posts--thumbnail-top elementor-card-shadow-yes elementor-posts__hover-gradient elementor-widget elementor-widget-posts\"
    data-element_type=\"widget\"
    data-widget_type=\"posts.cards\">

<div class=\"elementor-widget-container\">
       <link
            rel=\"stylesheet\"
            href=\"https://sanms.com.pe/wp/wp-content/plugins/pro-elements/assets/css/widget-posts.min.css\">
<div class=\"elementor-posts-container elementor-posts elementor-posts--skin-cards elementor-grid\">";

foreach ($result as $row) {
	
            echo"
            <article
            class=\"elementor-post elementor-grid-item post-662 post type-post status-publish format-standard has-post-thumbnail hentry category-destacadas\">
            <div class=\"elementor-post__card\">
                <a
                    class=\"elementor-post__thumbnail__link\"
                    href=".$row->URL.">
                    <div class=\"elementor-post__thumbnail\"><img
                        width=\"300\"
                        height=\"191\"
                        src=".$row->IMAGEN."
                        class=\"attachment-medium size-medium\"
                        alt=\"\"
                        loading=\"lazy\"
                        srcset=".$row->IMAGEN."
                        sizes=\"(max-width: 300px) 100vw, 300px \"/></div>
                </a>
                <div class=\"elementor-post__text\">
                    <h3 class=\"elementor-post__title\">
                        <a
                            href=".$row->URL.">"
                            .$row->NOMBRE.

                        "</a>
                    </h3>
                    <div class=\"elementor-post__excerpt\">
                        <p>".$row->INFO."&#8230;</p>
                    </div>
                </div>
            </div>
        </article>
            ";
  }      
echo"
</div>
</div>
</div>
</div>
</div>
</div>
</section>
";
?>
