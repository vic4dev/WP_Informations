 <div class="boite">
            <h2 class="role">Marketeur</h2>
            <table class="form-table">
                <tr>
                    <th scope="row">Prénom :</th>
                    <td><input class="wp_information_input" type="text" name="wp-info-name-market" 
                    value="<?php echo get_option('wp-info-name-market'); ?>" disabled='disabled' /></td>
                </tr>

                <tr>
                    <th scope="row">Pseudo @Twitter :</th>
                    <td><input class="wp_information_input" type="text" name="wp-info-twitter-market" 
                    value="<?php echo get_option('wp-info-twitter-market'); ?>" disabled='disabled' /></td>
                </tr>
                 
                <tr>
                    <th scope="row">Numéro de téléphone :</th>
                    <td><input class="wp_information_input" type="tel" name="wp-info-tel-market" 
                    value="<?php echo get_option('wp-info-tel-market'); ?>" disabled='disabled' /></td>
                </tr>
                
                <tr>
                    <th scope="row">Email :</th>
                    <td><input class="wp_information_input" type="email" name="wp-info-email-market" 
                    value="<?php echo get_option('wp-info-email-market'); ?>" disabled='disabled' /></td>
                </tr>

                <tr>
                    <th scope="row">Rôle :</th>
                    <td>
                        <select name="select" disabled='disabled'>
                            <option name ="test1" value="<?php echo get_option('test1'); ?>">Administrateur</option> 
                            <option name ="test2" value="<?php echo get_option('test2'); ?>">Editeur</option>
                            <option name ="test3" value="<?php echo get_option('test3'); ?>">Auteur</option>
                            <option name ="test4" value="<?php echo get_option('test4'); ?>">Contributeur</option>
                            <option name ="test5" value="<?php echo get_option('test5'); ?>">Abonné</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p><a href="admin.php?page=wp_about_market">Modifier</a></p>
        </div>