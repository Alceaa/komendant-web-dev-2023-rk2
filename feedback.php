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
			<link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
            <script type="text/javascript" src="static/js/feedback.js"></script>
		</div>
	</header>
	<body>
        <div class="modal-form">
			<form name="feedback" method="post" action="javascript:feedback()">
				<p><h2>Форма обратной связи</h2></p>
				<p><b>Фамилия:</b>
					<input type="text" name="secondname" size="40">
				</p>
				<p><b>Имя:</b>
					<input type="text" name="firstname" size="40">
				</p>
				<p><b>Отчество:</b>
					<input type="text" name="middlename" size="40">
				</p>
                <p><b>Почта:</b>
					<input type="text" name="email" size="40" placeholder="your_mail@mail.com" >
				</p>
				<p><b>Откуда узнали о нас:</b>
					<input type="radio" name="source" value="search">Реклама из интернета
					<input type="radio" name="source" value="friends">Рассказали друзья
				</p>
				<p><b>Тип обращения:</b>
					<select size="1" style="width: 200px;" name="type">
						<option selected value="1" name="suggest">Предложение</option>
						<option value="2" name="complain">Жалоба</option>					
					</select>
				</p>
				<p><b>Текст обращения:</b>
					<textarea rows="10" cols="45" name="text"></textarea>
				</p>
				<p><b>Прикрепите дополнительные файлы:</b>
					<input type="file" name="f">
				</p>
				<p><b>Согласие на обработку персональных данных</b>
					<input type="checkbox" name="pd">
				<p>
				<input type="submit" value="Отправить">
			</form>
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