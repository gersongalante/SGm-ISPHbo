<? session_start(); 
  if (!isset($_SESSION["usser"] ))
{?> <script>location.href = "../index/index.php";</script><? }?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
        <?php  
          include('../_includes/head.php');
           $h  = new cHead();   $h  -> __print_Head();		       
		 ?>
        
        <script src="js.js"></script>
        <script src="../_User_Gestion/js_by_login.js"></script>
        
       <script>
	      $(document).ready(function (){
			 $( '#report_T_est' ).css('display', 'none');
			  __GET_COMBOXS_('curso',  'load', 'cDesc', '../g_Curso/php.php' );
			  _set_YearBox( 'ano' );
			  
			  __get_Traza_EST(  );
			  			  
			  $( '#curso' ).change(function(){  __get_Traza_EST(  ); });
			  $( '#op'    ).change(function(){  __get_Traza_EST(  ); });
			  $( '#ano'   ).change(function(){  __get_Traza_EST(  ); });
			   
			  
		  });
	   </script>
        
  </head>
  
<body>
<div id="art-main">

<header class="art-header clearfix">
    <!--banner------><? include("../_includes/banner.php"); $bn = new cBanner(); $bn -> __printBanner_(); ?>
    <!--ul----------><? include("../_includes/UL.php");     $ul = new cUL();     $ul -> __printUL('true'); ?>                     
</header>


<div class="art-sheet clearfix">
<div class="art-layout-wrapper clearfix">
<div class="art-content-layout">
<div class="art-content-layout-row"><!--menu---><? include("../_includes/menu.php"); $mn = new cMenu(); $mn -> __printMenu_(); ?>
<div class="art-layout-cell art-content clearfix">
                        
    <table width="100%">              
               <tr>               
                <td width="58%" align="center">
               
               <!--***************************************-->
               <!--***************************************-->
               <!--ACA SE CREA EL FORM SEGUN EL MENU Y ROL--> 
                   <br /><div align="right" style="margin-right: 2.6em;">
																		<b>Curso:</b><select id="curso"></select> <br />
					                                                    <hr size="1px" color="#CCC" width="35%" style="margin: 1.5px 0 0.5px 0" />
																	    <b>Operação:</b><select id="op">  
					                                                                       <option value="Insert">Inserção   </option>
					                                                                       <option value="upDate">Modificação</option>
					                                                                       <option value="Delete">Eliminação </option>
																						</select><br />
					                                                    <hr size="1px" color="#CCC" width="35%" style="margin: 1.5px 0 0.5px 0" />
																		<b>Ano:</b><select id="ano"></select>
					     </div>         
                   <div style="width: 99.5%;" >                                      
                    <!--bloque pag-->                      
                        <article class="box" > 
                          <h5><b>LISTA MANIPULAÇÃO ESTUDANTES</b></h5><br />
                                                  <table id="_list" class="display compact"><thead><tr>
														  <th>No.</th> 		     
														  <th>BI/Passaporte</th>   
														  <th style="width: 200px">Descrição</th>       
														  <th>Data</th>  			 
														  <th>Hora</th>  		 	 
														  <th>Operador</th>  	 	 
														  <th>Activo</th>  	 	 
														  </thead>
													      <tfoot><tr>
													      <th>No.</th> 		     
														  <th>BI/Passaporte</th>   
														  <th style="width: 200px">Descrição</th>       
														  <th>Data</th> 			 
														  <th>Hora</th> 		 	 
														  <th>Operador</th> 	 	 
														  <th>Activo</th> 	 	 
														  </tr></tfoot></table>
                        </article>
                    <!--end bloque pag--> 
                   </div>
                   <br /> 
                                      
                  
		</td>
	   </tr>
	  </table>                      
                
</div>
     
</div>
</div>
</div>
</div>

<footer class="art-footer clearfix">
  <!--footer--><? include("../_includes/footer.php"); $f = new cFooter(); $f -> __printFooter(); ?>
</footer>

</div>


</body></html>     


