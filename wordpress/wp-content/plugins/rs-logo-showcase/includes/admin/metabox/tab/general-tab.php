<div style="margin: 10px 0;"><label for="logo_style" style="width:150px; display:inline-block;"><?php esc_html_e( 'Select Style', 'rst-logo') ?></label>
    <?php $logo_style = get_post_meta( $logo_data->ID, 'logo_style', true );              
    $logo_style       = !empty($logo_style) ? $logo_style : esc_html__('Select Style','rst-logo');
    ?>
    <select name="logo_style">
        <option value ="grid" <?php echo esc_html(($logo_style == 'grid') ? 'selected': ''); ?>><?php echo esc_html__('Grid','rst-logo');?></option>
        <option value ="slider" <?php echo esc_html(($logo_style == 'slider') ? 'selected': ''); ?>><?php echo esc_html__('Slider','rst-logo');?></option>
        <option value ="list" <?php echo esc_html(($logo_style == 'list') ? 'selected': ''); ?>><?php echo esc_html__('List','rst-logo');?></option>                  
    </select>     
</div>

<div style="margin: 10px 0;"><label for="per_page" style="width:150px; display:inline-block;"><?php esc_html_e( 'Logo Per Page', 'rst-logo') ?></label>
    <?php $per_page = get_post_meta( $logo_data->ID, 'per_page', true );              
    $per_page       = !empty($per_page) ? $per_page : '-1';?>
    <input type="text" name="per_page" value="<?php echo esc_attr($per_page);?>">     
</div>

<div style="margin: 10px 0;"><label for="show_title" style="width:150px; display:inline-block;"><?php esc_html_e( 'Show Title', 'rst-logo') ?></label>
    <?php $show_title = get_post_meta( $logo_data->ID, 'show_title', true );              
    $show_title       = !empty($show_title) ? $show_title : esc_html__('Select','rst-logo');
    ?>
    <select name="show_title">
        <option value="hide" <?php echo esc_html(($show_title == 'hide') ? 'selected': ''); ?>><?php echo esc_html__('Default Style','rst-logo');?></option>
        <option value="show" <?php echo esc_html(($show_title == 'show') ? 'selected': ''); ?>><?php echo esc_html__('Show','rst-logo');?></option>
        <option value="hide" <?php echo esc_html(($show_title == 'hide') ? 'selected': ''); ?>><?php echo esc_html__('Hide','rst-logo');?></option>
    </select>     
</div>

<div style="margin: 10px 0;"><label for="logo_category" style="width:150px; display:inline-block;"><?php esc_html_e( 'Select Category', 'rst-logo') ?></label>
    <?php 
        $logo_category_saved = get_post_meta( $logo_data->ID, 'logo_category', true );
        $logo_category_saved = is_array( $logo_category_saved ) ? $logo_category_saved : array();
    ?>

    <select name="logo_category[]" multiple>    
        <?php $args = array(
          'taxonomy'               => 'logo-category',            
          'hide_empty'             => true,
        );
        $the_query = new WP_Term_Query($args);
        foreach($the_query->get_terms() as $term){
            $selected = ''; 
            $selected      = in_array( $term->term_id, $logo_category_saved ) ? 'selected' : ''; ?>
            <option value="<?php echo $term->term_id; ?>" <?php echo $selected; ?>><?php echo $term->name; ?></option>
            <?php
        }
    ?>
    </select>
</div>