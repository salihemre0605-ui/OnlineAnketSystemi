<?php
require_once 'Question.php';

class TextQuestion extends Question {
    public function __construct($id, $title) {
        // Üst sınıfın (Question) özelliklerini alıyoruz
        parent::__construct($id, $title);
    }
}
?>
