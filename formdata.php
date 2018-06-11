<?php

$result = mail("test@test.ru","Анкета","С сайта была получена анкета с данными \nИмя: $_POST[name] \nEmail: $_POST[email] \nПароль: $_POST[password] \nЭкономите время? $_POST[time] \nТо что помогает экономить время: $_POST[help] \nСколько вы спите? $_POST[sleep] \nСоветы и способы по эконимии времени? $_POST[text]");

if ($result) {
echo "<p>Сообщение успешно отправлено!</p>";
}
else {
echo "<p>Сообщение НЕ отправлено!</p>";
}
?>