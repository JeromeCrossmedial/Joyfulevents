<div class="wrap-meta-group">

    <div style="margin: 10px 0;"><label for="grid_style" style="width:150px; display:inline-block;"><?php esc_html_e( 'Select Slider Style', 'rst-logo') ?></label>
        <?php $slider_style = get_post_meta( $logo_data->ID, 'slider_style', true );              
        $slider_style = !empty($slider_style) ? $slider_style : esc_html__('Style 1','rst-logo'); ?>
        <select name="slider_style">
            <option value="style1" <?php echo esc_html(($slider_style == 'style1') ? 'selected': ''); ?>><?php echo esc_html__('Default Style','rst-logo');?></option>
            <option value="style1" <?php echo esc_html(($slider_style == 'style1') ? 'selected': ''); ?>><?php echo esc_html__('Style 1 (Default Style)','rst-logo');?></option>
            <option value="style3" <?php echo esc_html( ($slider_style == 'style3') ? 'selected': ''); ?>><?php echo esc_html__('Style 2 (Opacity Style)','rst-logo');?></option>
            <option value="style4" <?php echo esc_html( ($slider_style == 'style4') ? 'selected': ''); ?>><?php echo esc_html__('Style 3 (Blur Style)','rst-logo');?></option>  
            <option value="style5" <?php echo esc_html( ($slider_style == 'style5') ? 'selected': ''); ?>><?php echo esc_html__('Style 4 (Box Shadow Style)','rst-logo');?></option>      
        </select>     
    </div>

    <div style="margin: 10px 0;"><label for="cl_lg" style="width:150px; display:inline-block;"><?php esc_html_e( 'Number of columns ( Desktops > 1199px ) ', 'rst-logo' ) ?></label>
        <?php $cl_lg = get_post_meta( $logo_data->ID, 'cl_lg', true );              
        $cl_lg = !empty($cl_lg) ? $cl_lg : esc_html__('3 Column','rst-logo'); ?>

        <select name="cl_lg">
            <option value="3" <?php echo esc_html( ($cl_lg == '3') ? 'selected': ''); ?>><?php echo esc_html__('Default Column','rst-logo');?></option> 
            <option value="1" <?php echo esc_html( ($cl_lg == '1') ? 'selected': ''); ?>><?php echo esc_html__('1 Column','rst-logo');?></option>
            <option value="2" <?php echo esc_html( ($cl_lg == '2') ? 'selected': ''); ?>><?php echo esc_html__('2 Column','rst-logo');?></option>
            <option value="3" <?php echo esc_html( ($cl_lg == '3') ? 'selected': ''); ?>><?php echo esc_html__('3 Column','rst-logo');?></option>
            <option value="4" <?php echo esc_html( ($cl_lg == '4') ? 'selected': ''); ?>><?php echo esc_html__('4 Column','rst-logo');?></option>       
            <option value="5" <?php echo esc_html( ($cl_lg == '5') ? 'selected': ''); ?>><?php echo esc_html__('5 Column','rst-logo');?></option>     
            <option value="6" <?php echo esc_html( ($cl_lg == '6') ? 'selected': ''); ?>><?php echo esc_html__('6 Column','rst-logo');?></option>       
        </select>     
    </div>  

    <div style="margin: 10px 0;"><label for="cl_md" style="width:150px; display:inline-block;"><?php esc_html_e( 'Number of columns ( Desktops > 991px ) ', 'rst-logo' ) ?></label>
        <?php $cl_md = get_post_meta( $logo_data->ID, 'cl_md', true );              
        $cl_md = !empty($cl_md) ? $cl_md : esc_html__('3 Column','rst-logo'); ?>

        <select name="cl_md">
            <option value="3" <?php echo esc_html( ($cl_md == '3') ? 'selected': ''); ?>><?php echo esc_html__('Default Column','rst-logo');?></option>       
            <option value="1" <?php echo esc_html( ($cl_md == '1') ? 'selected': ''); ?>><?php echo esc_html__('1 Column','rst-logo');?></option>
            <option value="2" <?php echo esc_html( ($cl_md == '2') ? 'selected': ''); ?>><?php echo esc_html__('2 Column','rst-logo');?></option>
            <option value="3" <?php echo esc_html( ($cl_md == '3') ? 'selected': ''); ?>><?php echo esc_html__('3 Column','rst-logo');?></option>
            <option value="4" <?php echo esc_html( ($cl_md == '4') ? 'selected': ''); ?>><?php echo esc_html__('4 Column','rst-logo');?></option>       
            <option value="5" <?php echo esc_html( ($cl_md == '5') ? 'selected': ''); ?>><?php echo esc_html__('5 Column','rst-logo');?></option>     
            <option value="6" <?php echo esc_html( ($cl_md == '6') ? 'selected': ''); ?>><?php echo esc_html__('6 Column','rst-logo');?></option>       
        </select>     
    </div>  

    <div style="margin: 10px 0;"><label for="cl_sm" style="width:150px; display:inline-block;"><?php esc_html_e( 'Number of columns ( Tablets > 767px ) ', 'rst-logo' ) ?></label>
        <?php $cl_sm = get_post_meta( $logo_data->ID, 'cl_sm', true );              
        $cl_sm = !empty($cl_sm) ? $cl_sm : esc_html__('2 Column','rst-logo');?>

        <select name="cl_sm">
            <option value="2" <?php echo esc_html( ($cl_sm == '2') ? 'selected': ''); ?>><?php echo esc_html__('Default Column','rst-logo');?></option>
            <option value="1" <?php echo esc_html( ($cl_sm == '1') ? 'selected': ''); ?>><?php echo esc_html__('1 Column','rst-logo');?></option>
            <option value="2" <?php echo esc_html( ($cl_sm == '2') ? 'selected': ''); ?>><?php echo esc_html__('2 Column','rst-logo');?></option>
            <option value="3" <?php echo esc_html( ($cl_sm == '3') ? 'selected': ''); ?>><?php echo esc_html__('3 Column','rst-logo');?></option>
            <option value="4" <?php echo esc_html( ($cl_sm == '4') ? 'selected': ''); ?>><?php echo esc_html__('4 Column','rst-logo');?></option>       
            <option value="5" <?php echo esc_html( ($cl_sm == '5') ? 'selected': ''); ?>><?php echo esc_html__('5 Column','rst-logo');?></option>     
            <option value="6" <?php echo esc_html( ($cl_sm == '6') ? 'selected': ''); ?>><?php echo esc_html__('6 Column','rst-logo');?></option>       
        </select>     
    </div>  

    <div style="margin: 10px 0;"><label for="cl_xs" style="width:150px; display:inline-block;"><?php esc_html_e( 'Number of columns ( Tablets < 768px ) ', 'rst-logo' ) ?></label>
        <?php $cl_xs = get_post_meta( $logo_data->ID, 'cl_xs', true );              
        $cl_xs = !empty($cl_xs) ? $cl_xs : esc_html__('2 Column','rst-logo'); ?>

        <select name="cl_xs">            
            <option value="2" <?php echo esc_html( ($cl_xs == '2') ? 'selected': ''); ?>><?php echo esc_html__('Default Column','rst-logo');?></option>
            <option value="1" <?php echo esc_html( ($cl_xs == '1') ? 'selected': ''); ?>><?php echo esc_html__('1 Column','rst-logo');?></option>
            <option value="2" <?php echo esc_html( ($cl_xs == '2') ? 'selected': ''); ?>><?php echo esc_html__('2 Column','rst-logo');?></option>
            <option value="3" <?php echo esc_html( ($cl_xs == '3') ? 'selected': ''); ?>><?php echo esc_html__('3 Column','rst-logo');?></option>
            <option value="4" <?php echo esc_html( ($cl_xs == '4') ? 'selected': ''); ?>><?php echo esc_html__('4 Column','rst-logo');?></option>       
            <option value="5" <?php echo esc_html( ($cl_xs == '5') ? 'selected': ''); ?>><?php echo esc_html__('5 Column','rst-logo');?></option>     
            <option value="6" <?php echo esc_html( ($cl_xs == '6') ? 'selected': ''); ?>><?php echo esc_html__('6 Column','rst-logo');?></option>       
        </select>     
    </div>  

    <div style="margin: 10px 0;"><label for="cl_mobile" style="width:150px; display:inline-block;"><?php esc_html_e( 'Number of columns ( Mobile < 576px ) ', 'rst-logo' ) ?></label>
        <?php $cl_mobile = get_post_meta( $logo_data->ID, 'cl_mobile', true );              
        $cl_mobile = !empty($cl_mobile) ? $cl_mobile : esc_html__('1 Column','rst-logo'); ?>

        <select name="cl_mobile">     
            <option value="1" <?php echo esc_html( ($cl_mobile == '1') ? 'selected': ''); ?>><?php echo esc_html__('Default Column','rst-logo');?></option>   
            <option value="1" <?php echo esc_html( ($cl_mobile == '1') ? 'selected': ''); ?>><?php echo esc_html__('1 Column','rst-logo');?></option>
            <option value="2" <?php echo esc_html( ($cl_mobile == '2') ? 'selected': ''); ?>><?php echo esc_html__('2 Column','rst-logo');?></option>
            <option value="3" <?php echo esc_html( ($cl_mobile == '3') ? 'selected': ''); ?>><?php echo esc_html__('3 Column','rst-logo');?></option>
            <option value="4" <?php echo esc_html( ($cl_mobile == '4') ? 'selected': ''); ?>><?php echo esc_html__('4 Column','rst-logo');?></option>       
            <option value="5" <?php echo esc_html( ($cl_mobile == '5') ? 'selected': ''); ?>><?php echo esc_html__('5 Column','rst-logo');?></option>     
            <option value="6" <?php echo esc_html( ($cl_mobile == '6') ? 'selected': ''); ?>><?php echo esc_html__('6 Column','rst-logo');?></option>       
        </select>     
    </div>  

    <div style="margin: 10px 0;"><label for="slider_dots" style="width:150px; display:inline-block;"><?php esc_html_e( 'Navigation Dots ', 'rst-logo' ) ?></label>
        <?php $slider_dots = get_post_meta( $logo_data->ID, 'slider_dots', true );              
        $slider_dots = !empty($slider_dots) ? $slider_dots : esc_html__('Disable','rst-logo');?>

        <select name="slider_dots">
            <option value="false" <?php echo esc_html( ($slider_dots == 'false') ? 'selected': ''); ?>><?php echo esc_html__('Default Style','rst-logo');?></option> 
            <option value="true" <?php echo esc_html( ($slider_dots == 'true') ? 'selected': ''); ?>><?php echo esc_html__('Enable','rst-logo');?></option> 
            <option value="false" <?php echo esc_html( ($slider_dots == 'false') ? 'selected': ''); ?>><?php echo esc_html__('Disable','rst-logo');?></option>  
        </select>     
    </div>  

    <div style="margin: 10px 0;"><label for="slider_nav" style="width:150px; display:inline-block;"><?php esc_html_e( 'Navigation Arrow ', 'rst-logo' ) ?></label>
        <?php $slider_nav = get_post_meta( $logo_data->ID, 'slider_nav', true );              
        $slider_nav = !empty($slider_nav) ? $slider_nav : esc_html__('Disable','rst-logo'); ?>

        <select name="slider_nav">
            <option value="true" <?php echo esc_html( ($slider_nav == 'true') ? 'selected': ''); ?>><?php echo esc_html__('Default Style','rst-logo');?></option>  
            <option value="true" <?php echo esc_html( ($slider_nav == 'true') ? 'selected': ''); ?>><?php echo esc_html__('Enable','rst-logo');?></option>  
            <option value="false" <?php echo esc_html( ($slider_nav == 'false') ? 'selected': ''); ?>><?php echo esc_html__('Disable','rst-logo');?></option> 
        </select>     
    </div>  

    <div style="margin: 10px 0;"><label for="slider_autoplay" style="width:150px; display:inline-block;"><?php esc_html_e( 'Autoplay ', 'rst-logo' ) ?></label>
        <?php $slider_autoplay = get_post_meta( $logo_data->ID, 'slider_autoplay', true );
        $slider_autoplay = !empty($slider_autoplay) ? $slider_autoplay : esc_html__('Enable','rst-logo');?>

        <select name="slider_autoplay">
            <option value="true" <?php echo esc_html( ($slider_autoplay == 'true') ? 'selected': ''); ?>><?php echo esc_html__('Default Style','rst-logo');?></option> 
            <option value="true" <?php echo esc_html( ($slider_autoplay == 'true') ? 'selected': ''); ?>><?php echo esc_html__('Enable','rst-logo');?></option> 
            <option value="false" <?php echo esc_html( ($slider_autoplay == 'false') ? 'selected': ''); ?>><?php echo esc_html__('Disable','rst-logo');?></option>  
        </select>     
    </div>  

    <div style="margin: 10px 0;"><label for="slider_stop_on_hover" style="width:150px; display:inline-block;"><?php esc_html_e( 'Autoplay Interval ', 'rst-logo' ) ?></label>
        <?php $slider_stop_on_hover = get_post_meta( $logo_data->ID, 'slider_stop_on_hover', true );
        $slider_stop_on_hover = !empty($slider_stop_on_hover) ? $slider_stop_on_hover : esc_html__('Disable','rst-logo'); ?>

        <select name="slider_stop_on_hover">
            <option value="true" <?php echo esc_html( ($slider_stop_on_hover == 'true') ? 'selected': ''); ?>><?php echo esc_html__('Default Style','rst-logo');?></option>  
            <option value="true" <?php echo esc_html( ($slider_stop_on_hover == 'true') ? 'selected': ''); ?>><?php echo esc_html__('Enable','rst-logo');?></option>  
            <option value="false" <?php echo esc_html( ($slider_stop_on_hover == 'false') ? 'selected': ''); ?>><?php echo esc_html__('Disable','rst-logo');?></option> 
        </select>     
    </div>  

    <div style="margin: 10px 0;"><label for="slider_interval" style="width:150px; display:inline-block;"><?php esc_html_e( 'Stop On Hover ', 'rst-logo' ) ?></label>
        <?php $slider_interval = get_post_meta( $logo_data->ID, 'slider_interval', true ); 
        $slider_interval = !empty($slider_interval) ? $slider_interval : esc_html__('5 Seconds','rst-logo'); ?>

        <select name="slider_interval">
            <option value="5000" <?php echo esc_html( ($slider_interval == '5000') ? 'selected': ''); ?>><?php echo esc_html__('Default Style','rst-logo');?></option>
            <option value="5000" <?php echo esc_html( ($slider_interval == '5000') ? 'selected': ''); ?>><?php echo esc_html__('5 Seconds','rst-logo');?></option>
            <option value="5000" <?php echo esc_html( ($slider_interval == '4000') ? 'selected': ''); ?>><?php echo esc_html__('4 Seconds','rst-logo');?></option>
            <option value="5000" <?php echo esc_html( ($slider_interval == '3000') ? 'selected': ''); ?>><?php echo esc_html__('3 Seconds','rst-logo');?></option>
            <option value="5000" <?php echo esc_html( ($slider_interval == '2000') ? 'selected': ''); ?>><?php echo esc_html__('2 Seconds','rst-logo');?></option>
            <option value="5000" <?php echo esc_html( ($slider_interval == '1000') ? 'selected': ''); ?>><?php echo esc_html__('1 Seconds','rst-logo');?></option>
        </select>     
    </div>  

    <div style="margin: 10px 0;"><label for="slider_loop" style="width:150px; display:inline-block;"><?php esc_html_e( 'Loop ', 'rst-logo' ) ?></label>
        <?php $slider_loop = get_post_meta( $logo_data->ID, 'slider_loop', true );              
        $slider_loop = !empty($slider_loop) ? $slider_loop : esc_html__('Enable','rst-logo'); ?>

        <select name="slider_loop">
            <option value="true" <?php echo esc_html( ($slider_loop == 'true') ? 'selected': ''); ?>><?php echo esc_html__('Default Style','rst-logo');?></option> 
            <option value="true" <?php echo esc_html( ($slider_loop == 'true') ? 'selected': ''); ?>><?php echo esc_html__('Enable','rst-logo');?></option> 
            <option value="false" <?php echo esc_html( ($slider_loop == 'false') ? 'selected': ''); ?>><?php echo esc_html__('Disable','rst-logo');?></option>  
        </select>     
    </div>    
</div>