<html><body>
<?php
if(isset($_POST['submit'])) 
{
$code=$_POST["code"];
$link=new mysqli("localhost","root","","dreamcakes");
if ($link->connect_error){
	die ("Unable to Connect ". $link->connect_error);
}
$query="select * from products where code='$code'";
$result=$link->query($query); 
if ($result->num_rows > 0){
while($row=$result->fetch_assoc()){
$name=$row["name"];
$weight=$row["weight"];
$ingredients=$row["ingredients"]; 
$price=$row["price"];
$category=$row["category"];
} }
else{
    die ("No record found");
    }
    }
    
    ?>
<table border="1">
<tr><th align="left">Cake Name</th>
<td><?php echo $name; ?></td></tr>
<tr><th align="left">Weight</th>
<td><?php echo $weight; ?></td></tr>
<tr><th align="left">Ingredients</th>
<td><?php echo $ingredients; ?></td>
<tr><th align="left">Price</th>
<td><?php echo $price; ?></td>
<tr><th align="left">Category</th>
<td><?php echo $category; ?></td>
</tr>
</table>
</body>
</html>
    
 
