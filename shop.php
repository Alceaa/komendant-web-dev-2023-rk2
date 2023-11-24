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
							<form method="post" action="feedback.html">
								<input class="nav-button" type="submit" value="Обратная связь">
							</form>
						</li>
                        <li>
							<form method="post" action="response.html">
								<input class="nav-button" type="submit" value="Отзывы">
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
            <link rel="stylesheet" href="static/css/shop.css"/>
			<link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
		</div>
	</header>
	<body>
    <div class="cards">
        <?php
            while ($book = mysqli_fetch_array($books)){
        ?>
        <div class="card">
            <div class="card_top">
                <a href="#" class="card_image">
                <img
                    src="static/ico/<?php echo $book['ico'];?>.png"
                    alt="<?php echo $book['author'];?> <?php echo $book['name'];?>"
                />
                </a>
            </div>
            <div class="card_bottom">
                <a href="#" class="card_title">
                    <?php echo $book['author']."<br/>"; echo $book['name'];?>
                </a>
            <?php
                if($book['count'] != 0){
            ?>
                <div class="card_price"><?php echo $book['price']."₽";?></div>
                <button class="card_add">В корзину</button>
            <?php
                }else{
            ?>
                <div class="card_price">Нет в наличии</div>
                <button id="disabled" class="card_add">В корзину</button>
            <?php
                };
            ?>
            </div>
        </div>
    <?php
        }
    ?>
    </div>
	</body>
	<footer>
	    <div class="footer-container">
		    <div class="footer-item">
			    <ul class="nav-ul">
						<li>
							<form method="post" action="feedback.html">
								<input class="nav-button" type="submit" value="Обратная связь">
							</form>
						</li>
                        <li>
							<form method="post" action="response.html">
								<input class="nav-button" type="submit" value="Отзывы">
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