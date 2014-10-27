<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Заголовок</title>
		<meta name="description" content="opisanie" />
		<meta name="keywords" content="keywords" />
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />

		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/css/normalize.css" />

		<link rel="icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/news/rss/" />
		
		<!— Подключение jQuery -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>

	</head>
	<body>
		<? if(substr_count($_SERVER['REQUEST_URI'],"/company/")){ ?>
			<header id="header-inside">
				<div class="bg_header-inside">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
					  <tr>
					    <td class="bg_header-5">&nbsp;</td>
					    <td class="bg_header-6">&nbsp;</td>
					  </tr>
					</table>
					<div class="bg_header-4"></div>
				</div>
				<div class="clear_div" style="height: 55px;">&nbsp;</div>
				<div class="head_contact">
					<a href="/" id="logo"></a>
					<div class="phone"><span>+7(495)</span> 351-54-29, <span>+7(495)</span> 351-79-20</div>
					<div class="sotov"><span>+7(916)</span> 203-33-72, <span>+7(916)</span> 712-48-50</div>
				</div>
				<div class="menu_block">
					<div class="slogan">торговое<br />оборудование</div>
					<div class="top_menu">
						<ul>
							<li class="active"><a href="/">Главная</a></li>
							<li><a href="#">Выполненные проекты</a></li>
							<li><a href="#">Наши клиенты</a></li>
							<li><a href="#">Контакты</a></li>
						</ul>
					</div>
				</div>
			</header>
		<? } elseif(substr_count($_SERVER['REQUEST_URI'],"/")){?>
			<header>
				<div class="bg_header">
					<div class="bg_header-1"></div>
					<div class="bg_header-2"></div>
					<div class="bg_header-3"></div>
				</div>
				<div class="wrap_slider_block">
					<div class="slider">
						<a href="/"><img src="/images/slide1.png" id="img1" class="imgg" border="0" /></a>
						<a href="/"><img src="/images/slide2.png" id="img2" class="imgg" style="display:none" border="0"/></a>
						<a href="/"><img src="/images/slide3.png" id="img3" class="imgg" style="display:none" border="0"/></a>
						<img src="/images/frame_slider.png" class="frame_slider" />
					</div>
				</div>
				<div class="head_contact">
					<a href="/" id="logo"></a>
					<div class="phone"><span>+7(495)</span> 351-54-29, <span>+7(495)</span> 351-79-20</div>
					<div class="sotov"><span>+7(916)</span> 203-33-72, <span>+7(916)</span> 712-48-50</div>
				</div>
				<div class="menu_block">
					<div class="slogan">торговое<br />оборудование</div>
					<div class="top_menu">
						<ul>
							<li class="active"><a href="/">Главная</a></li>
							<li><a href="#">Выполненные проекты</a></li>
							<li><a href="#">Наши клиенты</a></li>
							<li><a href="#">Контакты</a></li>
						</ul>
					</div>
				</div>
			</header>
		<? } ?>
		<main>
			<div class="wrap_content_block">
				<div id="left_sitebar">
					<ul class="catalog">
						<h1>каталог</h1>
						<li><a href="#">Торговое оборудование для магазинов автозапчастей</a></li>
						<li><a href="#">Витрины</a></li>
						<li><a href="#">Прилавки</a></li>
						<li class="active expand">
							<a class="active" href="#">Киоски и павильоны</a>
							<ul class="open">
								<li><a href="#">Аптечные киоски</a></li>
								<li class="active expand"><a class="selected" href="#">Ювелирные киоски</a></li>
								<li><a href="#">Киоски фото</a></li>
								<li><a href="#">Киоски оптика</a></li>
								<li><a href="#">Выставочные павильоны</a></li>
								<li><a href="#">Островные киоски</a></li>
							</ul>
						</li>
						<li><a href="#">Перегородки</a></li>
						<li><a href="#">Стеллажи</a></li>
						<li><a href="#">Конструкции из труб системы Джокер</a></li>
					</ul>
				</div>
				<div id="content">
					<h1>Ювелирные киоски</h1>
					<div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-1.png" /></a>
							<a class="name_tovar" href="#">Ювелирный киоск<br />«VANGOLD»<br />в ТЦ «Золотой Вавилон»</a>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-2.png" /></a>
							<a class="name_tovar" href="#">ТЦ РИО Островной киоск<br />для ювелирных изделий</a>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-3.png" /></a>
							<a class="name_tovar" href="#">Ювелирный киоск<br />«VANGOLD»<br />в ТЦ «Золотой Вавилон»</a>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-4.png" /></a>
							<a class="name_tovar" href="#">ТЦ РИО Островной киоск<br />для ювелирных изделий</a>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-3.png" /></a>
							<a class="name_tovar" href="#">Ювелирный киоск<br />«VANGOLD»<br />в ТЦ «Золотой Вавилон»</a>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-4.png" /></a>
							<a class="name_tovar" href="#">ТЦ РИО Островной киоск<br />для ювелирных изделий</a>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-1.png" /></a>
							<a class="name_tovar" href="#">Ювелирный киоск<br />«VANGOLD»<br />в ТЦ «Золотой Вавилон»</a>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-2.png" /></a>
							<a class="name_tovar" href="#">ТЦ РИО Островной киоск<br />для ювелирных изделий</a>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-1.png" /></a>
							<a class="name_tovar" href="#">Ювелирный киоск<br />«VANGOLD»<br />в ТЦ «Золотой Вавилон»</a>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-2.png" /></a>
							<a class="name_tovar" href="#">ТЦ РИО Островной киоск<br />для ювелирных изделий</a>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-3.png" /></a>
							<a class="name_tovar" href="#">Ювелирный киоск<br />«VANGOLD»<br />в ТЦ «Золотой Вавилон»</a>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-4.png" /></a>
							<a class="name_tovar" href="#">ТЦ РИО Островной киоск<br />для ювелирных изделий</a>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-3.png" /></a>
							<a class="name_tovar" href="#">Ювелирный киоск<br />«VANGOLD»<br />в ТЦ «Золотой Вавилон»</a>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-4.png" /></a>
							<a class="name_tovar" href="#">ТЦ РИО Островной киоск<br />для ювелирных изделий</a>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-1.png" /></a>
							<a class="name_tovar" href="#">Ювелирный киоск<br />«VANGOLD»<br />в ТЦ «Золотой Вавилон»</a>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-2.png" /></a>
							<a class="name_tovar" href="#">ТЦ РИО Островной киоск<br />для ювелирных изделий</a>
						</div>
						<div class="clear_div">&nbsp;</div>
					</div>
					<font class="text">Начало&nbsp;|&nbsp;Пред.&nbsp;|&nbsp;&nbsp;&nbsp;			
										<a href="#"><span>1</span></a>
										<b>2</b>
										<a href="#"><span>3</span></a>
										<a href="#"><span>4</span></a>
										<a href="#"><span>5</span></a>
										&nbsp;&nbsp;&nbsp;&nbsp;| <a href="#">След.</a>&nbsp;|&nbsp;<a href="#">Конец</a>&nbsp;
						<noindex>
							|<a href="#" rel="nofollow">Все</a>
						</noindex>
					</font>
					<div class="clear_div">&nbsp;</div>
				</div>
			</div>
			<div class="clear_div">&nbsp;</div>
		</main>
		<footer>
			<div class="wrap_footer">
				<div class="copyright">ПК Балстек ©<span class="defis-footer"></span>торговое оборудование: изготовление и продажа</div>
				<div class="year">2009-2014</div>
				<div class="creator"><a href="http://www.divier.ru/" target="_blank">Создание сайта</a> ДиВиЕР</div>
			</div>
		</footer>
	</body>
</html>