<?php
    include('connection.inc.php');   
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Rent status</title>
        <meta name="rentmovie" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <style type="text/css">
            @media print{
                .hidden{
                    display: none;
                }
                
            }
            tr:nth-child(even){
                background-color: gray;
            }
            tr:nth-child(odd){
                background-color: white;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="button-style.css">
    </head>
    <body>
        <h1 align="center">Rent Status</h1>
        <?php
            try{
                $query="SELECT * FROM rentedviewdetail";
                $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
            }
            catch(Exception $e){
                echo "<p>".$e->getMessage()."</p>";
            }
        ?>
        
        <form action="borrow status.php" method="get" target="main" class="hidden">
            <table border="0" class="form">
                <tr>
                    <td>Enter Customer Phone: </td>
                    <td><input type="text" name="pNumber"></td>
                    <td><input type="submit" value="Search"></td> 
                    <td><input type="submit" value="Print" name="print"></td>
                </tr>
        </table>
        </form>
        <form action="update borrow status.php" method="get" target="main" class="hidden">
            <table border="1">
                <thead>
                    <th>Borrow ID</th>
                    <th>Movie ID</th>
                    <th>Customer ID</th>
                    <th>Date Of Borrow</th>
                    <th>Expected Return Date</th>
                    <th>Price</th>
                    <th>Penality</th>
                    <th>Borrow Status</th>
                    <th class="hidden">Update Option</th>
                    <th class="hidden">Update Status</th>
                </thead>
                <?php
                    $counter = 0;
                    if(isset($_GET['pNumber'])){
                        $pNumber = $_GET['pNumber'];
                        $query = "SELECT * FROM tblborrow WHERE Borrow_ID=".$pNumber;
                        $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
                        try{
                            while($row=mysqli_fetch_array($result)){
                                //extract($row);
                                echo "<tr>";
                                echo "<td>".$row['Borrow_ID']."</td>";
                                echo "<td>".$row['Movie_ID']."</td>";
                                echo "<td>".$row['Cust_ID']."</td>";
                                echo "<td>".$row['Date_Of_Borrow']."</td>";
                                echo "<td>".$row['Expected_Return_Date']."</td>";
                                echo "<td>".$row['BStatus']."</td>";
                                echo "<td>".$row['Price']."</td>";
                                echo "<td>".$row['Penality']."</td>";
                                /*echo "<td>".$row['Date_Of_Borrow']."</td>";
                                echo "<td>".$row['Expected_Return_Date']."</td>";
                                echo "<td>".$row['BStatus']."</td>";
                                //echo "<td>".$row['Price']."</td>";
                                //echo "<td>".$row['Penality']."</td>";*/
                                /*echo "<td class='hidden'>
                                    <select name='status'>
                                    <option value='Returned'>Returned</option>
                                    <option value='Not Returned'>Not Returned</option>
                                    </select>
                                </td>";*/
                                ?>
                                <td><a href="update borrow status.php?update_id=<?php $row['Borrow_ID']; ?>"><button>Update</button></a></td>
                                <?php
                                echo "</tr>";
                                $counter+=1;
                            }
                        }
                        catch(Exception $e){
                            echo "<p>". $e->getMessage()."</p>";
                        }
                    }
                ?>
            </table>
        </form>
        <?php
            echo "<p>Total datas found: $counter</p>";
        ?>
    </body>
</html>