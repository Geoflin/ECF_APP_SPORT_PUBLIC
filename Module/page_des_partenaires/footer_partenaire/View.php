   <!--Style du footer_partenaire -->
   <link href="../../Module/page_des_partenaires/footer_partenaire/style.css" rel="stylesheet" />

   <!--View footer_partenaire-->
   <section class="footer_partenaire">
       <!-- Form  modifierseance-->
       <form class="barre_de_defilement" method="post" action="">
           <!--BARRE_DE_PAGE-->
           <div class="btn-group">
               <button name="plus" type="submit" class="flex_start" id="small_width" value="<?php echo $plus-'5' ?>">
                   <<< </button>
                       <button name="plus" type="submit" id="small_width" value="<?php echo $plus-'1' ?>">
                           < </button>
                               <div><?php echo $plus."/".$nb_ID ?></div>
                               <button name="plus" type="submit" id="small_width"
                                   value="<?php echo '1'+$plus ?>">></button>
                               <button name="plus" type="submit" id="small_width"
                                   value="<?php echo '5'+$plus ?>">>></button>
           </div>
       </form>

       <div class=" btn-group">
           <form class="btn-group barre_de_defilement" method="post" action="">
               <div class="flex_end">Aller a la page: <input name="aller_a_la_page"
                       type="number"><?php echo "/".$nb_ID ?></input>
               </div>
           </form>
       </div>

   </section>