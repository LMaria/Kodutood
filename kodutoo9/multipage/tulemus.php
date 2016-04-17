<?php require_once('head.html'); ?>
   <h3>Valiku tulemus</h3>
   <p>
      <?php 
         if(!empty($_GET)){
            echo nl2br("Lemmik valitud, tänan! \nValisid pildi nr ".$_GET["pilt"]);
         }else{
          echo "Vali pilt!";
         }
      ?>
   </p>
<?php require_once('foot.html');?>