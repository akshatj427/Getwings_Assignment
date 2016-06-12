<?php

$uri = 'http://54.175.194.45:8028/posts';
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token: 1f7c82a3fdb74580afe09186a9781e22';
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($uri, false, $stream_context);


    $data = json_decode($response);

   for($j=0;$j<sizeof($data);$j++)
   {
   	echo $data[$j]->body;
    echo $data[$j]->index;

   	echo "<br/>";
   }

?>