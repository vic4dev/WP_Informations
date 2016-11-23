<div class="boite">
    <div class="avatar">
        <?php echo '<img src="' . plugins_url( '../library/img/contributor.png', __FILE__ ) . '" > ';?>&nbsp;
        &nbsp;<h2 class="role"><?php _e('Contributor' , 'wp_op'); ?></h2>
    </div>
    <table class="form-table">
        <tr>
            <th scope="row"><?php _e('Name' , 'wp_op'); ?> :</th>
            <td><input class="wp_information_input" type="text" name="wp-info-name-contributor" 
            value="<?php echo htmlentities(get_option('wp-info-name-contributor')); ?>" disabled='disabled' /></td>
        </tr>
        <tr>
            <th scope="row"><?php _e('Username' , 'wp_op'); ?> @Twitter :</th>
            <td><input class="wp_information_input" type="text" name="wp-info-twitter-contributor" 
            value="<?php echo htmlentities(get_option('wp-info-twitter-contributor')); ?>" disabled='disabled' /></td>
        </tr>
        <tr>
            <th scope="row">URL Facebook :</th>
            <td><a target="_blank" href='<?php echo get_option('wp-info-facebook-contributor'); ?>'><input class="wp_information_input wp_url" type="url" name="wp-info-facebook-contributor" 
            value="<?php echo htmlentities(get_option('wp-info-facebook-contributor')); ?>"disabled='disabled' /></a></td>
        </tr>     
        <tr>
            <th scope="row"><?php _e('Telephone number' , 'wp_op'); ?> :</th>
            <td><input class="wp_information_input" type="tel" name="wp-info-tel-contributor" 
            value="<?php echo htmlentities(get_option('wp-info-tel-contributor')); ?>" disabled='disabled' /></td>
        </tr>
        <tr>
            <th scope="row"><?php _e('Email' , 'wp_op'); ?> :</th>
            <td><input class="wp_information_input" type="email" name="wp-info-email-contributor" 
            value="<?php echo htmlentities(get_option('wp-info-email-contributor')); ?>" disabled='disabled' /></td>
        </tr>
    </table>
    <p><a href="admin.php?page=wp_about_contributor"><?php _e('Modify' , 'wp_op'); ?></a></p>
</div>