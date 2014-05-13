
<?php

function ParcourirLesImagesDuReperoire($rep){ 
    $Myrep = opendir($rep) or die('Erreur : répertoire non trouvé : '.$rep);
   
    while($Entry = @readdir($Myrep)) {
       if(!(is_dir($rep.'/'.$Entry)&& $Entry != '.' && $Entry != '..')) {
            $extension=strtolower(strrchr($Entry,'.'));
            if (in_array ($extension, array ('.gif','.jpg','.jpeg','.png'))){
			 echo '<div class="slide">';
              echo '<img src="./photo/'.$Entry.'"/>';
				echo '</div>';
            }
        }
		
    }
    closedir($Myrep); 
}


function authenticate(){
  if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic Une authentification reSel sera nécessaire pour se connecter"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Authentication error please reload the page';
    exit;
  } else {
    echo "<p>Bonjour, {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>Votre mot de passe est {$_SERVER['PHP_AUTH_PW']}.</p>";
  }

}
?>