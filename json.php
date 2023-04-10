<?php

$dado = array('2022100001', 'Chuck Norris', '111111111-11', 2,
'2022100002', 'Arnold Schwazenegger', '222222222-22', 1,
'2022100003', 'Silverter Stalone', '333333333-33', 1,
'2022100004', 'Will Smith', '444444444-44', 1,
'2022100005', 'Leonardo DiCaprio', '555555555-55', 1,
'2022100006', 'Robert Downey Jr', '666666666-66', 1,
'2022100007', 'Tom Holland', '777777777-77', 2,
'2022100008', 'Chris Patt', '888888888-88', 1,
'2022100009', 'Mark Ruffalo', '999999999-99', 3,
'2022100000', 'Charlie Sheen', '000000000-00', 4);

$arquivo = 'data.json';
$json = json_encode($dado);
$file = fopen(__DIR__ . '/' . $arquivo,'w');
fwrite($file, $json);
fclose($file);

?>
