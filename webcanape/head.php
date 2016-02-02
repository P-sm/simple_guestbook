<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>
         <?= $title?>
      </title>
	  <script type="text/javascript" src="jquery_lib.js"></script>
	  <script type="text/javascript" src="script.js">
</script>
   </head>
   <body onload='$("#list_div").load("list.php?page=1")'>
      <header>
            <h1>
			<?= $title?>
            </h1>
      </header>
	  <main>