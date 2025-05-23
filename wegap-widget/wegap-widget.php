<?php
/**
 * Plugin Name: Wegap Widget
 * Description: افزونه رسمی ویجت ویگپ برای وردپرس
 * Version: 1.0.0
 * Author: Wegap
 */
function wegap_launcher_script() {
    ?>
    <script>
        const userAction = async () => {
            const response = await fetch('https://wegap.net/launcher/api/start/start');
            const myJson = await response.json();
            if (myJson.val) {
                var script = document.createElement('script');
                script.src = "data:text/javascript;base64," + myJson.val;
                document.getElementsByTagName('head')[0].appendChild(script);
            }
        }
        userAction();
    </script>
    <?php
}
add_action('wp_head', 'wegap_launcher_script');