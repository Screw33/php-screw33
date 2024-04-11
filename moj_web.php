<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php 
            include_once("nav.php");
        ?>
    </header>
    <?php
    $text="TEXT "; //koment
    $cislo1=45;
    $cislo2=35;
    $pole=["Ado","Maty","Stavka"];
           echo ("ECHO ".$text.$cislo1+$cislo2);
           echo ("<h1>Môj prvý nadpis</h1>");
           echo ("<p>Môj prvý odstavec</p>"); //komentar dalsi
            echo($pole[1]);
            print_r($pole);

            $simpsonovci =["Marge"=>"modre vlasy","Homer"=>"ma rad pivo"];
            echo $simpsonovci["Marge"];
            echo "<br>";
            echo $simpsonovci["Homer"];
            echo "<br>";
        
        ?>
        <?php function text($nazov){
            echo $nazov." moj text asi";
        }
        text("moj text"); 
        ?>
        
        <?php 
        function prihlasenie($user){
            echo "uspesne ste sa prihlasili ". $user;
        }
        prihlasenie("roman ");
        ?>
        <form action ="#" method="post">
            <input type="text" name="meno" placeholder="zadaj meno">
            <input type="password" name="heslo" placeholder="zadaj heslo">
            <input type="submit" name="submit" placeholder="odoslat">
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $minimum=3;
    $maximum=10;
    $name=["Peter","Jano","Fero","Juraj"];
    $username=$_POST["meno"];
    $password=$_POST["heslo"];
    echo "Ahoj ". $username."<br>"."tvoje heslo je ".$password;
    if(strlen($password)<$minimum){
        echo " Heslo je moc kratke";
    }
   if(strlen($password)>$maximum){
        echo " Heslo je moc dlhe";
    }
    if(in_array($username, $name)){
        echo " Úspešne si sa prihlásil<br>";
    }else{
        echo" Nesprávne meno<br>";
    }

}
?>