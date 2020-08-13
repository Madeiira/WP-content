<?php 
/*

	Plugin Name: Hello World Business.
	Author: Gabriel Madeira.
	Description: Meu primeiro plugin de output.
	Version:0.00001
	Author URI: https://github.com/Madeiira

*/
function wp_printando_olamundo(){
echo "<script> alert('Olá mundo');</script>";
}
add_action('login_head','wp_printando_olamundo');
//add_action('quando/','qualfunction'); 


function wp_alterando_otexto_admin(){
echo"Mudado por Gabriel Madeira";

}

//action ações em cima de eventos

//filters
//add_filter('aonde','funcao');

add_filter('admin_footer_text','wp_alterando_otexto_admin');


function wp_imagem_prop_admin(){
echo"<styele> 


#ads-prop{
background-color:blue;
width:100px;
height:50px;
color;blue	
}


</style>
";
echo"teste";

}
add_filter('the_content','wp_imagem_prop_admin');



?>
