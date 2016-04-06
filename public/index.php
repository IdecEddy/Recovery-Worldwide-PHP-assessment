<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>

<?php
require_once('../includes/init.php'); 
require_once('../includes/database.php');
require_once('../includes/db_connection.php');
require_once('../includes/eateries.php');
require_once('../includes/eatery_type.php');
require_once('../includes/eatery_owners.php');
require_once('../includes/functions.php'}; 
?>

<?php
/* 
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



    
*/
?>


<html>
	<head>
		<title>Eatery Search</title>
	</head>
	<body>
		  <form action="index.php" method="post">
                    <p>Food search </p>
                        <input type="text" name="search" value="" />
                        <input type="submit" name="submit" value="Submit" />
                </form>
<?php
	if(isset($_POST['submit'])){
    	$search = trim($_POST['search']);
    	$eateries_array = null;
		while(is_null($eateries_array)){
			$eateries_array = find_by_eatery($search);
			if(is_null( $eateries_array )){
				$eateries_array = find_by_eatery_state($search);
			}
			if(is_null( $eateries_array )){
				$eateries_array = find_by_eatery_city($search);
			}
			if(is_null( $eateries_array )){
				$eateries_array = find_by_eatery_zip($search);
			}
			if(is_null( $eateries_array )){
				$eateries_array = find_by_eatery_first_name($search);
			}
			if(is_null( $eateries_array )){
				$eateries_array = find_by_eatery_last_name($search);
			}
			if(is_null( $eateries_array )){
				$eateries_array = find_by_eatery_phone($search);
			}
			if(is_null( $eateries_array )){
				$eateries_array = find_by_eatery_type($search);
			}
			if(is_null($eateries_array)){
				$eateries_array = 404;
			}

		}
		if(!is_null($eateries_array) && $eateries_array != 404){
			foreach($eateries_array as $eatery){
				$owner = find_by_owner_id($eatery->owner);
				echo "<p class='eatery_name'>" . ucwords($eatery->name) . "</p>";
				echo "<p class='eatery_location'>Located in: " . ucfirst($eatery->city) . ", " . $eatery->state . " " . $eatery->zip . "</p>";
				echo "<p class='owner_info'> Owned by: " . ucfirst($owner[0]->first_name) . " " . ucfirst($owner[0]->last_name) . " | Phone: " . $owner[0]->phone_number;
				echo "<hr />";
			}
		}
	}
?>

	</body>
</html>
