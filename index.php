<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table{
            width: 500px;
            height: 500px;
            border: 1px solid darkred;
            margin: auto;
            text-align: center;
        }
        td{
            width: 45px;
            height: 45px;
            cursor: pointer;
            border: 1px solid blue;
        }

    </style>
</head>
<body>


<form action="upload.php" id="myform" method="post" enctype="multipart/form-data">
    <input type="file" name="fileuploader[]" multiple="multiple">
    <button>yukle</button>
</form>

<table>
    <?php
    for($i=1;$i<11;$i++){

        echo "
        <tr>
        ";
        for($j=1;$j<11;$j++){
            $res=$j*$i;
            echo "<td onclick='getNum($res)'>$res</td>";
        }


        echo "</tr>";

    }

    ?>



</table>
<script>
    function getNum(count) {
          alert(` i am ${count}`);
    }
</script>
</body>
</html>