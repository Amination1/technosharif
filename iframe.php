<?php
session_start();


if ($_SESSION['iframe']) {
    echo '<iframe src="https://player.arvancloud.ir/index.html?config=https://technosharif.arvanlive.ir/student/origin_config.json"
                    style="border:0 #ffffff none;" name="تست" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
    $_SESSION['iframe'] = false;


}else{
    echo 'you don\'t have access to this page!';
}

$_SESSION['iframe'] = false;

