<div class="boite">
    <h2 class="role"><?php _e('Author' , 'wp_op'); ?></h2>
    <table class="form-table">
        <tr>
            <th scope="row"><?php _e('Name' , 'wp_op'); ?></th>
            <td><input class="wp_information_input" type="text" name="wp-info-name-author" 
            value="<?php echo get_option('wp-info-name-author'); ?>" disabled='disabled' /></td>
        </tr>
        <tr>
            <th scope="row"><?php _e('Username' , 'wp_op'); ?> @Twitter :</th>
            <td><input class="wp_information_input" type="text" name="wp-info-twitter-author" 
            value="<?php echo get_option('wp-info-twitter-author'); ?>" disabled='disabled' /></td>
        </tr>
        <tr>
            <th scope="row">URL Facebook :</th>
            <td><a target="_blank" href="<?php echo get_option('wp-info-facebook-author'); ?>"><input class="wp_information_input wp_url" type="url" name="wp-info-facebook-author" 
            value="<?php echo get_option('wp-info-facebook-author'); ?>"disabled='disabled' /></a></td>
        </tr>
        <tr>
            <th scope="row"><?php _e('Telephone number' , 'wp_op'); ?> :</th>
            <td><input class="wp_information_input" type="tel" name="wp-info-tel-author" 
            value="<?php echo get_option('wp-info-tel-author'); ?>" disabled='disabled' /></td>
        </tr>
        <tr>
            <th scope="row"><?php _e('Email' , 'wp_op'); ?> :</th>
            <td><input class="wp_information_input" type="email" name="wp-info-email-author" 
            value="<?php echo get_option('wp-info-email-author'); ?>" disabled='disabled' /></td>
        </tr>
    </table>
    <p><a href="admin.php?page=wp_about_author"><?php _e('Modify' , 'wp_op'); ?></a></p>
</div>