<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verif.php" method="POST">
                
                <label><b>Username</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
            <div class="rectangle1"></div>
            <h1 class="title1">Join us</h1>
            <h1 class="title2">learn more</h1>
            <p1 class="text1">If you make an account you can get a new experience with  private lessons
            in relation to the domain you want</p1>
            <img src="image/2robot.png" alt="" class="img1">
        </div>
    </body>
</html>