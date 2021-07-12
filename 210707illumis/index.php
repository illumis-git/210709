<?php include $_SERVER['DOCUMENT_ROOT']."/db.php"; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>유저정보</title>
</head>
<body>
    <div id="adminst-aria">
        <h1>유저정보</h1>
        <table class="list-table">
            <thead>
                <tr>
                    <th width="70">유저idx</th>
                    <th width="50">유저id</th>
                    <th width="50">유저pw</th>
                </tr>
            </thead>
            <?php
                $sql = query("SELECT * FROM mariatesttable BY idx DESC");
                if(mysqli_num_rows($sql)>0){
                    while($row = mysqli_fetch_assoc($sql)){
                        
                    
                ?>
                <tbody>
                    <tr>
                        <td width="70"><?php echo $row['idx'];?> </td>
                        <td width="50"><?php echo $row['id'];?></td>
                        <td width="50"><?php echo $row['pw'];?></td>
                    </tr>
                </tbody>
                    <?php } 
                }?>
        </table>
        <div id="page_btn">
            
        </div>
    </div>
</body>
</html>