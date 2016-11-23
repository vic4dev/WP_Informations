<div class="boite">
    <div class="avatar">
        <?php echo '<img src="' . plugins_url( '../library/img/editor.png', __FILE__ ) . '" > ';?>&nbsp;
        &nbsp;<h2 class="role"><?php _e('Editor' , 'wp_op'); ?></h2>
    </div>
    <table class="form-table">
        <tr>
            <th scope="row"><?php _e('Name' , 'wp_op'); ?> :</th>
            <td><input class="wp_information_input" type="text" name="wp-info-name-editor" 
            value="<?php echo htmlentities(get_option('wp-info-name-editor')); ?>" disabled='disabled' /></td>
        </tr>
        <tr>
            <th scope="row"><?php _e('Username' , 'wp_op'); ?> @Twitter :</th>
            <td><input class="wp_information_input" type="text" name="wp-info-twitter-editor" 
            value="<?php echo htmlentities(get_option('wp-info-twitter-editor')); ?>" disabled='disabled' /></td>
        </tr>
        <tr>
            <th scope="row">URL Facebook :</th>
            <td><a target="_blank" href="<?php echo get_option('wp-info-facebook-editor');?>"><input class="wp_information_input wp_url" type="url" name="wp-info-facebook-editor" 
            value="<?php echo htmlentities(get_option('wp-info-facebook-editor')); ?>"disabled='disabled' /></a></td>
        </tr>
        <tr>
            <th scope="row"><?php _e('Telephone number' , 'wp_op'); ?> :</th>
            <td><input class="wp_information_input" type="tel" name="wp-info-tel-editor" 
            value="<?php echo htmlentities(get_option('wp-info-tel-editor')); ?>" disabled='disabled' /></td>
        </tr>
        <tr>
            <th scope="row"><?php _e('Email' , 'wp_op'); ?> :</th>
            <td><input class="wp_information_input" type="email" name="wp-info-email-editor" 
            value="<?php echo htmlentities(get_option('wp-info-email-editor')); ?>" disabled='disabled' /></td>
        </tr>
    </table>
    <p><a href="admin.php?page=wp_about_editor"><?php _e('Modify' , 'wp_op'); ?></a></p>
</div>