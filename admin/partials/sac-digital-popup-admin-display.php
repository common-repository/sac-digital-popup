<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @package    Sac_Digital_Popup
 * @subpackage Sac_Digital_Popup/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">

    <div id="icon-options-general" class="icon32"></div>
    <h1><?php echo esc_html(get_admin_page_title()); ?></h1>

    <div id="poststuff">

        <div id="post-body" class="metabox-holder columns-2">

            <!-- main content -->
            <div id="post-body-content">

                <div class="meta-box-sortables ui-sortable">

                    <div class="postbox">
                        <!-- Toggle -->

                        <h2 class="hndle"><span>Autenticação</span></h2>

                        <div class="inside">
                            <small>Informe o token de acesso gerado em seu painel para habilitar o plugin em seu site.</small>

                            <form method="post" name="cleanup_options" action="options.php" style="margin-top:20px;">
                                <?php
                                $options = get_option($this->plugin_name);
                                $token = isset($options['token']) && !empty($options['token']) ? $options['token'] : null;

                                settings_fields($this->plugin_name);
                                do_settings_sections($this->plugin_name);
                                ?>

                                <div style="display: block;">
                                    <div style="margin: 0 5px 0 0">
                                        <label for="<?php echo $this->plugin_name; ?>-token">Token de Acesso:</label><br>
                                        <input type="text" style="width: 400px" class="regular-text" id="<?php echo $this->plugin_name; ?>-token" name="<?php echo $this->plugin_name; ?>[token]" value="<?php if (!empty($token)) echo $token; ?>" placeholder="Token de Acesso" />
                                    </div>
                                </div>

                                <?php submit_button('Salvar', 'primary', 'submit', TRUE); ?>

                            </form>

                        </div>
                        <!-- .inside -->

                    </div>
                    <!-- .postbox -->

                </div>
                <!-- .meta-box-sortables .ui-sortable -->

            </div>
            <!-- post-body-content -->

            <!-- sidebar -->
            <div id="postbox-container-1" class="postbox-container">

                <div class="meta-box-sortables">

                    <div class="postbox">
                        <!-- Toggle -->

                        <h2 class="hndle"><span>Tem dúvidas?</span></h2>

                        <div class="inside">
                            <p>Se tem alguma dúvida sobre como usar este plugin, por favor entre em contato via suporte:</p>
                            <a href="https://suporte.alertrack.com.br" target="_blank">suporte.alertrack.com.br</a>
                        </div>
                        <!-- .inside -->

                    </div>
                    <!-- .postbox -->

                </div>
                <!-- .meta-box-sortables -->

            </div>
            <!-- #postbox-container-1 .postbox-container -->

        </div>
        <!-- #post-body .metabox-holder .columns-2 -->

        <br class="clear">
    </div>
    <!-- #poststuff -->

</div>