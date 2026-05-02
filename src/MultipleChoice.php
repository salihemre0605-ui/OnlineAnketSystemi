<?php
require_once 'Question.php';

// Question sınıfından miras alıyoruz
class MultipleChoice extends Question {
    private $options;

    public function __construct($id, $title, $options) {
        // Üst sınıfın (parent) constructor'ını çağırıyoruz
        parent::__construct($id, $title);
        $this->options = $options;
    }

    public function getOptions() {
        return $this->options;
    }
}
?>
