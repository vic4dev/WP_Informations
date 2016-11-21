<h1><?php _e('Author' , 'wp_op'); ?></h1>
<form method="POST" action="options.php">
    <?php settings_fields( 'wp_information_settings_group_author' ); ?>
        <table class="form-table">
            <tr>
                <th scope="row"><?php _e('Name' , 'wp_op'); ?> :</th>
                <td><input class="wp_information_input" type="text" name="wp-info-name-author" 
                value="<?php echo get_option('wp-info-name-author'); ?>" /></td>
            </tr>

            <tr>
                <th scope="row"><?php _e('Username' , 'wp_op'); ?> @Twitter :</th>
                <td><input class="wp_information_input" type="text" name="wp-info-twitter-author" 
                value="<?php echo get_option('wp-info-twitter-author'); ?>" /></td>
            </tr>

            <tr>
                <th scope="row">URL Facebook :</th>
                <td><input class="wp_information_input" type="url" name="wp-info-facebook-author" 
                value="<?php echo get_option('wp-info-facebook-author'); ?>" /></td>
            </tr>
             
            <tr>
                <th scope="row"><?php _e('Telephone number' , 'wp_op'); ?> :</th>
                <td><input class="wp_information_input" type="tel" name="wp-info-tel-author" 
                value="<?php echo get_option('wp-info-tel-author'); ?>" /></td>
            </tr>
            <tr>
                <th scope="row"><?php _e('Email' , 'wp_op'); ?> :</th>
                <td><input class="wp_information_input" type="email" name="wp-info-email-author" 
                value="<?php echo get_option('wp-info-email-author'); ?>" /></td>
            </tr>
        </table>
        <?php submit_button(
            'Enregistrer les informations',
            'primary',
            'submit',
            array( 'tabindex' => '' )
            ); ?>
    </form>
