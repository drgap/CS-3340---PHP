<?php
class Player {
    public $PlayerID;
    public $TeamID;
    public $LastName;
    public $FirstName;
    public $Jersey;
    public $Points;
    public function getPlayer() {
        return "pid=" . $this->PlayerID . ", tid=" . $this->TeamID .
            ', name='.$this->FirstName . " " . $this->FirstName .
            ', jersey='.$this->Jersey . ", points=" . $this->Points;
    }
}
?>
