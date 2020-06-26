<!DOCTYPE html>
<html>
<head>
	<title>Формулы</title>
	<meta http-equiv="content-type" content="text/html"; charset='utf-8'>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="icon" href="storon/favicon.ico" type="image/x-icon" />
	<style>
::-webkit-scrollbar-button { 
background-image:url(''); 
background-repeat:no-repeat; 
width:6px; 
height:0px 
} 
 
::-webkit-scrollbar-track { 
background-color:#32312e; 
box-shadow:0px 0px 3px #000 inset; 
} 
 
::-webkit-scrollbar-thumb { 
-webkit-border-radius: 5px; 
border-radius: 5px; 
background-color:#EEDF95; 
box-shadow:0px 1px 1px #fff inset;  
background-position:center; 
background-repeat:no-repeat; 
} 
 
::-webkit-resizer{ 
background-image:url(''); 
background-repeat:no-repeat; 
width:7px; 
height:0px 
} 
 
::-webkit-scrollbar{ 
width: 12px;
}
</style>
</head>
<body background="Backgrounds/3.jpg">
<div class="body">	
	<div class="Zag_Mat" id="0">
		    <img src="storon/Logotip2.png" class="logotip1"/>
            <a href="sohran.html"><img src="storon/sait.png" class="sat"/></a>
        
        
        
		<p>Формулы</p>
		<div class="knopka"><ul><li><a href="index.html">Главная</a></li></ul></div>
	</div>

	<div class="materia">
		<div class="strela"><a href="#0"><img class="strela" src="storon/strela.png"/></a></div>
		
		<h1 align="center">Авторизация</h1>
		
		<content>
          <br><br><br>
           <div align="center">
           
           
<?php
require "db.php";
$data = $_POST;
if( isset($data['do_login']) )
{
    $errors = array();
    $user = R::findOne('user', 'login = ?', array($data['login']));
    if( $user )
    {
        //Логин существует
        if( password_verify($data['password'], $user->password))
        {
            //Логиним
            $_SESSION['logged_user'] = $user;
            echo '<div style="color: green;">Вы авторизованы!<br/>Можете перейти на <a href="index.html">Главную</a> страницу</div>';
        } else
        {
            $errors[] = 'Неверно введён пароль!';
        }
    } else
        {
            $errors[] = 'Пользователь с таким логином не найдено!';
        }
      if( ! empty($errors) )
               
                {
                    echo '<div style="color: red;">'.array_shift($errors).'</div>';
                }
}
?>


<form action="login.php" method="POST">
     <p>
            <p><strong>Введите ваш логин</strong>:</p>
		        <input type="text" name="login" value="<?php echo @$data['login']; ?>">
		    </p>
		     <p>
                <p><strong>Введите пароль</strong>:</p>
		        <input type="password" name="password" value="<?php echo @$data['password']; ?>">
		    </p>
		    <p>
		        <button type="submit" name="do_login" class="whod">Войти</button>
		    </p>
</form>
	        
	        
	        </div>	
		</content>
		
    </div>
    </div>
</body>
</html>