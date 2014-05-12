
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

?>