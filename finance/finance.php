<?php
#include("mysql.inc.php");
$conn = @mysqli_connect("localhost","root", "");
if (mysqli_connect_errno())
	die("無法連線資料庫伺服器, 請聯絡系統管理員");
else 
	echo "成功連結資料庫伺服器<br>";

mysqli_set_charset($conn, "utf8");
$seldb=@mysqli_select_db($conn, "finance notes");
if (!$seldb) {
	die("資料庫選擇失敗！");
}else{
	echo "資料庫選擇成功！";
}

	//預設查詢
	$sql="SELECT * FROM merchandise ORDER BY S_member, seqNo";

	//若是按下 "搜尋"
	if(isset($_POST["actSrh"])){
		$strSrh = "";
		$opt1="";
		$opt2="";
		if (!empty($_POST['Srh_1']) && !empty($_POST['Srh_2'])){
			$opt1=$_POST['Srh_1'];
			$opt2=$_POST['Srh_2'];
			$strSrh = "WHERE category Like '".$opt1."%' AND name Like '%".$opt2."%'";
		}
		else if (!empty($_POST['Srh_1']) && empty($_POST['Srh_2'])){
			$opt1=$_POST['Srh_1'];
			$strSrh = "WHERE category Like '".$opt1."%'";
		}
		else if (empty($_POST['Srh_1']) && !empty($_POST['Srh_2'])){
			$opt2=$_POST['Srh_2'];
			$strSrh = "WHERE name Like '%".$opt2."%'";
		}

		$sql="SELECT * FROM merchandise ".$strSrh." ORDER BY S_member, seqNo";
	}
	//查詢
	// $result=mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>金融經濟</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	
	<!--自訂CSS-->
	<link rel="stylesheet" type="text/css" href="css/finance.css">

</head>
<body>
	<header>
	<!--巡覽列-->
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<div class="container">
				<a class="navbar-brand" href="#">
				<img src="images_index/logo.png" style="width:40px;" />
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
					aria-expanded="false" aria-label="Toggle navigation">Menu
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item  active"><a class="nav-link" href="#">首頁</a></li>
						<li class="nav-item"><a class="nav-link" href="#">最新消息</a></li>
						<li class="nav-item"><a class="nav-link" href="#">時間線整理</a></li>
						<li class="nav-item"><a class="nav-link" href="#">大事件懶人包</a></li>
						<li class="nav-item"><a class="nav-link" href="#">認識更多角色</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!--banner圖-->
	<div class="container" id="banner"></div>
	<!--內容區塊 1-->
	<div class="container my-3" >
		<div class="row">
			<div class="col-lg-4" id="info">
				<ul class="pt-3">
					<li>專業翻譯陣容</li>
					<li>各式模型開箱</li>
					<li>重雷劇情解析</li>
				</ul>
			</div>
			<div class="col-lg-8">
			<?php
				$sql_1 = "SELECT DISTINCT `cld` FROM `category` WHERE `p_cid` = '0' ORDER BY `cld`;";
				// $list_1 = mysqli_query($conn, $sql_1);
			
				// $list_no = mysqli_num_rows($result);
				// echo "<br>筆數: ".$list_no."</br>";
				// echo "<hr />";
			?>

			<!---新增搜尋表單------->
			<form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
				<table border="0">
					<tr>
						<td>第一類別:<select name="Srh_1">
							<?php
								echo "<option value='' selected>請選擇</option>\n";
								while($result_1=mysqli_fetch_assoc($list_1)){
									$str_1 = $result_1['cId'];
									$str_2 = $str_1." ".$result_1['description'];
									echo "<option value=".$str_1." >".$str_2."</option>\n";
								}
							?>
						</td>
						<td>名稱:<input name="Srh_2"></td>
						<td>
							<input name="actSrh" type="submit" value="搜尋">
						</td>
					</tr>
				</table>
			</form>
			<!--------->
			</div>
		</div>
	</div>
	<!--內容區塊 2-->
	<div class="container">
		<div class="row">
		<!------------------------------------>
		<?php
			//如果查到的記錄筆數大於 0, 便使用迴圈顯示所有資料
			if (mysqli_num_rows($result) >0){
				while ($row = mysqli_fetch_array($result)) {
					echo '<div class="col-sm-6 col-lg-3 mb-3">';
						echo '<div class="card">';
								echo '<img class="card-img-top" src="images_index/'.$row['picture'].'" alt="Card image cap">';
								echo '<div class="card-body">';
									echo '<h5 class="card-title">'.$row['name'].'</h5>';
									echo '<p class="card-text">'.$row['description'].'</p>';
								echo '</div>';
						echo '</div>';
					echo '</div>';
				}
			}
		?>
		</div>
	</div>
	<footer class="text-center bg-dark text-white py-2">
			Copyright @ 2022-01-07 All Rights Reserved by CSIE-Tory
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>


