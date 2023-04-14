<?php

return [
   'client_id' => 'AXWJupqJysrXj6Kc1kgLQa_y5uXcHa2e4LeDsmwdiIGompwccORB06S9sAxh-2dnl24Pz_EdZtDkdB50',
   'secret'    => 'EMhGofgM0eg4R-WFoKuAYzDs2VRyoJnEaKn4RndL2SzoHoBXHN6LV7j8jRvLzpUB-cNd2ehj0StAnv8e',
   'settings'  => [
      'mode' =>'sandbox',
      'http.ConnectionTimeout' => 1000,
      'log.LogEnabled' => true,
      'log.FileName'   => storage_path().'/logs/paypal.log',
      'log.LogLevel'   => 'FINE'
],

];