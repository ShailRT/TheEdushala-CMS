
  
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `leads` WHERE CONCAT(
        `Course`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `leads`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "camsdb");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
session_start();
$_SESSION['query'] = $query ;
echo $_SESSION['query'];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="search.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
              <br><br>
            
            <table>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Contact'];?></td>
                    <td><?php echo $row['Email'];?></td>
                    <td><?php echo $row['Course'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        <form method="post" action="export.php">  
                     <br><br><input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
        </form>  
  
    </body>
</html>
