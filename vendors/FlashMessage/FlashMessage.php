<?php
class FlashMessage {

    public static function typeMessage(int $type) {
        $color = array('danger', 'success', 'warning', 'primary', 'secondary', 'info', 'light', 'dark');
        return $color[$type];
    }

    public static function setMessage(string $text, int $type) {
        $message = '<div class="alert alert-'.FlashMessage::typeMessage($type).'" role="alert">'.$text.'</div>';
        $_SESSION['FlashMessage'] = $message;
    }

    public static function getMessage() {
        if(isset($_SESSION['FlashMessage'])) {
            echo $_SESSION['FlashMessage'];
            unset($_SESSION['FlashMessage']);
        }
    }
}