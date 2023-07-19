<?php
//funzione per generare una password con caratteri casuali presi da una stringa
function getRandomPassword($length)
{
  //stringa con numeri da 0 a 9, lettere minuscole, lettere maiuscole e simboli
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?&@';
  //prendo la lunghezza della stringa
  $charactersLength = strlen($characters);
  //sctringa password vuota
  $randomString = '';
  /* basanadomi sul numero scelto dall'utente giro nella stringa dei caratteri 
  e, prendendoli casulamente, li inserisco nella password che volgio generare */
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  //restituisco la password completa
  return $randomString;
}
