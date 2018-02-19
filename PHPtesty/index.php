<?php


$czaswykres = array(["logi_ostatnie","ostatnie dane"],["wykres_1h","ostatnia 1 h"],["wykres_24h","ostatnie 24 h"],["wykres_7dni","ostatnie 7 dni"],["wykres_30dni","ostatnie 30 dni"]);

if (isset($_POST['wykres_wybierz']))
{
$_SESSION['fr_czaswykres']=$_POST['czaswykres'];
}

function listawyboru($tab, $zmsesyjna)
{
    foreach ($tab as list($a, $b)){
        if ($zmsesyjna==$a){ 
        $selected="selected";
        }else {
        $selected="";
        }
     $wiersze[]= '<option value="'.$a.'"'.$selected.'>  '.$b.'</option>';
    }
    $odpselect=implode("",$wiersze);
return $odpselect;
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Testowe dane</title>
</head>
<body>
    
Dane: <select name="czaswykres" required>
                            <option value="logi_ostatnie">ostatnie dane</option>
                            <option value="wykres_1h">ostatnia 1 h</option>
                            <option value="wykres_24h">ostatnie 24 h</option>
                            <option value="wykres_7dni" selected>ostatnie 7 dni</option>
                            <option value="wykres_30dni">ostatnie 30 dni</option>
        </select></br></br>
 
 <FORM function="" method="POST">
Dane: <select name="czaswykres" required>
<?php
   echo listawyboru($czaswykres,$_SESSION['fr_czaswykres']);
   unset ($_SESSION['fr_czaswykres']);     
?>
</select></br></br>
<INPUT type="submit" name="wykres_wybierz" value="Generuj wykres"></FORM>

</body>
</html>