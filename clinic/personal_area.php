<?php session_start(); 	$ID_User = isset($ID_User) ? $ID_User : $_SESSION['ID_User']; ?>
<!DOCTYPE>
<html lang="ru">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width"/>
		<title>HealthyTeeth</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/home.css" />
		<link rel="stylesheet" href="css/form1.css" />
		<link rel="stylesheet" href="css/callback.css" />
		<link rel="stylesheet" href="css/signin.css" />
		<link rel="stylesheet" href="css/personal_area.css" />
		<link rel="stylesheet" href="css/media.css" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css" />

		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
	<body>
	<header class="Header">
		<div class="container">
			<div class="HeaderWrapper">
				<a href="index.php">
					<div class="Logo">
					<div class="Logo-img"><img src="img/logo.jpg" height="50" width="48"></div>
					<div class="Logo-name">HealthyTeeth</div>
					</div>
				</a>
				<div class="Nav">
				<button class="menu_button"><i class="fa fa-bars" aria-hidden="true"></i></button>
					<ul>
						<li><a href="index.php">О нас</a></li>
						<li><a href="doctors.php">Врачи</a></li>
						<li><a href="reviews.php">Отзывы</a></li>
						<?php if(empty($_SESSION['ID_User'])) {?>
							<li><a href="registration.php">Регистрация</a></li>
						<?}?>
					<li>
				<?php 
					require_once('/login.php');
				?>
						</li>
					</ul>
				</div>
			</div>
		</div>
			<section class="Infotmation">
			<div class="container">
				<div class="HomeInfotmation-wrapper">
					<div class="HomeInfotmation-contacts">
						<div class="HomeInfotmation-contact">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<div class="phones">
								<span>+380992374526</span>
								<span>+380972372428</span>
							</div>
						</div>
						<div class="HomeInfotmation-contact">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<div class="email">
								<span>healthyteeeth@gmail.com</span>
							</div>
						</div>
					</div>
					<div class="HomeInfotmation-socials">
						<a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-tumblr-square" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			</section>
	</header>
	<section class="Personal_area">
		<h2><?php echo $_SESSION['name']; ?>, добро пожаловать в личный кабинет!</h2>
			<input class ="inp" type="date" name="date_v" id="data_v" placeholder="Дата приема"><br>
			<div class="Personal_information">
		      <div class="col last_visits">
		        <h3>Последние визиты</h3><hr>
		        <div class="description_second style">
					<?php 
						$dbConnector = new mysqli('localhost', 'root', '', 'HealthyTeeth');
						$sql = ("SELECT Last_visitation FROM Medical_Card WHERE ID_User = $ID_User;");
						$result =$dbConnector->query($sql);
						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						        echo " ". $row["Last_visitation"]." ";
						    }
						} else {
						    echo "К сожалению, нет данных о последних визитах. Обратитесь к администратору.";
						}
					?>
		    </div>
		      </div>
		      <div class="col condition_of_teeth">
		        <h3>Состояние зубов</h3><hr>
		        <div class="description_second style">
					<?php 
						$dbConnector = new mysqli('localhost', 'root', '', 'HealthyTeeth');
						$sql = ("SELECT State_of_Teeth FROM Medical_Card WHERE ID_User = $ID_User;");
						$result =$dbConnector->query($sql);
						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						        echo " ". $row["State_of_Teeth"]." ";
						    }
						} else {
						    echo "К сожалению, нет данных о состоянии зубов. Обратитесь к администратору.";
						}
					?>     
		    </div>
		      </div>
		      <div class="col recomendations">
		        <h3>Рекомендации</h3><hr>
		        <div class="description_second style">
					<?php 
						$dbConnector = new mysqli('localhost', 'root', '', 'HealthyTeeth');
						$sql = ("SELECT Recommendations FROM Medical_Card WHERE ID_User = $ID_User;");
						$result =$dbConnector->query($sql);
						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						        echo " ". $row["Recommendations"]." ";
						    }
						} else {
						    echo "К сожалению, нет рекомендаций. Обратитесь к администратору.";
						}
					?> 
		    </div>
		      </div>
		      <button class="logout"><a href="logout.php">Выйти</a></button>
		    </div>
	</section>
	<section class="Form_of_visitation">
		<div class="Form_of_visitation_title">
			<div>
				<h2>Запишитесь на прием прямо сейчас</h2>
				<p>Какой-то текст, описывает какая классная у нас клиника, много качественных услуг она предлагает, и еще много много всего</p>
			</div>
		</div>
<?php 
	require_once('/forma.php');
?>
	</section>
<?php 
	require_once('/callback.php');
?>
	<script src="js/common.js"></script>	
	</body>
</html>