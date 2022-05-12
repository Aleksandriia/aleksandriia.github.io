<!-- Вывод данных в таблицу -->
<?php
    $host='localhost';
    $user='root';
    $pass='';
    $db='udobreniakp';

    $link=mysqli_connect ($host,$user,$pass,$db) or die ("Ошибка" .mysqli_error($link));
    $query = "select * from udobrenia";
    $result = mysqli_query($link, $query) or die("Ошибка".mysqli_error($link));
    
    print("<p align=center><font face=verdana><b>Таблица удобрений</b>
    <table border=1 align=center width=80% cellpadding=5 color=#c0c0c0  text-align=center>
    <tr bgcolor=#eeeeee align=center margin=5px padding=5px text-align=center>
    <td text-align=center>№/id</td>
    <td text-align=center>Название</td>
    <td text-align=center>Доза на 1 м2</td>
    <td text-align=center>Способ внесения</td>
    <td text-align=center>Особенности</td>
    </tr>");

    while($a=mysqli_fetch_array($result))
    {
        $id_udobrenia=$a['id_udobrenia'];
        $Nazvanie_udobrenia=$a['Nazvanie_udobrenia'];
        $Doza=$a['Doza'];
        $Sposob_vnesenia=$a['Sposob_vnesenia'];
        $Osobennosti=$a['Osobennosti'];
        print("<tr text-align=center>
        <td text-align=center>$id_udobrenia</td>
        <td text-align=center>$Nazvanie_udobrenia</td>
        <td text-align=center>$Doza</td>
        <td text-align=center>$Sposob_vnesenia</td>
        <td text-align=center>$Osobennosti</td>
        <tr>");
    }
    print("</table>");

    mysqli_close($link);
?>