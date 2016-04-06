<?php
    function find_by_eatery($search){
        if(!empty($search)){
            $eateries_returned = array();
            $sql = "select * from eateries where name = '" . $search . "'";
            $eateries = Eateries::find_by_sql($sql);
            if(!empty($eateries)){
                foreach($eateries as $eatery){
                    array_push($eateries_returned, $eatery);
                }
            return $eateries_returned;
            }
        return null;
        }
    }
    function find_by_eatery_state($search){
        if(!empty($search)){
            $eateries_returned = array();
            $sql = "select * from eateries where state = '" . $search . "'";
            $eateries = Eateries::find_by_sql($sql);
            if(!empty($eateries)){
                foreach($eateries as $eatery){
                    array_push($eateries_returned, $eatery);
                }
            return $eateries_returned;
            }
        return null;
        }
    }

    function find_by_eatery_city($search){
        if(!empty($search)){
            $eateries_returned = array();
            $sql = "select * from eateries where city = '" . $search . "'";
            $eateries = Eateries::find_by_sql($sql);
            if(!empty($eateries)){
                foreach($eateries as $eatery){
                    array_push($eateries_returned, $eatery);
                }
            return $eateries_returned;
            }
        return null;
        }
    }
    function find_by_eatery_zip($search){
        if(!empty($search)){
            $eateries_returned = array();
            $sql =  "select * from eateries where zip = '" . $search . "'";
            $eateries = Eateries::find_by_sql($sql);
            if(!empty($eateries)){
                foreach($eateries as $eatery){
                    array_push($eateries_returned, $eatery);
                }
            return $eateries_returned;
            }
        return null;
        }
    }
    function find_by_eatery_first_name($search){
        if(!empty($search)){
            $eateries_returned = array();
            $sql = "select * from eatery_owners where first_name = '" . $search . "'";
            $owners = Eatery_owners::find_by_sql($sql);
            if(!empty($owners)){
                foreach($owners as $owner){
                    $sql = "select * from eateries where owner = '" . $owner->id . "'";
                    $eateries = Eateries::find_by_sql($sql);
                    foreach($eateries as $eatery){
                          array_push($eateries_returned, $eatery);
                    }
                }
                return $eateries_returned;
            }
            return null;
        }
    }
    function find_by_eatery_last_name($search){
        if(!empty($search)){
            $eateries_returned = array();
            $sql = "select * from eatery_owners where last_name = '" . $search . "'";
            $owners = Eatery_owners::find_by_sql($sql);
            if(!empty($owners)){
                foreach($owners as $owner){
                    $sql = "select * from eateries where owner = '" . $owner->id . "'";
                    $eateries = Eateries::find_by_sql($sql);
                    foreach($eateries as $eatery){
                          array_push($eateries_returned, $eatery);
                    }
                }
                return $eateries_returned;
            }
            return null;
        }
    }
    function find_by_eatery_phone($search){
        if(!empty($search)){
            $eateries_returned = array();
            $sql = "select * from eatery_owners where phone_number = '" . $search . "'";
            $owners = Eatery_owners::find_by_sql($sql);
            if(!empty($owners)){
                foreach($owners as $owner){
                    $sql = "select * from eateries where owner = '" . $owner->id . "'";
                    $eateries = Eateries::find_by_sql($sql);
                    foreach($eateries as $eatery){
                          array_push($eateries_returned, $eatery);
                    }
                }
                return $eateries_returned;
            }
            return null;
        }
    }
    function find_by_eatery_type($search){
        if(!empty($search)){
            $eateries_returned = array();
            $sql = "select * from eatery_type where type = '" . $search . "'";
            $types = Eatery_type::find_by_sql($sql);
            if(!empty($types)){
                foreach($types as $type){
                    $sql = "select * from eateries where type = '" . $type->id . "'";
                    $eateries = Eateries::find_by_sql($sql);
                    foreach($eateries as $eatery){
                          array_push($eateries_returned, $eatery);
                    }
                }
                return $eateries_returned;
            }
            return null;
        }
    }
    function find_by_owner_id($owner_id){
        $sql = "select * from eatery_owners where id = '" . $owner_id . "'";
        return Eatery_owners::find_by_sql($sql);
    }


