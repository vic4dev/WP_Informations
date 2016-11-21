<h1><?php _e('Administrator' , 'wp_op'); ?></h1>
<form method="POST" action="options.php">
    <?php settings_fields( 'wp_information_settings_group_admin' ); ?>
        <table class="form-table">
            <tr>
                <th scope="row"><?php _e('Name' , 'wp_op'); ?> :</th>
                <td><input class="wp_information_input" type="text" name="wp-info-name-admin" 
                value="<?php echo get_option('wp-info-name-admin'); ?>" /></td>
            </tr>

            <tr>
                <th scope="row"><?php _e('Username' , 'wp_op'); ?> @Twitter :</th>
                <td><input class="wp_information_input" type="text" name="wp-info-twitter-admin" 
                value="<?php echo get_option('wp-info-twitter-admin'); ?>" /></td>
            </tr>

            <tr>
                <th scope="row">URL Facebook :</th>
                <td><input class="wp_information_input" type="url" name="wp-info-facebook-admin" 
                value="<?php echo get_option('wp-info-facebook-admin'); ?>" /></td>
            </tr>
             
            <tr>
                <th scope="row"><?php _e('Telephone number' , 'wp_op'); ?> :</th>
                <td><input class="wp_information_input" type="tel" name="wp-info-tel-admin" 
                value="<?php echo get_option('wp-info-tel-admin'); ?>" /></td>
            </tr>          
            <tr>
                <th scope="row"><?php _e('Email' , 'wp_op'); ?> :</th>
                <td><input class="wp_information_input" type="email" name="wp-info-email-admin" 
                value="<?php echo get_option('wp-info-email-admin'); ?>" /></td>
            </tr>
        </table>
        <?php submit_button(
            'Enregistrer les informations',
            'primary',
            'submit',
            array( 'tabindex' => '' )
            ); ?>
    </form>
