<?php
    include('mysql connection.php');
            try{
                $borrowID=$_GET['update_id'];
                /*$status=$_GET['status'];
                $mTitle = $_GET['mTitle'];
                $query="UPDATE tblBorrow SET BStatus='$status' WHERE Borrow_ID=".$_GET['borrowID'];
                $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
                if($result>0){
                    echo "<script>alert('Update Done!');</script>";
                    if($status=='Returned'){
                        $query="UPDATE tblmovie SET Available_No_Of_Copy=Available_No_Of_Copy+1 WHERE Title='$mTitle'";
                        $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
                        if($result>0){
                            echo "<script>alert('Movie data updated!');</script>";

                        }
                    }
                }
                else{
                    echo "<script>alert('Could not update!');</script>";
                }*/
            }
            catch(Exception $e){
                echo "<p> $e->getMessage();</p>";
            }
?>