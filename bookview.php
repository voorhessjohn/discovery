<?php include './includes/config.php';?>
<?php 
if(isset($_GET['id']))
{
    $id = (int)$_GET['id'];
}else{
    
    echo "You didn\'t click anything to get here.";
    die();
}
?>


<?php include './includes/header.php';?>
		<h1><?php echo $row['Title']?></h1> 
<?php 

$sql = "select * from Books WHERE BookID=$id";


$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
if (mysqli_num_rows($result) > 0)//at least one record!
{//show results
	while ($row = mysqli_fetch_assoc($result))
    {
       echo "<p>";
       echo "<img src='/discovery/bookimages/".$id.".jpg' /></b><br />";
	   
       echo "Title: <b>" . $row['Title'] . "</b><br />";
	   echo "Author: <b>" . $row['Author'] . "</b><br />";
	   echo "Genre: <b>" . $row['Genre'] . "</b><br />";
       echo "Year: <b>" . $row['Publication_Year'] . "</b><br />";
       echo "Description: <b>" . $row['Description'] . "</b><br />";
	   echo "</p>";
    }
}else{//no records
	echo '<div align="center">What! No books?  There must be a mistake!!</div>';
}


@mysqli_free_result($result); #releases web server memory
@mysqli_close($iConn); #close connection to database

	    
include './includes/footer.php'; ?>