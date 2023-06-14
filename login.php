<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon3.png">
    <title>PANDORA</title>

	<!-- ARQUIVO DE ESTILOS DO PORTAL -->
</head>

<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Popping', sans-serif;
}
header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 100px;
    /*background: red;*/ /*moldura superior*/
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 99;			
}
.logo {
    font-size: 2em;
    color: #162938;
    user-select: none;
}

.navigation a {
    position: relative;
    font-size: 1.1em;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    margin-left: 40px;
}
.navigation a::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 100%;
    height: 3px;
    background: #fff;
    border-radius: 5px;
    transform-origin: right;
    transform: scaleX(0);
    transition: transform .5s;

}


.wrapper{
    position: relative;
    width: 400px;
    height: 440px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .5);
    border-radius: 20px;
    backdrop-filter: blur(20px); /*efeito transparente embaçado*/
    box-shadow: 0 0 30px rgba(0, 0, 0, .5);
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    transition: transform .5s ease, height .2s ease;

}
.form-box h2{
    font-size: 2em;
    color: #162938;
    text-align: center;
}
.input-box{
    position: relative;
    width: 100%;
    height: 50px;
    border-bottom: 2px solid #162938;
    margin: 30px 0;

}
.input-box label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    font-size: 1em;
    color: #162938;
    font-weight: 500;
    pointer-events: none;
    transition: .5s;
}
.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    color: #162938;
    font-weight: 600;
    padding: 0 35px 0 5px;
}

.input-box input:focus~label,
.input-box input:valid~label {
    top: -5px;

}

.wrapper .form-box{
    width: 100%;
    padding: 40px;
}

.input-box .icon{
    position: absolute;
    right: 8px;
    font-size: 1.2em;
    color: #162938;
    line-height: 57px;
} 

.remember-forgot {
    font-size: .9em;
    color: #162938;
    font-weight: 500;
    margin: -15px 0 15px;
    display: flex;
    justify-content: space-between;	
}
.remember-forgot label input{/*OK*/
    accent-color: #162938;
    margin-right: 3px;
    
}
.remember-forgot a{/*OK*/
    text-decoration: none;
    color: #162938;
}
.remember-forgot a:hover{
    text-decoration: underline;
}
.login-register{
    font-size: .9em;
    color: #162938;
    text-align: center;
    font-weight: 500;
    margin: 25px 0 10px;
}
.login-register p a{
    color: #162938;
    text-decoration: none;
    font-weight: 600;
    cursor: pointer;
}
.login-register p a:hover{
    text-decoration: underline;
}
.btn{
    width: 100%;
    height: 45px;
    background: #162938;
    border: none;  
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1em;
    color: #fff;
    font-weight: 500;
    
}


.wrapper .form-box.login{
    transition: transform .18s ease;
    transform: translateX(0);
}
.wrapper .form-box.register{
    position: absolute;
    transition: none;
     transform: translateX(400px);
}
.wrapper .form-box{
    width: 100%;
    padding: 40px;
}
.wrapper.active{
    height: 520px;
}

.wrapper.active .form-box.login{
    transition: none;
    transform: translateX(-400px);
}
.wrapper.active-popup{
    transform: scale(1);
}

.wrapper.active{
   height: 520px;
}
.wrapper.active .form-box.register{
    transition: transform .18s ease;
    transform: translateX(0);
}
.navigation .btnLogin-popup:hover{
    background: #162938;
    color: #fff;
    
}
body{
    display: flex;
    justify-content: center;
    min-height: 100vh; /*enquadra 100% a imagem na pagina toda*/
    align-items: center;
    background: url(images/home-slide5.jpg) no-repeat;
    background-size: cover;
    background-position: center;
}
</style>

<body>
	<header>
		<h2 class="logo">PANDORA</h2>
	</header>


	<!--formulário de login-->

	<div class="wrapper">
		<div class="form-box login">
			<h2>Login</h2>
			
			<form id="form_login" name="form_login" class="form_login" method="post" action="valida_login.php">
			
				<div class="input-box">
				<span class="icon"><ion-icon name="person"></ion-icon></span>
						<input type="text" id="nome_login" name="nome_login" required autofocus>
						<label>Nome</label>
				</div>

				<div class="input-box">
					<span class="icon">
						<ion-icon name="lock-closed"></ion-icon>
					</span>
					<input type="password" id="senha_login" name="senha_login" required>
					<label>Senha</label>
				</div>
		
				<button type="submit" class="btn" href="#" id="home.php">Login</button>

					</p>
				</div>
			</form>
		</div>
			<!--fim-->


			
			</form>

		</div>

		<!--fim-->

	</div>

	<script src="script.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


		
</body>

</html>

