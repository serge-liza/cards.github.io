<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf8"><!--кодировка текста-->
          <title>Cards</title> 
          <link rel="stylesheet" href="/style.css">
    </head>
    
    <body>
    <?php include("header.php"); ?>
            <div class="widget"> 
                  <ul class="widget-list">
            <?php foreach($tests as $t) : ?> 
                    <li><a href="test.php?id=<?=$t['id']?>">
                            <?=$t['name']?></a></li>
                    <?php endforeach ?>
                  </ul>
                </div>

            <div>
        <div class="footer">
            <footer>
                Copyright &copy; 2016
            </footer>
        </div>
        
    </body>
</html>