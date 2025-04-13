<?php
class Team {
    public $TeamID;
    public $Name;
    public $CoachLastName;
    public $CoachFirstName;
    public function getTeam() {
        return "id=".$this->TeamID.', name='.$this->Name.', Coach:'.$this->CoachFirstName.' '.$this->CoachLastName;
    }
}
?>
