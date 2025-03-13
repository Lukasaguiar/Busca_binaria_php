<?php
	
	//lista
	$lista=[];
	$lista=range(1,100);
	
	//mostrando lista
	print"Lista que Estamos usando \n";
	print_r($lista);
	
	//parmetros iniciais
	
	$inicioLista=0;
	
	$fimLista=count ($lista)-1;
	
	
	
	//Valor que irei procurar nas listas
	$valorQueQuero=33;
	
	print"vamos procurar o valor $valorQueQuero \n";
	
	//metodo sequencial/ busca simples 
	print"\n\nMetodo sequencial \n";
	foreach ($lista as $indice => $valorAtual){
	
	   print"$indice ->$valorAtual \n ";
	   
	  if($valorAtual == $valorQueQuero){
	    
	     
	     print"Achou Valor no indice $indice \n";
	     break;
	  }
	 
	}
	
	
	
	//busca binaria
 
	  
	  //tamanho total da lista atual
	     $tamanhoLista=($inicioLista+$fimLista)+1;
	     
		print"\n\n Busca Binaria \n";
	   print"\n tamanho atual da lista $tamanhoLista";
	 
	   while($inicioLista <= $fimLista){
	     print"\n\n";
 	     
	     //varaveis iniciais
	     print"\n inicio $inicioLista";
	     print"\n fim $fimLista";
	     
	     
	     // achar meio da lista atual 
        //round arredonda para cima 
	        
	     $meioLista= round(($inicioLista+$fimLista)/2);
	     print"\n meio da lista : $meioLista";
	     
	     
	     //pegar valor do indice do meio da lista
	     
	     $valorAtualLista=$lista[$meioLista];
	     print"\n valor Meio $valorAtualLista";
	     

	     if($valorAtualLista < $valorQueQuero ){
	       
	    
	        $inicioLista=$meioLista +1;
	       
	       
	     }else if ($valorAtualLista > $valorQueQuero){
	           $fimLista=$meioLista -1;
	       
	     } else if($valorAtualLista == $valorQueQuero){
	       
	        
	        
	        print"\n achou valor  $lista[$meioLista]";
	        break;
	       
	     }else{
	       print"\n erro";
	       break;
	     }
	     

	   }
	
	
	
	
	
?>
