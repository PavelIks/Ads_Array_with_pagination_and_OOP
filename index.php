<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ООП</title>
</head>
<body>

<form action="index.php" method="get">
    <p>Поиск: <input type="text" name="search" /></p>
    <p><input type="submit" text="Поиск"/></p>
</form>

<?php
    include "Post.php";

    $ads_array = array
    (
        new Post
        (
                    'https://ireland.apollo.olxcdn.com/v1/files/u7rxfuvhyucm2-UA/image;s=644x461',
                    'Защитное стекло на айфон х,11Pro/11Pro Max,6,7,8+,Хr,5,5s,se',
                    '69$',
                    '12:49, 20 октября 2020',
                    'Ирпень, Киевская область',
                    true,
                    'id1.html'
        ),
        new Post
        (
                'https://ireland.apollo.olxcdn.com/v1/files/u7rxfuvhyucm2-UA/image;s=644x461',
                'Test1',
                '0$',
                '00:0, 0 октября 2020',
                'Ирпень, Киевская область',
                true,
                'id2.html'
        )
    );

if(isset($_GET['search']))
{
    $key = $_GET['search'];
}
else
    {
        //$key = "Test";
        foreach ($ads_array as $value)
        {
            echo $value->getPost();
        }
    }

foreach (array_filter($ads_array,
    function ($x)
    {
        global $key;
        if(substr_count($x->Description, $key) > 0)
        {
            return $x;
        }

    }) as $value)
{
    echo $value->getPost();
}
?>
</body>
</html>