<?php
    class DataProvider {
        public static function ExecuteQuery($sql)
        {
            //
            try {
                  $conn = mysqli_connect('localhost','root','','nht') or
                die ("Couldn't connect to database");
            mysqli_query($conn, "set names 'utf8'");
            $result = mysqli_query($conn, $sql);
            return $result;
            } catch (Exception $e) {
                 die ($e->getMessage());
            }
         
      
        }

        public static function ChangeURL($url){
            echo "<script type='text/javascript'> location='$url'; </script>";
        }
    }
?>