<?php session_start();
//Aktifkan session

require 'config/koneksi.php'; ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>SIP SD SWASTA TAMSIS KISARAN</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <style type="text/css">
            body {
                margin-top:70px;
            }

            .modalDialog {
                position: fixed;
                font-family: Arial, Helvetica, sans-serif;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background: rgba(0,0,0,0.8);
                z-index: 99999;
                opacity:0;
                transition: opacity 200ms ease-in;
                pointer-events: none;
            }
            .modalDialog:target {opacity:1; pointer-events: auto;}
            .modalDialog > div {
                width: 400px;
                position: relative;
                margin: 10% auto;
                padding: 5px 20px 13px 20px;
                border-radius: 10px;
                background: #fff;
                background: linear-gradient(#fff, #aaa);
            }
            .close:hover { background:#00d9ff; }
            .close {
                background: #606061;
                color: #FFFFFF;
                line-height: 25px;
                position: absolute;
                text-align: center;
                top: -10px;
                right: -12px;
                width: 24px;
                text-decoration: none;
                font-weight: bold;
                border-radius: 12px;
                box-shadow: 1px 1px 3px #000;
            }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        </style>
    </head>
    <body>

        <?php //mengambil file menu.php
        require 'akun.php';
        ?>

        <?php //mengambil file menu.php
        require 'menu_user.php';
        ?>

        <?php //mengambil file menu.php
        require 'content_user.php';
        ?>



        <script src="assets/js/jquery.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>

        <script type="text/javascript" >
                $(function () {
                    $('#dtskripsi').dataTable();
                });
    </script>

    </body>

    </html>
