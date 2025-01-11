<!DOCTYPE html>
<html >
    <head>
        <title>Lab 5a Q1</title>
    </head>
    <body>
        <?php
            $name = "Illy Athirah binti Shahrol Nizam";
            $matricNum = "DI220031";
            $course = "BIW";
            $yearStudy = "2";
            $address = "KKDK TF UTHM";
        ?>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>Name</td>
                <td><?php echo $name; ?></td>  
            </tr>
            <tr>
                <td>Matric Number</td>
                <td><?php echo $matricNum; ?></td>  
            </tr>
            <tr>
                <td>Course</td>
                <td><?php echo $course; ?></td>  
            </tr>
            <tr>
                <td>Year of Study</td>
                <td><?php echo $yearStudy; ?></td>  
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo $address; ?></td>  
            </tr>
        </table>
    </body>
</html>

