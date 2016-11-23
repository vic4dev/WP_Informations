<div class="avatar">
    <?php echo '<img src="' . plugins_url( '../library/img/editor.png', __FILE__ ) . '" > ';?>&nbsp;
    &nbsp;<h1 class="role"><?php _e('Editor' , 'wp_op'); ?></h1>
</div>
    <form method="POST" action="options.php">
    <?php settings_fields( 'wp_information_settings_group_editor' ); ?>
        <table class="form-table">
            <tr>
                <th scope="row"><?php _e('Name' , 'wp_op'); ?> :</th>
                <td><input class="wp_information_input" type="text" name="wp-info-name-editor" 
                value="<?php echo htmlentities(get_option('wp-info-name-editor')); ?>" /></td>
            </tr>

            <tr>
                <th scope="row"><?php _e('Username' , 'wp_op'); ?> @Twitter :</th>
                <td><input class="wp_information_input" type="text" name="wp-info-twitter-editor" 
                value="<?php echo htmlentities(get_option('wp-info-twitter-editor')); ?>" /></td>
            </tr>

            <tr>
                <th scope="row">URL Facebook :</th>
                <td><input class="wp_information_input" type="url" name="wp-info-facebook-editor" 
                value="<?php echo htmlentities(get_option('wp-info-facebook-editor')); ?>" /></td>
            </tr>
             
            <tr>
                <th scope="row"><?php _e('Telephone number' , 'wp_op'); ?> :</th>
                <td><input class="wp_information_input" type="tel" name="wp-info-tel-editor" 
                value="<?php echo htmlentities(get_option('wp-info-tel-editor')); ?>" /></td>
            </tr>          
            <tr>
                <th scope="row"><?php _e('Email' , 'wp_op'); ?> :</th>
                <td><input class="wp_information_input" type="email" name="wp-info-email-editor" 
                value="<?php echo htmlentities(get_option('wp-info-email-editor')); ?>" /></td>
            </tr>
        </table>
        <?php submit_button(
            'Enregistrer les informations',
            'primary',
            'submit',
            array( 'tabindex' => '' )
            ); ?>
    </form>
