<?php 
   echo 'Получения статуса оплаты...';
         if($_POST['response_status'] == 'success') {
            header('Location: https://protargeting.team/messenger_marketing/success.php?currency='.$_POST['currency'].'&amount='.$_POST['amount'].'&sender_email='.$_POST['sender_email'].'&product_id='.$_POST['product_id']);

   } else {
      header('Location: https://protargeting.team/messenger_marketing/error.php');
   }

       ?>