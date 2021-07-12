<?php include $_SERVER['DOCUMENT_ROOT']."/db.php"; ?>
<?php
$sql = "SELECT idx, id, pw FROM mariatesttable";
$result = query($sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
echo "idx: " . $row["idx"]. " id:" . $row["id"]. "pw: " . $row["pw"] . "<br>";
}
}else{
echo "테이블에 데이터가 없습니다.";
}
mysqli_close($conn); // 디비 접속 닫기
?>