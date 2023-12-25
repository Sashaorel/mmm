<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title> Веб технології</title>
</head>
<body>
    
    <header class="header">
        <div class="All_header_menu">
            <div class="logo">
                <h1><a href="#">Cher17</a></h1>
            </div>
            <div class="Top_menu">
                <ul>
                    <li><a href="#">Категорії</a></li>
                    <li><font size="4"><a href="#">Кошик</a></font></li>
                    <li><font size="4"><a href="#">Акаунт</a></font></li>
                </ul>
                <?php
                    include '/s-main/second.php';
                ?>
            </div>
        </div>
    </header>
    
    <main class="content">
        <div style="display: flex;">
            <div style="flex-grow: 1;">
                <img src="https://cher17.com/wp-content/uploads/2023/01/history-cher17-6.jpg" width="400" height="600">
            </div>
            <div style="flex-grow: 3;">
                
            </div>
            <div style="flex-grow: 1;">
                <div id="video">
                    <img src="https://cher17.com/wp-content/uploads/2023/01/img_1717.jpg" width="300" height="500">
                    <a href="https://youtu.be/cj4u2IUnuS0?si=S9R_bDaib5TMxv5b"><font size="5">Переглянути відео</font></a>
                </div>
            </div>
        </div>
    </main>
    
    <div>
        <footer class="footer">
            <ul>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">facebook</a></li>
                <li><a href="#">Twitter</a></li>
            </ul>
        </footer>
    </div>
    
    <script src="js/web5.js"> </script>
</body>
</html>