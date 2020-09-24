<!DOCTYPE html>
<html lang = 'ru'>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Курсы Жанны Аубакировой</title>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style1.css">
		<!-- jQuery 1.8 or later, 33 KB -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<!-- Fotorama from CDNJS, 19 KB -->
		<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
		<style type="text/css">
			.aaa{
				text-decoration: none;
			}
			.aaa:hover{
				text-decoration: none;
			}
		</style>
	</head>
	<body>
		<div class="main">
			<div class="container">
				<div class="header">
					<div class="row">
						<div class="col">
							<div class="navbar col-lg-9 col-md-9">
								<a href="#" onclick="slowScroll('#about')">{{ __('about') }}</a>
								<a href="#" onclick="slowScroll('#price')">Прайс</a>
								<a href="#" onclick="slowScroll('#timer')">Акции</a>
								<a href="#" onclick="slowScroll('#contact')">Контакты</a>
								<a href="#" onclick="slowScroll('#feedback')">Отзывы</a>
							</div>

						</div>
						<div class='col-lg-2 col-md-2 '>
							<div class="navbar lang">
								<a href="/langru">ru</a>
								<a href="/langkz">kz</a>
							</div>
						</div>
						<div class="col col-lg-2 col-md-2 imga">
							<img src="images/logo_orig_black.png">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="content col-sm-7">
						<h1>Курсы Жанны Аубакировой</h1>
						<h3>Представляем <br>4х недельный онлайн-курс <br>«<span>Зажги в себе звезду!</span>»</h3>
						<a href="#" onclick="slowScroll('#price')">Купить</a>
					</div>
					<div class="media">
						<a href="https://www.instagram.com/jannaaubakirova_ja/"><img src="images/inst.png" alt=""></a>
						<a href="https://wa.me/77012188241"><img src="images/whats.png" alt=""></a>
						<a href="https://www.facebook.com/zhanna.aubakirova.5"><img src="images/face.png" alt=""></a>
						<a href="https://www.youtube.com/channel/UC_eyCsryX827apP8k2n5qfQ"><img src="images/youtube.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>

		<div class="price" id="price">
			<div class="container">
				<div class="row">
					<div class="col deco"></div>
					<div class="col">
						<div class="price-head">
							<h1>Прайс</h1>
						</div>
					</div>
					<div class="col deco"></div>
				</div>
				<div class="row">
					<div class="price-inner">
						<div class="price-column">
							<div class="price-column-head">
								<h1>4, 990 тг.</h1>
								<h3>9, 990 тг.</h3>
							</div>
							<div class="price-column-main">
								<ul>
									<li>У тебя нет плана? - Мы поможем тебе его создать.</li>
									<li>Тебя напрягают отношения с близкими? - Наладим.</li>
									<li>Перед тобой много соблазнов и ты не знаешь чем заняться? - Подскажем решение и дадим инструменты.</li>
									<li>Мы научим тебя самому важному - Ценить, верить и любить себя.</li>
								</ul>
								<a href="https://wa.me/77012188241">Купить</a>
							</div>
						</div>
						<div class="price-column">
							<div class="price-column-head">
								<h1>9, 990 тг.</h1>
								<h3>19, 990 тг.</h3>
							</div>
							<div class="price-column-main">
								<ul>
									<li>Постановка 3 главных целей, стратегия и достижение.</li>
									<li>Создание личного бренда! Работа над главными пунктами.</li>
									<li>Нахождение собственного стиля,рекомендации специалистов в сфере спорта и красоты.</li>
									<li>Основы ораторского мастерства. Рекомендации по созданию презентации.</li>
								</ul>
								<a href="https://wa.me/77012188241">Купить</a>
							</div>
						</div>
						<div class="price-column">
							<div class="price-column-head">
								<h1>19, 990 тг.</h1>
								<h3>39, 990 тг.</h3>
							</div>
							<div class="price-column-main">
								<ul>
									<li>Новые горизонты, открытые желания. <span>sdasdasdsadsaddasdasdsadasdsads</span></li>
									<li>Концентрация на цели. Успех на практике. <span> dasdsadsadsadsad</span></li>
									<li>Выбор правильного времени для важных действий и решений в жизни! (Панчанга)</li>
									<li>Поиск и работа с клиентами. Структура продажи и рекомендация по упаковке продукта.</li>
								</ul>
								<a href="https://wa.me/77012188241">Купить</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="timer" id="timer">
			<div class="container">
				<div class="row">
					<div class="col timer-deco" ></div>
					<div class="col-8 col-sm-12 timer-head">
						<h1>Сейчас или никогда!</h1>
					</div>
					<div class="col timer-deco"></div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="timer-main">
							<div id="countdown" class="countdown">
							  <div class="countdown-number">
							    <span class="days countdown-time"></span>
							    <span class="countdown-text">Дней</span>
							  </div>
							  <div class="countdown-number">
							    <span class="hours countdown-time"></span>
							    <span class="countdown-text">Часов</span>
							  </div>
							  <div class="countdown-number">
							    <span class="minutes countdown-time"></span>
							    <span class="countdown-text">Минут</span>
							  </div>
							  <div class="countdown-number">
							    <span class="seconds countdown-time"></span>
							    <span class="countdown-text">Секунд</span>
							  </div>
							</div>
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col col-sm-0"></div>
					<div class="col-8  col-sm-12 timer-info">
						<h3>Успей приобрести курсы по самым приятным ценам!</h3>
					</div>
					<div class="col col-sm-0"></div>

				</div>
				<div class="row">
					<div class="col"></div>
					<div class="col-4 timer-link">
						<a href="#" onclick="slowScroll('#price')">Прайс</a>
					</div>
					<div class="col"></div>
				</div>
			</div>
		</div>

		<div class="about" id="about">
			<div class="container">
				<div class="row">
					<div class="col about-deco"></div>
					<div class="col-6 about-head">
						<h1>Обо мне</h1>
					</div>
					<div class="col about-deco"></div>
					
				</div>
				<div class="row">
					<div class="col-6 about-main">
						<h1>Жанна Аубакирова</h1>
						<ul>
							<li>- Ведущая международного класса, с опытом более 15 лет.</li>
							<li>- Признанный организатор и законодательница модных вечеринок столицы.</li>
							<li>- Счастлива в браке 25 лет, мама 3 детей.</li>
						</ul>
						<a href="{{ route('about') }}">Подробнее</a>
					</div>
					<div class="col-6 about-img">
						<img src="images/1-42 1.png" alt="">
					</div>
				</div>
			</div>
		</div>

		<div class="forwho">
			<div class="container">
				<div class="row">
					<div class="col-4 forwho-img"><img src="images/1-18 1.png" alt=""></div>
					<div class="col-8 forwho-head">
						<h1>Для кого наши курсы и мастер классы?</h1>
						<ol>
							<li>Кардинально изменить свою жизнь через стратегию – 12 недель в году!</li>
							<li>Научиться рано вставать и больше успевать, получать энергию ото всюду!</li>
							<li>Наладить отношения с своими мужем/ женой/ детьми, сохранить семью и навести внутренний порядок дома!</li>
							<li>Найти свой Верный путь развития и выработать собственную стратегию действий!</li>
							<li>Разнообразить свою жизнь творчеством- петь, вести, организовывать мероприятия!</li>
							<li>Получить рекомендации по стилю, спорту и красоте для личного использования!</li>
						</ol>
					</div>
				</div>
			</div>
		</div>

		<div class="feedback" id="feedback">
			<div class="container">
				<div class="row">
					<div class="col feedback-deco"></div>
					<div class="col-6 feedback-head">
						<h1>Отзывы</h1>
					</div>
					<div class="col feedback-deco"></div>
				</div>
				<div class="row">
					<div class="col feedback-main">
						<div class="fotorama"
						     data-width="500"
						     data-height="500">
						  <img src="images/feedback/1.jpg" alt="">
						  <img src="images/feedback/14 (1).jpg" alt="">
						  <img src="images/feedback/19.jpg" alt="">
						  <img src="images/feedback/2.jpg" alt="">
						  <img src="images/feedback/3.jpg" alt="">
						  <img src="images/feedback/4.jpg" alt="">
						  <img src="images/feedback/7.jpg" alt="">
						  <img src="images/feedback/8 (1).jpg" alt="">
						  <img src="images/feedback/atyrau1.jpg" alt="">
						  <img src="images/feedback/atyrau2.jpg" alt="">
						  <img src="images/feedback/IMG-20160503-WA0005.jpg" alt="">
						  <img src="images/feedback/po_treningam-5.jpg" alt="">
						</div>
					</div>
					<div class="col feedback-info">
						<h3>Отзывы и фото наших учеников и посетителей мастер-класса.</h3>
					</div>
				</div>
			</div>
		</div>

		<div class="contact" id="contact">
			<div class="container">
				<div class="row">
					<div class="col contact-decor"></div>
					<div class="col-8 contact-head"><h1>Закажите звонок</h1></div>
					<div class="col contact-decor"></div>
				</div>
				<div class="row">
					<div class="col"></div>
					<div class="col-8 contact-main">
						<h3>Остались вопросы? <br>Хотите узнать больше о курсах?</h3>
						<h3>Оставьте свои данные.</h3>
					</div>
					<div class="col"></div>
				</div>
				<div class="row">
					<div class="contact-form">
						<form method="POST" action='/email'>
							@csrf
							<input type="text" name='name' placeholder="Имя">
							<input type="text" name='tel' placeholder="Телефон">
							<button type="submit">Отправить</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-7">
						<div class="footer-navbar">
							<a href="#" onclick="slowScroll('#about')">Обо мне</a>
							<a href="#" onclick="slowScroll('#price')">Прайс</a>
							<a href="#" onclick="slowScroll('#timer')">Акции</a>
							<a href="#" onclick="slowScroll('#contact')">Контакты</a>
							<a href="#" onclick="slowScroll('#feedback')">Отзывы</a>
						</div>
						<div class="footer-util">
							<a href="#">Мобильная версия</a>
							<a href="#">Сменить язык</a>
						</div>
					</div>
					<div class="col">
						<div class="footer-logo">
							<img src="images/logo_orig_white.png" alt="">
						</div>
					</div>
					<div class="col-4 footer-info">
						<p>Возникли вопросы? <br>Свяжитесь с нами! <br><span><a class="aaa" href="tel:+77012188241">+7 701 218 82 41</a></span><br>ja_artstudio@mail.ru</span></p>
						<div class="footer-media">
							<a href="https://www.instagram.com/jannaaubakirova_ja/"><img src="images/inst_white.png" alt=""></a>
							<a href="https://wa.me/77012188241"><img src="images/whats_white.png" alt=""></a>
							<a href="https://www.facebook.com/zhanna.aubakirova.5"><img src="images/face_white.png" alt=""></a>
							<a href="https://www.youtube.com/channel/UC_eyCsryX827apP8k2n5qfQ"><img src="images/youtube_white.png" alt=""></a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<script src="js/script.js"></script>
		<script>
			function slowScroll(id) {
    			$('html, body').animate({
        			scrollTop: $(id).offset().top
    			}, 1500);
			}
		</script>
	</body>
</html>