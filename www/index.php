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
		
		<script language="javascript">
			$(document).ready(function (){
				var i=2;
				setInterval(function(){
					$('.imgg').fadeOut(2000);
					$('#img'+i).fadeIn(2000);
					i++;
					if(i==4){i=1;}
				}, 5000);	
			});
		</script>

	</head>
	<body>
		<? if(substr_count($_SERVER['REQUEST_URI'],"/company/") or substr_count($_SERVER['REQUEST_URI'],"/contacts/")){ ?>
			<header class="header-inside">
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
			<div class="wrap_section_block">
				<div class="section_block">
					<div class="section_menu">
						<ul>
							<li><a href="#"><img src="/images/section-1.png" /><div class="nakladka">Торговое оборудование для магазинов автозапчастей</div></a></li>
							<li><a href="#"><img src="/images/section-2.png" /><div class="nakladka">Витрины</div></a></li>
							<li><a href="#"><img src="/images/section-3.png" /><div class="nakladka">Прилавки</div></a></li>
							<li><a href="#"><img src="/images/section-4.png" /><div class="nakladka">Киоски и павильоны</div></a></li>
							<li><a href="#"><img src="/images/section-5.png" /><div class="nakladka">Перегородки</div></a></li>
							<li><a href="#"><img src="/images/section-6.png" /><div class="nakladka">Стеллажи</div></a></li>
							<li><a href="#"><img src="/images/section-7.png" /><div class="nakladka">Конструкции из труб системы Джокер</div></a></li>
							<li><a href="#"><img src="/images/section-8.png" /><div class="nakladka">Прайс-лист</div></a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="wrap_advantages">
				<div class="advantages_block"></div>
			</div>
			
			<div class="about_block">
				<h1>Торговое оборудование: изготовление и продажа</h1>
				<div class="left_text">
					<p>Очень важно начиная свой бизнес или расширяя текущую торговую деятельность, уже на этапе планирования магазина правильно подобрать торговое оборудование. Торговое оборудование (прилавки и витрины) – это «лицо» любой торговой организации, от маленького магазина до современного супермаркета. Каким бы современным и модным не был товар, какое бы высокое качество он не имел, он будет выглядеть совершенно невыразительным, если торговое оборудование, прилавки и витрины для Вашего магазина выбрано неправильно. С другой стороны, правильно выбранное оборудование может ощутимо повысить объемы продаж.</p>
					<p>Фирма ООО «ПК «БАЛСТЕК» имеет более 10 лет опыта на рынке производства торгового и выставочного оборудования, офисных и торговых перегородок. За это время мы изготовили и смонтировали торговое оборудование (стеллажи, витрины и перегородки, прилавки) для сотен магазинов, торговых павильонов в Москве, Московской области и в десятках других городов России. От Краснодара на юге до Норильска на севере, от Санкт-Петербурга на западе, до Петропавловска-Камчатского на востоке.</p>
					<p>Большой ассортимент витрин, прилавков, стеллажей, киосков и павильонов из алюминиевого профиля, окрашенного порошковой эмалью, ламинированной ДСП,</p>
				</div>
				<div class="right_text">
					<p>стекла, зеркала, пластика различных цветов, хромированных труб системы «Джокер», экономпанелей, перфорированных листов металла позволяет оборудовать магазины и торговые центры. Неповторимый стиль помогают создать дополнительные аксессуары, светильники, фурнитура.</p>
					<p>Собственная производственная база дает возможность изготавливать торговое оборудование по индивидуальному проекту с учетом особенностей вашего торгового помещения и всех ваших пожеланий: ювелирные прилавки, торговые павильоны, выставочные павильоны, витрины магазинов, стеклянные перегородки, оборудование для аптеки, торговое оборудование Джокер (Joker) и хромированные трубы Joker, экономпанели, офисные и сантехнические перегородки, оборудование для магазинов автозапчастей.</p>
					<p>Наше торговое оборудование широко используется для аптек, магазинов, торгующих автозапчастями, аудио-видео и компьютерной техникой, фототоварами, ювелирными изделиями, косметикой, парфюмерией, сувенирами и др. При относительно невысокой стоимости, оборудование имеет презентабельный вид и конструктивно позволяет создавать оригинальные интерьеры. Мы гарантируем своим клиентам индивидуальный подход, короткие сроки, максимальное качество и невысокие цены.</p>
				</div>
			</div>
			<div class="clear_div">&nbsp;</div>

			<form class="fos_block" method="post" action="#">
				<div class="wrap_legend"><legend>Заказать изготовление</legend></div>
				<div class="wrap_fields">
					<div class="right_fields">
						<div class="left_fields">
							<label class="line_checkbox" for="vitrina">
								<input name="vitrina" value="1" type="checkbox">Витрина
							</label>
							<label class="line_checkbox" for="prilavok">
								<input name="prilavok" value="2" type="checkbox">Прилавок
							</label>
							<label class="line_checkbox" for="kiosk">
								<input name="kiosk" value="3" type="checkbox">Киоск
							</label>
							<label class="line_checkbox" for="pavilon">
								<input name="pavilon" value="4" type="checkbox">Павильон
							</label>
							<label class="line_checkbox" for="peregorodka">
								<input name="peregorodka" value="5" type="checkbox">Перегородка
							</label>
							<label class="line_checkbox" for="stellag">
								<input name="stellag" value="6" type="checkbox">Стеллаж
							</label>
							<label style="margin: -5px 0 -15px;" class="line_checkbox" for="joker">
								<input name="joker" value="7" type="checkbox" style="margin: 5px 6px 10px 0;">Конструкция из струб системы Джокер</label>
							<label  class="line_checkbox" for="kass-kab">
								<input name="kass-kab" value="8" type="checkbox">Кассовая кабина
							</label>
						</div>
						<label class="line_field" for="USER_NAME">Имя<span class="starrequired">*</span> <input type="text" name="USER_NAME" maxlength="50" size="30" value="" placeholder="Семён Семёнович Горбунков" required /></label>
						<div style="margin-bottom: -30px;" class="clear_div">&nbsp;</div>
						<label class="line_field" for="PHONE">Телефон<span class="starrequired">*</span> <input type="text" name="PHONE" maxlength="255" size="30" value="" placeholder="8-916-123-45-67" required /></label>
						<div style="margin-bottom: -30px;" class="clear_div">&nbsp;</div>
						<label class="line_field" for="USER_EMAIL">E-Mail<span class="starrequired">*</span> <input type="text" name="USER_EMAIL" maxlength="255" size="30" value="" placeholder="info@yandex.ru" required /></label>
						<div style="margin-bottom: -10px;" class="clear_div">&nbsp;</div>
						<label class="line_field" for="TEXT">Текст<span class="starrequired">*</span> <textarea name="INFO_POLE" rows="5" cols="30" placeholder="Собственная производственная база дает возможность изготавливать торговое оборудование по индивидуальному проекту с учетом особенностей вашего торгового помещения и всех ваших пожеланий: ювелирные прилавки, торговые павильоны, выставочные павильоны, витрины магазинов." required ></textarea></label>
						<div style="margin-bottom: -10px;" class="clear_div">&nbsp;</div>
						<div style="margin: 25px 275px 0px 0px; float:right">
							<label for="CAPTCHA">
								<span style="float: left; margin: 5px 15px; display: inline-block;">Введите символы<span class="starrequired">*</span></span><img src="/images/kaptcha.png" style="float: left;" /><input class="short" type="text" name="CAPTCHA" maxlength="255" size="15" value="" required />
							</label>
						</div>
						<div style="margin-bottom: 5px;" class="clear_div">&nbsp;</div>
						<p style="text-align: center;"><span class="starrequired">*</span> — поля обязательные для заполнения</p>
					</div>
				</div>
				<div class="wrap_button"><button name="" value="" type="submit">заказать</button></div>
			</form>
			
			<div class="clear_div">&nbsp;</div>
			<div class="wrap_map">
				<div class="map_block">
					<h2><span>Адрес:</span> г. Москва, ул. Люблинская 42, офис 225</h2>
					<img class="yandex_map" src="/images/map.png" />
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