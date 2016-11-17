<h1><?php echo get_option('wp-info-title-second' ); ?></h1>
<form method="POST" action="options.php">
    <?php settings_fields( 'wp_information_settings_group_market' ); ?>
    <div id="test">
        <input class="wp_information_input hide" id="tonDiv" type="text" name="wp-info-title-second" 
                value="<?php echo get_option('wp-info-title-second'); ?>" />
        <span id="Bouton">Ajouter / Modifier</span>   
    </div>
        <table class="form-table">
            <tr>
                <th scope="row">Prénom :</th>
                <td><input class="wp_information_input" type="text" name="wp-info-name-market" 
                value="<?php echo get_option('wp-info-name-market'); ?>" /></td>
            </tr>

            <tr>
                <th scope="row">Pseudo @Twitter :</th>
                <td><input class="wp_information_input" type="text" name="wp-info-twitter-market" 
                value="<?php echo get_option('wp-info-twitter-market'); ?>" /></td>
            </tr>

            <tr>
                <th scope="row">URL Facebook :</th>
                <td><input class="wp_information_input" type="url" name="wp-info-facebook-market" 
                value="<?php echo get_option('wp-info-facebook-market'); ?>" /></td>
            </tr>
             
            <tr>
                <th scope="row">Numéro de téléphone :</th>
                <td><input class="wp_information_input" type="tel" name="wp-info-tel-market" 
                value="<?php echo get_option('wp-info-tel-market'); ?>" /></td>
            </tr>
            
            <tr>
                <th scope="row">Email :</th>
                <td><input class="wp_information_input" type="email" name="wp-info-email-market" 
                value="<?php echo get_option('wp-info-email-market'); ?>" /></td>
            </tr>
        </table>
        <?php submit_button(
            'Enregistrer les informations',
            'primary',
            'submit',
            array( 'tabindex' => '' )
            ); ?>
    </form>
