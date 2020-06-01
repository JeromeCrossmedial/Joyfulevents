<?php
/*--------------------------------------------
*            create custom metaox
*---------------------------------------------*/
function rstlogo_custom_meta_box() {
	add_meta_box( 'logoshowcase_custom_metabox', esc_html__( 'Logo Settings', 'rsaddon'), 'rstlogo_metabox_callback', 'rst-logo', 'advanced', 'high', 2 );
}
add_action( 'add_meta_boxes', 'rstlogo_custom_meta_box' );

/*--------------------------------------------
*           metabox call back
*---------------------------------------------*/
function rstlogo_metabox_callback( $logo_data ) {	
	wp_nonce_field( 'rst_custom_save_metabox', 'rst_custom_save_metabox_nonce' ); ?>
	<!-- member social -->
	<div class="wrap-meta-group">
		<div style="margin: 10px 0;"><label for="rstlogo_link" style="width:150px; display:inline-block;"><?php esc_html_e( 'Logo URL', 'rsaddon') ?></label>
			<?php $rstlogo_link = get_post_meta( $logo_data->ID, 'rstlogo_link', true ); ?>
			<input type="url" name="rstlogo_link" id="rstlogo_link" class="rstlogo_link" value="<?php echo esc_html($rstlogo_link); ?>" style="width:300px;"/>
		</div>	
		
	</div>
<?php }

/*--------------------------------------------------------------
 *			Save metabox data
*-------------------------------------------------------------*/
function save_rstlogo_custom_meta( $post_id ) {
	if ( ! isset( $_POST['rst_custom_save_metabox_nonce'] ) ) {
		return;
	}
	if ( ! wp_verify_nonce( $_POST['rst_custom_save_metabox_nonce'], 'rst_custom_save_metabox' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( isset( $_POST['post_type'] ) && 'rs-logo' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}
	} else {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}
	if ( ! isset( $_POST['rstlogo_link'] ) ) {
		return;
	}
	$mymeta = array( 'rstlogo_link' );
	foreach ( $mymeta as $keys ) {
		if ( is_array( $_POST[ $keys ] ) ) {
			  $data = array();

			foreach ( $_POST[ $keys ] as $key => $value ) {
				$data[] = $value;
			}
		} else {
			$data = sanitize_text_field( $_POST[ $keys ] );
		}
		update_post_meta( $post_id, $keys, $data );
	}
}
add_action( 'save_post', 'save_rstlogo_custom_meta' );?>