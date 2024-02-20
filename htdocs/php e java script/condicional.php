<?php
//Juvêncio decidiu que dependendo do clima do dia seguinte ele decidiria o que fazer. Se o dia estiver ensolarado então ele vai para a praia. Se o dia estiver chuvoso então vai para casa da mãe dele 


$clima = "ensolarado";
/*
if($clima == "ensolarado"){
    echo "vamos Juvêncio para a Praia!";
}
else{
    echo "Juvêncio vai para a casa da mamãe.";
}
*/
if($clima == "ensolarado"){
    echo "vamos Juvêncio para a Praia!";
}
else if($clima == "chuvoso"){
    echo "Juvêncio vai para a casa da mamãe.";
}
else{
    echo "Juvêncio vai tomar água";
}
?>