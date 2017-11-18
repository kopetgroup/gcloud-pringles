<?php
$telegramapi="334808005:AAFG5Bw4swD1ZPTPkQ80TRGjkFDiXwVoGvk";
$telegramchat="124071029";
file_get_contents("https://api.telegram.org/bot$telegramapi/sendMessage?text=kopetngapi&chat_id=$telegramchat");
