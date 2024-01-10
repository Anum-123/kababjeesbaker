<?php include 'connection.php'; ?>
<a href="index.php">Home</a>
<table border="1px">
    <tr>
        <th>Name</th>
        <th>Number</th>
        <th>method</th>
        <th>city</th>
        <th>country</th>
        <th>total_products</th>
        <th>total_price</th>
    </tr>
    <?php
    $query="SELECT * FROM `order`";
    $data=mysqli_query($con,$query);
    $result=mysqli_num_rows($data);
    if($result){
        while($row=mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['number']; ?></td>
                <td><?php echo $row['method']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['country']; ?></td>
                
                <td><?php echo $row['total_products']; ?></td>
                <td><?php echo $row['total_price']; ?></td>
            </tr>
            <?php
        }
    }else{
    }
    ?>
</table>