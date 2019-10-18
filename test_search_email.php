<?php                                           
$arr = ["romires84@mail.ru ","pochka6@gmail.com "];
$good_arr = [];                                                                     
$bad_arr  = [];                                                                                                                                                                                              
foreach ($arr as $item) {                                                                                                                            
    for ($i=1; $i<=1; $i++) {      
    if ($item  == TRUE) {
            if (stristr($item, 'mail.ru')) {                                                                                                                                                                 
                $good_arr[] = $item;                                                                                                                                                                    
            }
            elseif (stristr($item, 'gmail.com')) {
                $good_arr[] = $item;  
            }
            elseif (stristr($item, 'yandex.ru')) {
                $good_arr[] = $item;  
            }
            elseif (stristr($item, 'rambler.ru')) {
                $good_arr[] = $item;  
            }
            elseif (stristr($item, 'ukr.net')) {
                $good_arr[] = $item;  
            }
            elseif (stristr($item, 'meta.ua')) {
                $good_arr[] = $item;  
            }
            elseif (stristr($item, 'bk.ru')) {
                $good_arr[] = $item;  
            }
            elseif (stristr($item, 'list.ru')) {
                $good_arr[] = $item;  
            }
            elseif (stristr($item, 'ya.ru')) {
                $good_arr[] = $item;  
            }
            elseif (stristr($item, 'bk.ru')) {
                $good_arr[] = $item;  
            }
            elseif (stristr($item, 'bk.ru')) {
                $good_arr[] = $item;  
            }
            elseif (stristr($item, 'bk.ru')) {
                $good_arr[] = $item;  
            }
            else {                                                                                                                                                                                           
                $bad_arr[] = $item;                                                                                                                                                                                                                                                                    
            }                                                                                                                                                                 
        }                                                                                  
    }                                                                           
}
print_r($good_arr);      
print_r($bad_arr); 
                                                                                                                                                                                                                                               