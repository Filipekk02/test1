<? 
    extract($_POST);
    mail("888kamil888@gmail.com", "zamowienie", $wiadomosc);
    echo "mail wyslany";
?> 