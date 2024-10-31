<?php

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Sac_Digital_Popup
 * @subpackage Sac_Digital_Popup/public
 */
class Sac_Digital_Popup_Public
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $plugin_name The ID of this plugin.
     */
    private $plugin_name;


    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $version The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string $plugin_name The name of the plugin.
     * @param      string $version The version of this plugin.
     */
    public function __construct($plugin_name, $version)
    {

        $this->plugin_name = $plugin_name;
        $this->version = $version;
        $this->options = get_option($this->plugin_name);
    }

    /**
     *
     * Write HTML in page to read by Script Embed
     *
     */
    public function popup()
    {
        try {
            $token = (isset($this->options['token'])) ? $this->options['token'] : null;

            if (!empty($token)) {
                $cacheControl = date('Ymd');

                echo "<div id='sac--digital--popup'></div>
            <script>
                (function (s, a, c, d, g, t) {
                    var hd = a.getElementsByTagName('body')[0];
                    var js = a.createElement('script');
                    js.async = 1;
                    js.src = c + d + t;
                    var cs = a.createElement('link');
                    cs.rel = 'stylesheet';
                    cs.href = c + g + t;
                    hd.appendChild(cs);
                    hd.appendChild(js);
                })(window, document, '//api.sac.digital/popup/popup', '.js?v=', '.css?v=', '{$token}&s={$cacheControl}');
            </script>";
            }
        } catch (\Exception $e) {
            //
        }
    }
}
