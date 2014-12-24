<?php
/***************************************************************************************
Returns all the other category events available 
***************************************************************************************/

        require_once 'config.php';
        $mysql_query = mysqli_query($con,"SELECT * FROM events WHERE type='others'");
        $array=array();
        while($row = mysqli_fetch_assoc($mysql_query)){
           $row_array['eventid'] = $row['eventid'];
           $row_array['sender'] = $row['sender'];
           $row_array['type'] = $row['type'];
           $row_array['sampletext'] = $row['sampletext'];
           $row_array['what'] = $row['what'];
           $row_array['when'] = $row['when'];
           $row_array['where'] = $row['where'];
           $row_array['abtbride'] = $row['abtbride'];
           $row_array['banner'] = $row['banner'];
           $row_array['subtype'] = $row['subtype'];
           $row_array['directions'] = $row['directions'];
           $row_array['abtgroom'] = $row['abtgroom'];
           $row_array['otherdetails'] = $row['otherdetails'];
           array_push($array,$row_array);
        }
        echo '{"events":'.json_encode($array,JSON_PRETTY_PRINT).'}';
 ?>