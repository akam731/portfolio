<?php
class Ip {
    private $id;
    private $ip_address;
    private $total_visits;
    private $first_visit;

    public function __construct($id = "", $ip_address = "", $total_visits = "", $first_visit = "") {
        $this->id = $id;
        $this->ip_address = $ip_address;
        $this->total_visits = $total_visits;
        $this->first_visit = $first_visit;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIpAddress() {
        return $this->ip_address;
    }

    public function setIpAddress($ip_address) {
        $this->ip_address = $ip_address;
    }

    public function getTotalVisits() {
        return $this->total_visits;
    }

    public function setTotalVisits($total_visits) {
        $this->total_visits = $total_visits;
    }

    public function getFirstVisit() {
        return $this->first_visit;
    }

    public function setFirstVisit($first_visit) {
        $this->first_visit = $first_visit;
    }
}

class Visite {
    private $id;
    private $ip_id;
    private $date_time;

    public function __construct($id = "", $ip_id = "", $date_time = "") {
        $this->id = $id;
        $this->ip_id = $ip_id;
        $this->date_time = $date_time;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIpId() {
        return $this->ip_id;
    }

    public function setIpId($ip_id) {
        $this->ip_id = $ip_id;
    }

    public function getDateTime() {
        return $this->date_time;
    }

    public function setDateTime($date_time) {
        $this->date_time = $date_time;
    }
}
?>