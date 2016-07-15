<?php $fruits =array('banana','mango','apple','watermelon');


foreach($fruits as $value){echo $value;}
                  

$friends = array('friend_name' => 'seedくん','area_id'=>10,'gender' =>1,'age'=>3);

echo $friends['friend_name'];

echo '<br>';

foreach($friends as $key =>$value){echo $key.':'.$value;}


?>