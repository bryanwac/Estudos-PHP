<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
//LC_ALL sobscreve todas configurações de localização, pra que é passada apos ela por parametro
//os parametros usados ali são pra pegar em todas as plataformas e etc

echo ucwords(strftime("%A %B"));


?>