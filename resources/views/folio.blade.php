<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Курсы Жанны Аубакировой</title>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
		<!-- jQuery 1.8 or later, 33 KB -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<!-- Fotorama from CDNJS, 19 KB -->
		<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
	</head>
	<body>
		<div class="main-folio">
			<div class="container">
				<div class="header">
					<div class="row">
						<div class="col">
							<div class="navbar">
								<a href="#" onclick="slowScroll('#about')">Обо мне</a>
								<a href="{{ route('home') }}" onclick="slowScroll('#price')">Прайс</a>
								<a href="{{ route('home') }}" onclick="slowScroll('#timer')">Акции</a>
								<a href="{{ route('home') }}" onclick="slowScroll('#contact')">Контакты</a>
								<a href="{{ route('home') }}" onclick="slowScroll('#feedback')">Отзывы</a>
							</div>
						</div>
						<div class="col">
							<img src="images/logo_orig_black.png" alt="">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="content">
						<h1>Жанна Аубакирова</h1>
						<div class="fotorama">
						  <div>
						  	<p>Ведущая международного класса, с опытом более 15 лет.</p>
						  </div>
						  <div>
						  	<p>Признанный организатор торжественных мероприятий с опытом более 10 лет.</p>
						  </div>
						  <div>
						  	<p>Основатель и руководитель арт-студии“JA professional art studio” – с 2014 года на сегодняшний день это «Империя звезд JA».</p>
						  </div>
						  <div>
						  	<p>Законодательница модных вечеринок в столице – 6 лет.</p>
						  </div>
						  <div>
						  	<p>Тренер начинающих ведущих и ивенторов более 5 лет.</p>
						  </div>
						  <div>
						  	<p>Также, проводила тренинги на тему ” Искусство быть женщиной”.</p>
						  </div>
						  <div>
						  	<p>Счастлива в браке 25 лет, мама 3 детей.</p>
						  </div>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<div class="folio">
			<div class="container">
				<div class="row">
					<div class="col"></div>
					<div class="col-6 folio-title">
						<h1>Проведенные мероприятия</h1>
					</div>
					<div class="col"></div>
				</div>
				<div class="row">
					<div class="col folio-list">
						<ul>
							<li>2011 – 2013 гг. - Традиционная ведущая Международного телевизионного конкурса - фестиваля «Восточный базар»</li>
							<li>2013 г.- TÜRKVIZYON, Турция, г.Эскишехир – Ведущая презентации I Международного телевизионного песенного конкурса тюркоязычных исполнителей</li>
							<li>2013 – 2014 гг. – Ведущая международного фестиваля классической музыки и конкурса юных пианистов «Astana - Piano Passion»</li>
							<li>2006 – 2009 гг. - Традиционная ведущая ретро - фестиваля «Караганда - город юности моей»</li>
							<li>2015 г. - Продюсер проекта “ASTANA FOOD FESTIVAL 2015”</li>
							<li>2016 г. - Организатор и продюсер нового уникального проекта – сольного концерта молодого композитора и дирижера Алмата Сайжана - “Хан Кене”</li>
						</ul>
					</div>
					<div class="col folio-main">
						<div class="fotorama"
						     data-width="500"
						     data-height="500">
						  <img src="images/folio/meropriyatiya/14 (1).jpg" alt="">
						  <img src="images/folio/meropriyatiya/20121127_202624.jpg" alt="">
						  <img src="images/folio/meropriyatiya/20160415_113617.jpg" alt="">
						  <img src="images/folio/meropriyatiya/20160415_115304.jpg" alt="">
						  <img src="images/folio/meropriyatiya/20160415_115347.jpg" alt="">
						  <img src="images/folio/meropriyatiya/20160415_122853.jpg" alt="">
						  <img src="images/folio/meropriyatiya/foto-536.jpg" alt="">
						  <img src="images/folio/meropriyatiya/абай (1).jpg" alt="">
						  <img src="images/folio/meropriyatiya/астана балет (1).jpg" alt="">
						  <img src="images/folio/meropriyatiya/Жан Тапин.jpg" alt="">
						  <img src="images/folio/meropriyatiya/Куйрейш.jpg" alt="">
						  <img src="images/folio/meropriyatiya/Роза Рымбаева.jpg" alt="">
						  <img src="images/folio/meropriyatiya/такиялы п.jpg" alt="">
						</div>
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
							<a href="{{ route('home') }}" onclick="slowScroll('#price')">Прайс</a>
							<a href="{{ route('home') }}" onclick="slowScroll('#timer')">Акции</a>
							<a href="{{ route('home') }}" onclick="slowScroll('#contact')">Контакты</a>
							<a href="{{ route('home') }}" onclick="slowScroll('#feedback')">Отзывы</a>
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
						<p>Возникли вопросы? <br>Свяжитесь с нами! <br><span>+7 701 218 82 41 <br>ja_artstudio@mail.ru</span></p>
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
		
	</body>
</html>