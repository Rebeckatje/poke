<HTML>
<HEAD>
<TITLE>POKEBUTTS</TITLE>

<link rel="stylesheet" href="style.css" type="text/css">

</HEAD>
<BODY>
    
<form method="post">
<section class="head">
<section class="orange">Enter your favourite Pokemon!</h1><br/><br/>
  
  
  <input type="text" name="tbInput" value="pikachu"> 
  <input type="submit" name="btInput" value="Search">


</section>
</section>

<section class="banner">
<section class="yellow">

<img src="">

</section>
</section>

<section class="middle">
<section class="green">
</form>
<section class="resultPokemon">
          <?php

$base ="http://pokeapi.co/api/v2/pokemon/";
$image = "";
            if (isset($_POST ['btInput']))
            {
              $name = $_POST['tbInput'];
                $name = strtolower($name);
                $data = file_get_contents($base.$name.'/');
                $pokemon = json_decode($data);
                
                
                echo ("<img src='".$pokemon->sprites->front_default."'></img><br>");
                echo ("Pokemon: ".$pokemon->name."<br>");
                echo ("How fat is "."".$pokemon->name."?: ".$pokemon->weight."<br>");

            }else{
          ?>
              <style type="text/css">
                .resultPokemon{
                  display:none;
                }
              </style>
          <?php
            }
          ?>
        </section>
  
</section>
</section>


<section class="footer">

<section class="lightblue">...</section>
<section class="pink">...</section>
<section class="blue"></section>

</section>


</BODY>
</HTML>