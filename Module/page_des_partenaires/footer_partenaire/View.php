   <!--Style du footer_partenaire -->
   <link href="../../Module/page_des_partenaires/footer_partenaire/style.css" rel="stylesheet" />


<!--View footer_partenaire-->
<section class="footer_partenaire">

<!--
<div class="btn-group">
  <button>Previous</button>
  <button>1</button>
  <button>2</button>
  <button>3</button>
  <button>Next</button>
</div>
  -->
<!-- Form  modifierseance-->
<form class="barre_de_defilement" method="post" action="">
  
  <!--BARRE_DE_PAGE-->
  <div><?php echo $super_plus ?></div>
  <span>page: 
  <button name="plus" type="submit" id="small_width" value="<?php echo $plus-'5' ?>"><<</button>
  <button name="plus" type="submit" id="small_width" value="<?php echo $plus-'1' ?>"><</button>
  <?php echo $plus."/".$nb_ID ?>
  <button name="plus" type="submit" id="small_width" value="<?php echo '1'+$plus ?>">></button>
  <button name="plus" type="submit" id="small_width" value="<?php echo '5'+$plus ?>">>></button>
  </span>
  <span>Aller a la page: <input name="plus2" type="number"><?php echo "/".$nb_ID ?></input></span>
  </div>

</section>
</form>




