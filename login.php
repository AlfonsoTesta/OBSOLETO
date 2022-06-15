<link rel="stylesheet" href="login.css">
<script src="login.js"></script>
<div id="bg_b">
        <div id="loginH">
            <div class="close" onclick="closeLog('bg_b')">+</div>
            <img src="imagenes/logo/logo.png" class="logo">
            <form action="">
                <input type="text" class="text Nam" value="AAA@gmail.com" id="nombre" placeholder="Name/Email">
                <a href="" id="recu">Forgot password?</a>
                
                <input type="password"  value="AAA" class="text Pswd" id="pswd" placeholder="Password">
                
                <input type="button" value="SUBMIT" onclick="login()"  class="botones" > 
            </form>
            
            
        </div>
        <div id="registerH">
            <div class="close" onclick="closeLog('bg_b')">+</div>
            <img src="imagenes/logo/logo.png" class="logo">
            <form action="">
                <input type="text" class="text Nam" value="AAA" id="nombre" placeholder="Full Name">
                <input type="email"id='mail' name="Email" value="AAA@gmail.com" class="text em" placeholder="Email">
                <input type="date" id='cumple' name="Birthday" value="AAA" class="text date">
                <input type="password" class="text regp" id="contra" value="AAA" placeholder="Password">
                <input type="password" class="text regp" id="confi" value="AAA" placeholder="Confirm Password">

                <input type="button" value="SUBMIT" onclick="register()"  class="botones" > 
            </form>
        </div>
        <div class="signUp" id="log"><p>You don't have an account? Register <a onclick="replaceLog('loginH' ,'registerH');changer('log','reg');">HERE</a></p></div>
        <div class="signUp" id="reg"><p>You alredy have an account? Login <a onclick="replaceLog('registerH' ,'loginH');changer('reg','log');">HERE</a></p></div>
    </div>