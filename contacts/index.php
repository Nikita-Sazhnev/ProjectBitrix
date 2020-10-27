<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><br>
 <br>
<h2>Наши контакты</h2>
 <br>
 <br>
 г.Санкт-Петербург, ул. Невская<br>
 дом 123, корпус 4, оф. 234-А<br>
 +7 (812)&nbsp;234-43-43<br>
<br>
<br>
<h3>Оставите свои контакт чтобы могли с вами связаться</h3>
 <br>
 <?$APPLICATION->IncludeComponent("bitrix:main.feedback", "callback_form", Array(
	"EMAIL_TO" => "nikitas4478@gmail.com",	// E-mail, на который будет отправлено письмо
		"EVENT_MESSAGE_ID" => array(	// Почтовые шаблоны для отправки письма
			0 => "7",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
		"REQUIRED_FIELDS" => array(	// Обязательные поля для заполнения
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"USE_CAPTCHA" => "Y",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>