<?php
require_once ('./websockets.php');
class EchoServer extends WebSocketServer {
    protected function process($user, $message) {       // 每收到訊息執行一次
        echo "got message: $message \r\n";
        $this->send ( $user, $message );                // 從哪裡收到訊息
    }
    protected function connected($user) {               // 只有繼承的可以看得到(僅對後代繼承開放)
    }
    protected function closed($user) {
    }
}

$echo = new EchoServer ( "0.0.0.0", "8080" );

try {
    $echo->run ();
} catch ( Exception $e ) {
    $echo->stdout ( $e->getMessage () );
}

?>