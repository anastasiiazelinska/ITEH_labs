<?php require "connect.php"; ?>
<?php require "add/league_add.php"; ?>
<?php require "add/teams_add.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Team</title>
    <script src="jquery-3.5.0.min.js"></script>
    <script src="ajax.js"></script>
    <style>
        table td {padding: 20px;}
    </style>
</head>
<body>
<form action="league.php">
    <p><b>Таблица чемпионата для выбранной лиги</b></p>
    <select name="league">
        <?php
        foreach ($leagues as $league) {
            echo '<option value="'.$league.'">'.$league.'</option>';
        }
        ?>
    </select>
    <p>
        <input type="button" value="Выбрать" onclick="getRes1(this);">
        <input type="button" value="Данные с LocalStorage" onclick="getLocal1(this)">
        <input type="button" value="Очистить форму" onclick="$('#res1').html('');">
    </p>
</form>
<table>
    <thead>
        <tr>
            <th>Лига</th>
            <th>Дата</th>
            <th>Место игры</th>
            <th>Счет</th>
            <th>Команды</th>
            <th>Победитель</th>
        </tr>
    </thead>
    <tbody id="res1"></tbody>
</table>
<form action="players.php">
    <p><b>Список футболистов указанной команды</b></p>
    <select name="team">
        <?php
        foreach ($teams as $team) {
            echo '<option value="'.$team['name'].'">'.$team['name'].'</option>';
        }
        ?>
    </select>
    <p>
        <input type="button" value="Выбрать" onclick="getRes2(this);">
        <input type="button" value="Данные с LocalStorage" onclick="getLocal2(this)">
        <input type="button" value="Очистить форму" onclick="$('#res2').html('');">
    </p>
</form>
<ol id="res2"></ol>


<form action="games.php">
    <p><b>Список игр, в которых участвовала выбранная команда</b></p>
    <select name="team">
        <?php
        foreach ($teams as $team) {
            echo '<option value="'.$team['name'].'">'.$team['name'].'</option>';
        }
        ?>
    </select>
    <p>
        <input type="button" value="Выбрать" onclick="getRes3(this);">
        <input type="button" value="Данные с LocalStorage" onclick="getLocal3(this)">
        <input type="button" value="Очистить форму" onclick="$('#res3').html('');">
    </p>
</form>
<table>
    <thead>
        <tr>
            <th>Лига</th>
            <th>Дата</th>
            <th>Место игры</th>
            <th>Счет</th>
            <th>Команды</th>
            <th>Победитель</th>
        </tr>
    </thead>
    <tbody id="res3"></tbody>
</table>
</body>
</html>