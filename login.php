<link rel="stylesheet" href="login.css">
<script src="login.js"></script>
<div id="bg_b">
        <div id="loginH">
            <div class="close" onclick="closeLog('bg_b')">+</div>
            <img src="IMG/LOGO/logo.jpg" class="logo">
            <form action="">
                <input type="text" class="text Nam" value="AAA@gmail.com" id="nombre" placeholder="Name/Email">
                <p id="recu" onclick="restorePassword('log','loginH','recuperar')">Forgot password?</p>
                
                <input type="password"  value="AAA" class="text Pswd" id="pswd" placeholder="Password">
                
                <input type="button" value="SUBMIT" onclick="login()"  class="botones" > 
            </form>
            
            
        </div>
        <div id="registerH">
            <div class="close" onclick="closeLog('bg_b')">+</div>
            <img src="IMG/LOGO/logo.jpg" class="logo">
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
        <div id="recuperar">
            <p>Ingrese Su Email</p>
            <input type="email" name="Email" id="recuperaremail" class='text reem'>   
            <input type="button" value="SUBMIT"  onclick='checkEmail()' class='botones'>     
            <div class="close recuc" onclick="closeLog('bg_b');restoreback()">+</div>
        </div>
    </div>