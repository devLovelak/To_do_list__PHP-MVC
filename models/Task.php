<?php

class Task {
    private $description;
    private $done;

    public function __construct($description) {
        $this->description = $description;
        $this->done = false;
    }

    public function getDescription() {
        return $this->description;
    }

    public function isDone() {
        return $this->done;
    }

    public function markAsDone() {
        $this->done = true;
    }
}
