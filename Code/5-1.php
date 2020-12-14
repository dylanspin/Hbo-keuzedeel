<?php
     $DeurOpen = false;
     $Tijd = 9;
     $Pauze = 10;
     $HetIsPauze = true;
     $NaarDeWC = true;
     $KoffieHalen = FALSE;

     if (!$DeurOpen){
        echo("Ik doe de deur open.");
        $DeurOpen = true;
     }
     if($Tijd <= $Pauze){
        echo("Ik moet nog " . ($Pauze - $Tijd) . " uur wachten.");
        $Tijd = $Pauze;
     }

     if ( $DeurOpen
     &&
     ($Tijd >= $Pauze)
     &&
     ($HetIsPauze || $NaarDeWC || $KoffieHalen))
     {
        echo("Ik loop door de deur naar buiten.");
     }
     else{
        echo("De deur is dicht.");
     }
?>
