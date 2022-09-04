<?php
    include('mysql connection.php');

            $movieID = $_GET['movieID'];
            $title = $_GET['mTitle'];
            $category = $_GET['category'];
            $actor = $_GET['actor'];
            $director = $_GET['director'];
            $copyNumber = $_GET['ACN'];
            $avCopyNumber = $_GET['AVNC'];
            $status = $_GET['status'];
            try{
                $query = "UPDATE tblmovie SET Title='$title',
                Category='$category', Actor='$actor', Director='$director',
                Actual_No_Of_Copy=$copyNumber, Available_No_Of_Copy=$avCopyNumber, MStatus='$status' WHERE Movie_ID=$movieID";
                $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
                if($result>0){
                    echo "<script>alert('Data updated successfully!');</script>";
                }
                else{
                    echo "<script>alert('No data has been updated!');</script>";
                }
            }
            catch(Exception $e){
                echo "<p>$e->getMessage();</p>";
            }
?>
