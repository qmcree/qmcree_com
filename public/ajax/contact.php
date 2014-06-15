<?php

require_once '../../vendor/autoload.php';

try {
    $message = new ContactMessage();
    $message->email();
    echo json_encode(array(
        'type' => 'success',
    ));
}
catch (Exception $e) {
    echo json_encode(array(
        'type' => 'error',
        'message' => $e->getMessage(),
    ));
}