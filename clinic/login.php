<?php session_start();
if($_SESSION['ID_User']==1)
{
?><a href="page_for_admin.php"><i class="fa fa-user" aria-hidden="true"></i></a><?
} 

elseif($_SESSION['ID_User'])
{
?><a href="personal_area.php"><i class="fa fa-user" aria-hidden="true"></i></a><?
} 

elseif (!$_SESSION['ID_User']) {
	?><a onclick="show('block')"><i class="fa fa-user" aria-hidden="true"></i></a>
		<div onclick="show('none')" id="wrap"></div>
			<div id="window">
				<img class="close" onclick="show('none')" src="img/close.png" height="30" width="30">
					<form method="POST" action="login2.php" id="backSignIn" name="backSignIn">
						<div class="signin_main">
							<input name="email" type="Email" id="EmailForm" placeholder="Введите e-mail" required="required" />
							<input name="phone" type="password" id="telForm" placeholder="Введите пароль" required="required" />
						</div>
							<input id="telButton" type="submit" form="backSignIn" value="Войти"></input>
					</form>	

			</div>
		<script type="text/javascript">
			function show(state){
			document.getElementById('window').style.display = state;			
			document.getElementById('wrap').style.display = state; 			
			}
</script><?
}
?>

