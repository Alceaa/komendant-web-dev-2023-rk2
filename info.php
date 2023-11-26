<?php
    include "db.php";
    $books = mysqli_query($mysql, "SELECT * FROM `books`");
    $users = mysqli_query($mysql,"SELECT * FROM `users`");
?>
<!doctype html>
<html lang="ru">
    <header>
    <title>Рубежный контроль 2 Комендант 221-362</title>
	    <div class="header">
            <div class="header-item" id="ico">
				<img src="static/ico/ico.png"></img>
			</div>
			<div class="header-item" id="title-item">
				<div class="nav-title"><h1>Заказать книги онлайн</h1></div>
			</div>
			<div class="header-item" id="nav-item">
				<div class="nav">
					<ul class="nav-ul">
                        <li>
							<form method="post" action="shop.php">
								<input class="nav-button" id="selected-input" type="submit" value="Выбрать и заказать">
							</form>
						</li>
						<li>
							<form method="post" action="index.html">
								<input class="nav-button" type="submit" value="О магазине">
							</form>
						</li>
						<li>
							<form method="post" action="feedback.php">
								<input class="nav-button" type="submit" value="Обратная связь">
							</form>
						</li>
					</ul>
				</div>
			</div>
            <div class="header-item" id="lk">
                <div class="lk-fio">
                    <div class="lk-ico">
                        <img src="static/ico/user.png"></img>
                    </div>
                    <div class="lk-ico-text">
                        <a>asdf</a>
                    </div>
                </div>
                <div class="lk-ico"><div>
                <div class="lk-goods">
                    <div class="lk-ico">
                        <img src="static/ico/basket.png"></img>
                    </div>
                    <div class="lk-ico-text">
                        <a> Выбрано товаров: </a>
                    </div>
                </div>
            </div>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<link rel="stylesheet" href="static/css/styles.css"/>
            <link rel="stylesheet" href="static/css/info.css"/>
			<link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
		</div>
	</header>
	<body>
        <?php    
            $id = $_GET['id'];
            $book = mysqli_query($mysql,"SELECT * FROM `books` WHERE id =".$id)->fetch_assoc();
            $descr = mysqli_query($mysql,"SELECT * FROM `descriptions` WHERE id =".$id)->fetch_assoc();

        ?>
        <h1><?php echo $book["author"] . ' ' . $book["name"] ?></h1>
        <div class="image">
            <img
                src="static/ico/<?php echo $book['ico'];?>.png"
                alt="<?php echo $book['author'];?> <?php echo $book['name'];?>"
            />
        </div>
        <div class="description">
            <a><?php echo $descr["description"]; ?></a>
        </div>
        <div class="count">
            <a>Осталось на складе: <?php echo $book["count"]?></a>
        </div>
	</body>
	<footer>
	    <div class="footer-container">
		    <div class="footer-item">
			    <ul class="nav-ul">
						<li>
							<form method="post" action="feedback.php">
								<input class="nav-button" type="submit" value="Обратная связь">
							</form>
						</li>
					</ul>		
			</div>
			<div class="footer-item">
			    <h3>Контакты</h3>
			    <ul class="footer-ul">
				    <li><a href="">maks.komendant@yandex.ru</a></li>
					<li><a>+79259257991</a>	</li>
				</ul>
			</div>
            <div class="footer-item">
			    <a>©Komendant-shop 2023</a>
			</div>
		</div>
	</footer>
</html>