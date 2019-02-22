<div id="cooler-nav" class="navigation danzerpress-flex-row danzerpress-row-fix">
    <?php $prevPost = get_previous_post(true);
    if($prevPost) {?>
        <div class="nav-box previous danzerpress-col-2">
            <?php 
                if (get_the_post_thumbnail_url($prevPost->ID)) {
                    $prevthumbnail = get_the_post_thumbnail_url($prevPost->ID ); 
                } else {
                    $nextthumbnail = danzerpress_no_image();
                }
            ?>
            <?php previous_post_link('%link',"  <p class='danzerpress-prev-image' style='background: linear-gradient(rgba(0, 0, 0, 0.63), rgba(45, 45, 45, 0.29)), url(" . $prevthumbnail . ") center / cover;'><span style='margin-bottom: 5px;'>Previous:</span><span style='font-size:18px;'>%title</span></p>", TRUE); ?>
        </div>
        
    <?php } 

    $nextPost = get_next_post(true);
    if($nextPost) { ?>
        <div class="nav-box next danzerpress-col-2" style="float:right;">
            <?php 
                if (get_the_post_thumbnail_url($nextPost->ID)) {
                    $nextthumbnail = get_the_post_thumbnail_url($nextPost->ID); 
                } else {
                    $nextthumbnail = danzerpress_no_image();
                }
            ?>
            <?php next_post_link('%link',"<p class='danzerpress-next-image' style='background: linear-gradient(rgba(0, 0, 0, 0.63), rgba(45, 45, 45, 0.29)), url(" . $nextthumbnail . ") center / cover;'><span style='margin-bottom: 5px;'>Next:</span><span style='font-size:18px;'>%title</span></p>", TRUE); ?>
        </div>
    <?php } ?>
</div><!--#cooler-nav div -->