<?php
$font_color = 'blue';
if (isset($_POST['font_color']) && $_POST['font_color'] != "") {
    $font_color = htmlspecialchars($_POST['font_color']);
}
$font_style = 'normal';
if (isset($_POST['font_style']) && $_POST['font_style'] != "") {
    $font_style = htmlspecialchars($_POST['font_style']);
}
$font_size= '12';
if (isset($_POST['font_size']) && $_POST['font_size'] != "") {
    $font_size = htmlspecialchars($_POST['font_size']);
}
$background_color = 'white';
if (isset($_POST['background_color']) && $_POST['background_color'] != "") {
    $background_color = htmlspecialchars($_POST['background_color']);
}
$border_width= '1';
if (isset($_POST['border_width']) && $_POST['border_width'] != "") {
    $border_width = htmlspecialchars($_POST['border_width']);
}

$border_color = 'blue';
if (isset($_POST['border_color']) && $_POST['border_color'] != "") {
    $border_color = htmlspecialchars($_POST['border_color']);
}
$tekst = 'tekst';
if (isset($_POST['tekst']) && $_POST['tekst'] != "") {
    $tekst = htmlspecialchars($_POST['tekst']);
}

?> 
<!doctype html>
<html>
   <head>
      <title>Vali stiil</title>
      <meta charset="utf-8">
      <style type="text/css">
       #tulemus {
           color: <?php echo $font_color; ?>; 
           font-style: <?php echo $font_style; ?>; 
           font-size: <?php echo $font_size; ?>px; 
           background: <?php echo $background_color; ?>; 
           border-style: solid;
           border-width: <?php echo $border_width; ?>px;
           border-color: <?php echo $border_color; ?>;
      }
      </style>

   </head> 
  
   <body>
    
      <form action="muuda2.php" method="POST">
         Tekst: <br>
         <textarea rows="6" cols="50" name="tekst" placeholder="Sisesta tekst siia"><?php if(!empty($_POST["tekst"])) 
         echo htmlspecialchars($_POST["tekst"]);?></textarea>
         <br>
         Teksti värv: <br>
         <input type="color" name="font_color" <?php if(!empty($_POST["font_color"])) 
         echo "value=\"".htmlspecialchars($_POST["font_color"])."\" ";?>><br>
         Fondi stiil:<br>
         <select name="font_style">
            <option value="normal" <?php if(!empty($_POST["font_style"])&& $_POST["font_style"]=="normal")echo "selected";?>>Tavaline</option>
            <option value="italic" <?php if(!empty($_POST["font_style"])&& $_POST["font_style"]=="italic")echo "selected";?>>Italic</option>
         </select>
         <br>
         Fondi suurus:<br>
         <select name="font_size">
            <option value="10" <?php if(!empty($_POST["font_size"])&& $_POST["font_size"]=="10")echo "selected";?>>10</option>
            <option value="12" <?php if(!empty($_POST["font_size"])&& $_POST["font_size"]=="12")echo "selected";?>>12</option>
            <option value="14" <?php if(!empty($_POST["font_size"])&& $_POST["font_size"]=="14")echo "selected";?>>14</option>
            <option value="16" <?php if(!empty($_POST["font_size"])&& $_POST["font_size"]=="16")echo "selected";?>>16</option>
         </select>
         <br>
         Taustvärv:<br>
         <input type="color" name="background_color" <?php if(!empty($_POST["background_color"])) 
         echo "value=\"".htmlspecialchars($_POST["background_color"])."\" ";?>><br>
         Piirjoone paksus: <br>
         <input type="number" name="border_width" min="0" max="10" <?php if(!empty($_POST["border_width"])) 
         echo "value=\"".htmlspecialchars($_POST["border_width"])."\" ";?>><br>
         Piirjoone värv: <br>
         <input type="color" name="border_color" <?php if(!empty($_POST["border_color"])) 
         echo "value=\"".htmlspecialchars($_POST["border_color"])."\" ";?>><br><br>
         <input type="submit" value="Valmis">
      </form>
     <p id="tulemus"><?php echo $tekst; ?></p>
    </body>
</html>