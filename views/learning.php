<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf8"><!--кодировка текста-->
          <title>Cards</title> 
          <link rel="stylesheet" href="/style.css">
    </head>
    
    <body>
           <?php include("header.php"); ?>
        </div>
            <div>
                <?php foreach($cards as $c) : ?> <!--цикл для каждой статьи-->
                <div class="card">
                    <h3>
                        <a href="card.php?id=<?=$c['id']?>">
                            <?=$c['eng']?></a>
                    </h3>
                    <input type="button" onclick="card.php?id=<?=$c['id']?>">
                            <?=$c['rus']?>>
                </div>
                    <?php endforeach ?>
            </div>
        <div class="footer">     
            <footer>
                Copyright &copy; 2016
            </footer>
        </div>
        
    </body>
</html>