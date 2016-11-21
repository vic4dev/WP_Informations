<div class="boite">
    <h2 class="role"><?php _e('Administrator' , 'wp_op'); ?></h2>
    <table class="form-table">
        <tr>
            <th scope="row"><?php _e('Name' , 'wp_op'); ?> :</th>
            <td><input class="wp_information_input" type="text" name="wp-info-name-admin" 
            value="<?php echo get_option('wp-info-name-admin'); ?>" disabled='disabled' /></td>
        </tr>

        <tr>
            <th scope="row"><label for="wp-info-twitter-admin"><?php _e('Username' , 'wp_op'); ?> @Twitter :</label></th>
            <td><input class="wp_information_input" type="text" name="wp-info-twitter-admin" 
            value="<?php echo get_option('wp-info-twitter-admin'); ?>" disabled='disabled' /></td>
        </tr>

        <tr>
            <th scope="row">URL Facebook :</th>
            <td><a target='_blank' href='<?php echo get_option('wp-info-facebook-admin'); ?>'><input class="wp_information_input wp_url" type="url" name="wp-info-facebook-admin" 
            value="<?php echo get_option('wp-info-facebook-admin'); ?>" disabled='disabled' /></a></td>
        </tr>
         
        <tr>
            <th scope="row"><?php _e('Telephone number' , 'wp_op'); ?> :</th>
            <td><input class="wp_information_input" type="tel" name="wp-info-tel-admin" 
            value="<?php echo get_option('wp-info-tel-admin'); ?>" disabled='disabled' /></td>
        </tr>
        
        <tr>
            <th scope="row"><?php _e('Email' , 'wp_op'); ?> :</th>
            <td><input class="wp_information_input" type="email" name="wp-info-email-admin" 
            value="<?php echo get_option('wp-info-email-admin'); ?>" disabled='disabled' /></td>
        </tr>
    </table>
    <p>
        <a href="admin.php?page=wp_about_admin"><?php _e('Modify' , 'wp_op'); ?></a>
    </p>
</div>