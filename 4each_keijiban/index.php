<!DOCTYPE html>
<html lang="ja">
   
<head>
    <meta charset="UTF-8">
    <title>4each_keijiban</title> 
    <link rel="stylesheet"type="text/css"href="style.css">
    


</head>

   
<body> 

   <?php
    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=namae;host=localhost;","root","mysql");
    $stmt=$pdo->query("select*from 4each_keijiban");

    ?>
    
   
    <header>
        <div class="logo">
            <img src="logo.jpg">
        </div>
        
        <div class="menu">
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </div>
    </header>
    
    <main>
        <div class="main-container">
            <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>
                
                
            <div class="keijiban">
               
                   <h2>入力フォーム</h2>
                    <br>
            
                  
            <form method="post" action="insert.php">

                   
                <div class="nyuuryoku">
                   <div>
                       <label>ハンドルネーム</label>
                        <br>
                        <input type="text" name="name">
                   </div>
       
                   <div>
                       <label>タイトル</label>
                        <br>
                        <input type="text" name="title">
                   </div>
       
                   <div>
                       <label>コメント</label>
                        <br>
                        <textarea name="comments" rows="10" cols="60"></textarea>
                   </div>
           
                   <div>
                       <input type="submit" class="sousin" value="送信する">
                   </div>
                 </div>
                 
            </form>
                </div>
            
                    
                <?php
                
                while($row=$stmt->fetch()){
                    
                echo"<div class='kiji'>";
                    
                echo"<h2>".$row['title']."</h2>";
        
                echo"<p>".$row['comments']."<p>";
        
                echo"<p>".$row['name']."<p>";
                    
                echo"</div>";
                }
                ?>
                    
                    
                 </div>
                 
        </div>
    </main>
                
   
                    
            
           
            <div class="right">
                <h2>人気の記事</h2>
                <p>PHP オススメ本</p>
                <p>PHP MyAdminの使い方</p>
                <p>今人気のエディタ Top5</p>
                <p>HTMLの基礎</p>
                
                <h2>オススメリンク</h2>
                <p>インターノウス株式会社</p>
                <p>XAMPPのダウンロード</p>
                <p>Eclipseのダウンロード</p>
                <p>Bracketsのダウンロード</p>
                
                <h2>カテゴリ</h2>
                <p>HTML</p>
                <p>PHP</p>
                <p>MySQL</p>
                <p>JavaScript</p>
            </div>
    
    
    <footer>
        copyright © internous | 4each blog is the one which provides A to Z about programming.
    </footer>
   
  
 
</body>