<h1><?php echo get_option('wp-info-title-first' ); ?></h1>
<form method="POST" action="options.php">
    <?php settings_fields( 'wp_information_settings_group_dev' ); ?>
    <div id="test">
        <input class="wp_information_input hide" id="tonDiv" type="text" name="wp-info-title-first" 
                value="<?php echo get_option('wp-info-title-first'); ?>" />
        <span id="Bouton">Ajouter / Modifier</span>   
    </div>
    <table class="form-table">
        <tr>
            <th scope="row">Prénom :</th>
            <td><input class="wp_information_input" type="text" name="wp-info-name-dev" 
            value="<?php echo get_option('wp-info-name-dev'); ?>" /></td>
        </tr>

        <tr>
            <th scope="row">Pseudo @Twitter :</th>
            <td><input class="wp_information_input" type="text" name="wp-info-twitter-dev" 
            value="<?php echo get_option('wp-info-twitter-dev'); ?>" /></td>
        </tr>

        <tr>
            <th scope="row">URL Facebook :</th>
            <td><input class="wp_information_input" type="url" name="wp-info-facebook-dev" 
            value="<?php echo get_option('wp-info-facebook-dev'); ?>" /></td>
        </tr>
         
        <tr>
            <th scope="row">Numéro de téléphone :</th>
            <td><input class="wp_information_input" type="tel" name="wp-info-tel-dev" 
            value="<?php echo get_option('wp-info-tel-dev'); ?>" /></td>
        </tr>
        
        <tr>
            <th scope="row">Email :</th>
            <td><input class="wp_information_input" type="email" name="wp-info-email-dev" 
            value="<?php echo get_option('wp-info-email-dev'); ?>" /></td>
        </tr>
<!--         <tr>
            <th scope="row">Rôle :</th>
            <td>
                <select name="select">
                    <option name ="test1" value="<?php echo get_option('test1'); ?>">Administrateur</option> 
                    <option name ="test2" value="<?php echo get_option('test2'); ?>">Editeur</option>
                    <option name ="test3" value="<?php echo get_option('test3'); ?>">Auteur</option>
                    <option name ="test4" value="<?php echo get_option('test4'); ?>">Contributeur</option>
                    <option name ="test5" value="<?php echo get_option('test5'); ?>">Abonné</option>
                </select>
            </td>
        </tr> -->
    </table>
    <?php submit_button(
    'Enregistrer les informations',
    'primary',
    'submit',
    array( 'tabindex' => '' )
    ); ?>
</form>