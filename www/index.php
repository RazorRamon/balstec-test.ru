<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>���������</title>
		<meta name="description" content="opisanie" />
		<meta name="keywords" content="keywords" />
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />

		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/css/normalize.css" />

		<link rel="icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/news/rss/" />
		
		<!� ����������� jQuery -->
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
					<div class="slogan">��������<br />������������</div>
					<div class="top_menu">
						<ul>
							<li class="active"><a href="/">�������</a></li>
							<li><a href="#">����������� �������</a></li>
							<li><a href="#">���� �������</a></li>
							<li><a href="#">��������</a></li>
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
					<div class="slogan">��������<br />������������</div>
					<div class="top_menu">
						<ul>
							<li class="active"><a href="/">�������</a></li>
							<li><a href="#">����������� �������</a></li>
							<li><a href="#">���� �������</a></li>
							<li><a href="#">��������</a></li>
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
							<li><a href="#"><img src="/images/section-1.png" /><div class="nakladka">�������� ������������ ��� ��������� �������������</div></a></li>
							<li><a href="#"><img src="/images/section-2.png" /><div class="nakladka">�������</div></a></li>
							<li><a href="#"><img src="/images/section-3.png" /><div class="nakladka">��������</div></a></li>
							<li><a href="#"><img src="/images/section-4.png" /><div class="nakladka">������ � ���������</div></a></li>
							<li><a href="#"><img src="/images/section-5.png" /><div class="nakladka">�����������</div></a></li>
							<li><a href="#"><img src="/images/section-6.png" /><div class="nakladka">��������</div></a></li>
							<li><a href="#"><img src="/images/section-7.png" /><div class="nakladka">����������� �� ���� ������� ������</div></a></li>
							<li><a href="#"><img src="/images/section-8.png" /><div class="nakladka">�����-����</div></a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="wrap_advantages">
				<div class="advantages_block"></div>
			</div>
			
			<div class="about_block">
				<h1>�������� ������������: ������������ � �������</h1>
				<div class="left_text">
					<p>����� ����� ������� ���� ������ ��� �������� ������� �������� ������������, ��� �� ����� ������������ �������� ��������� ��������� �������� ������������. �������� ������������ (�������� � �������) � ��� ����� ����� �������� �����������, �� ���������� �������� �� ������������ ������������. ����� �� ����������� � ������ �� ��� �����, ����� �� ������� �������� �� �� ����, �� ����� ��������� ���������� ���������������, ���� �������� ������������, �������� � ������� ��� ������ �������� ������� �����������. � ������ �������, ��������� ��������� ������������ ����� ������� �������� ������ ������.</p>
					<p>����� ��� ��� �������ʻ ����� ����� 10 ��� ����� �� ����� ������������ ��������� � ������������ ������������, ������� � �������� �����������. �� ��� ����� �� ���������� � ������������ �������� ������������ (��������, ������� � �����������, ��������) ��� ����� ���������, �������� ���������� � ������, ���������� ������� � � �������� ������ ������� ������. �� ���������� �� ��� �� ��������� �� ������, �� �����-���������� �� ������, �� ��������������-����������� �� �������.</p>
					<p>������� ����������� ������, ���������, ���������, ������� � ���������� �� ������������ �������, ����������� ���������� ������, �������������� ���,</p>
				</div>
				<div class="right_text">
					<p>������, �������, �������� ��������� ������, ������������� ���� ������� �������, �������������, ��������������� ������ ������� ��������� ����������� �������� � �������� ������. ������������ ����� �������� ������� �������������� ����������, �����������, ���������.</p>
					<p>����������� ���������������� ���� ���� ����������� ������������� �������� ������������ �� ��������������� ������� � ������ ������������ ������ ��������� ��������� � ���� ����� ���������: ��������� ��������, �������� ���������, ����������� ���������, ������� ���������, ���������� �����������, ������������ ��� ������, �������� ������������ ������ (Joker) � ������������� ����� Joker, ������������, ������� � �������������� �����������, ������������ ��� ��������� �������������.</p>
					<p>���� �������� ������������ ������ ������������ ��� �����, ���������, ��������� ��������������, �����-����� � ������������ ��������, ������������, ���������� ���������, ����������, �����������, ���������� � ��. ��� ������������ ��������� ���������, ������������ ����� ��������������� ��� � ������������� ��������� ��������� ������������ ���������. �� ����������� ����� �������� �������������� ������, �������� �����, ������������ �������� � ��������� ����.</p>
				</div>
			</div>
			<div class="clear_div">&nbsp;</div>

			<form class="fos_block" method="post" action="#">
				<div class="wrap_legend"><legend>�������� ������������</legend></div>
				<div class="wrap_fields">
					<div class="right_fields">
						<div class="left_fields">
							<label class="line_checkbox" for="vitrina">
								<input name="vitrina" value="1" type="checkbox">�������
							</label>
							<label class="line_checkbox" for="prilavok">
								<input name="prilavok" value="2" type="checkbox">��������
							</label>
							<label class="line_checkbox" for="kiosk">
								<input name="kiosk" value="3" type="checkbox">�����
							</label>
							<label class="line_checkbox" for="pavilon">
								<input name="pavilon" value="4" type="checkbox">��������
							</label>
							<label class="line_checkbox" for="peregorodka">
								<input name="peregorodka" value="5" type="checkbox">�����������
							</label>
							<label class="line_checkbox" for="stellag">
								<input name="stellag" value="6" type="checkbox">�������
							</label>
							<label style="margin: -5px 0 -15px;" class="line_checkbox" for="joker">
								<input name="joker" value="7" type="checkbox" style="margin: 5px 6px 10px 0;">����������� �� ����� ������� ������</label>
							<label  class="line_checkbox" for="kass-kab">
								<input name="kass-kab" value="8" type="checkbox">�������� ������
							</label>
						</div>
						<label class="line_field" for="USER_NAME">���<span class="starrequired">*</span> <input type="text" name="USER_NAME" maxlength="50" size="30" value="" placeholder="���� �������� ���������" required /></label>
						<div style="margin-bottom: -30px;" class="clear_div">&nbsp;</div>
						<label class="line_field" for="PHONE">�������<span class="starrequired">*</span> <input type="text" name="PHONE" maxlength="255" size="30" value="" placeholder="8-916-123-45-67" required /></label>
						<div style="margin-bottom: -30px;" class="clear_div">&nbsp;</div>
						<label class="line_field" for="USER_EMAIL">E-Mail<span class="starrequired">*</span> <input type="text" name="USER_EMAIL" maxlength="255" size="30" value="" placeholder="info@yandex.ru" required /></label>
						<div style="margin-bottom: -10px;" class="clear_div">&nbsp;</div>
						<label class="line_field" for="TEXT">�����<span class="starrequired">*</span> <textarea name="INFO_POLE" rows="5" cols="30" placeholder="����������� ���������������� ���� ���� ����������� ������������� �������� ������������ �� ��������������� ������� � ������ ������������ ������ ��������� ��������� � ���� ����� ���������: ��������� ��������, �������� ���������, ����������� ���������, ������� ���������." required ></textarea></label>
						<div style="margin-bottom: -10px;" class="clear_div">&nbsp;</div>
						<div style="margin: 25px 275px 0px 0px; float:right">
							<label for="CAPTCHA">
								<span style="float: left; margin: 5px 15px; display: inline-block;">������� �������<span class="starrequired">*</span></span><img src="/images/kaptcha.png" style="float: left;" /><input class="short" type="text" name="CAPTCHA" maxlength="255" size="15" value="" required />
							</label>
						</div>
						<div style="margin-bottom: 5px;" class="clear_div">&nbsp;</div>
						<p style="text-align: center;"><span class="starrequired">*</span> � ���� ������������ ��� ����������</p>
					</div>
				</div>
				<div class="wrap_button"><button name="" value="" type="submit">��������</button></div>
			</form>
			
			<div class="clear_div">&nbsp;</div>
			<div class="wrap_map">
				<div class="map_block">
					<h2><span>�����:</span> �. ������, ��. ���������� 42, ���� 225</h2>
					<img class="yandex_map" src="/images/map.png" />
				</div>
			</div>

			<div class="clear_div">&nbsp;</div>
		</main>
		<footer>
			<div class="wrap_footer">
				<div class="copyright">�� ������� �<span class="defis-footer"></span>�������� ������������: ������������ � �������</div>
				<div class="year">2009-2014</div>
				<div class="creator"><a href="http://www.divier.ru/" target="_blank">�������� �����</a> ������</div>
			</div>
		</footer>
	</body>
</html>