<div class="wrap-meta-group">

    <div style="margin: 10px 0;"><label for="grid_style" style="width:150px; display:inline-block;"><?php esc_html_e( 'Select Grid Style', 'rst-logo') ?></label>
        <?php $grid_style = get_post_meta( $logo_data->ID, 'grid_style', true );              
        $grid_style = !empty($grid_style) ? $grid_style : esc_html__('Style 1','rst-logo'); ?>

        <select name="grid_style">
            <option value="style1" <?php echo esc_html(($grid_style == 'style1') ? 'selected': ''); ?>><?php echo esc_html__('Default Style','rst-logo');?></option> 
            <option value="style1" <?php echo esc_html(($grid_style == 'style1') ? 'selected': ''); ?>><?php echo esc_html__('Style 1 (Default Style)','rst-logo');?></option>    
            <option value="style3" <?php echo esc_html( ($grid_style == 'style3') ? 'selected': ''); ?>><?php echo esc_html__('Style 2 (Border Style)','rst-logo');?></option>
            <option value="style5" <?php echo esc_html( ($grid_style == 'style5') ? 'selected': ''); ?>><?php echo esc_html__('Style 3 (Blur Style)','rst-logo');?></option>
            <option value="style6" <?php echo esc_html( ($grid_style == 'style6') ? 'selected': ''); ?>><?php echo esc_html__('Style 4 (Logo Block Style)','rst-logo');?></option>
        </select>     
    </div>

    <div style="margin: 10px 0;"><label for="logo_column" style="width:150px; display:inline-block;"><?php esc_html_e( 'Select Column', 'rst-logo') ?></label>
        <?php $logo_column = get_post_meta( $logo_data->ID, 'logo_column', true );
        $logo_column = !empty($logo_column) ? $logo_column : esc_html__('3 Column','rst-logo');?>

        <select name="logo_column">       
            <option value="2" <?php echo esc_html( ($logo_column == '2') ? 'selected': ''); ?>><?php echo esc_html__('2 Column','rst-logo');?></option>
            <option value="3" <?php echo esc_html( ($logo_column == '3') ? 'selected': ''); ?>><?php echo esc_html__('3 Column','rst-logo');?></option>
            <option value="4" <?php echo esc_html( ($logo_column == '4') ? 'selected': ''); ?>><?php echo esc_html__('4 Column','rst-logo');?></option>       
            <option value="6" <?php echo esc_html( ($logo_column == '6') ? 'selected': ''); ?>><?php echo esc_html__('6 Column','rst-logo');?></option>       
        </select>     
    </div> 

    <div style="margin: 10px 0;"><label for="align_div" style="width:150px; display:inline-block;"><?php esc_html_e( 'Section Align', 'rst-logo') ?></label>
        <?php $align_div = get_post_meta( $logo_data->ID, 'align_div', true );
        $align_div = !empty($align_div) ? $align_div : esc_html__('Center','rst-logo');?>

        <select name="align_div">   
            <option value="center" <?php echo esc_html( ($align_div == 'center') ? 'selected': ''); ?>><?php echo esc_html__('Center','rst-logo');?></option>        
            <option value="normal" <?php echo esc_html( ($align_div == 'normal') ? 'selected': ''); ?>><?php echo esc_html__('Default','rst-logo');?></option>  
        </select>
    </div>    
</div>