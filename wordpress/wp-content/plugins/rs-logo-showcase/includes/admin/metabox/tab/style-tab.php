<div style="margin: 10px 0;"><label for="title_color" style="width:150px; display:inline-block;"><?php esc_html_e( 'Title Color', 'rst-logo') ?></label>
    <?php   
        $title_color   = get_post_meta( $logo_data->ID, 'title_color', true );              
        $title_color   = !empty($title_color) ? $title_color : '#303142';                
    ?>
    <input type="text" name="title_color" value="<?php echo esc_attr($title_color);?>" class="title_color"> 
</div>  

<div style="margin: 10px 0;"><label for="title_hover_color" style="width:150px; display:inline-block;"><?php esc_html_e( 'Title Hover Color', 'rst-logo') ?></label>
    <?php   
        $title_hover_color   = get_post_meta( $logo_data->ID, 'title_hover_color', true );              
        $title_hover_color   = !empty($title_hover_color) ? $title_hover_color : '#092591';     
    ?>
    <input type="text" name="title_hover_color" value="<?php echo esc_attr($title_hover_color);?>" class="title_color"> 
</div>

<div style="margin: 10px 0;"><label for="title_size" style="width:150px; display:inline-block;"><?php esc_html_e( 'Title Font Size', 'rst-logo') ?></label>
    <?php   
        $title_size   = get_post_meta( $logo_data->ID, 'title_size', true );              
        $title_size   = !empty($title_size) ? $title_size : '20px';         
    ?>
    <input type="text" name="title_size" value="<?php echo esc_attr($title_size);?>"> 
</div>

<div style="margin: 10px 0;"><label for="logo_padding" style="width:150px; display:inline-block;"><?php esc_html_e( 'Logo Padding', 'rst-logo') ?></label>
    <?php       
        $logo_padding   = get_post_meta( $logo_data->ID, 'logo_padding', true );              
        $logo_padding   = !empty($logo_padding) ? $logo_padding : '0px';                 
    ?>
    <input type="text" name="logo_padding" value="<?php echo esc_attr($logo_padding);?>">   
</div>