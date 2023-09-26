<?php
require_once 'dbconnect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="p-3 mb-2 bg-warning text-dark">
    <div class="container">
        <div class="row">
            <div class="card w-100 mt-3">
                <div class="card-header">
                    <h5 class="title">Todo List Sayfası </h5>
                </div>
                <div class="card-body">
                    <form id="todoAddForm" class="mt-2" method="post" action="adding.php">
                        <input type="text" class="form-control" id="exampleFormControlInput1" aria-describedby="todo"
                            placeholder="Todo Giriniz">
                        <br>
                        <br>
                        <button id="todoAddButton" type="submit" class="btn btn-outline-success">
                            Todo Ekleyin</button>
                            <br>
                    </form>
                   
                    <hr>

                </div>

                <hr />
                

                <div class="card-body">
                    <h5 class="title">Todo Listesi</h5>
                    <form name="form2" id="todoListForm" method="post" action="sorgu.php">
                        <input id="exampleFormControlInput1" type="text" class="form-control" placeholder="Todo Arayınız">
                        <hr />
                    </form>

                    <ul class="list-group">

                    </ul>
                    <br>
                        <button  id="clearButton" class="btn btn-outline-danger">Tüm Todoları Temizle</button>
                </div>
            </div>
        </div>
    </div>
        <div style="text-align: center;">
            <IMG SRC="7akY.gif" width=18% >
        </div>
</div>
</body>
</html>
