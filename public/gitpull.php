<?php     
//auto push and pull stupid thing losting 
echo "getting files";                                                                    
echo exec("git status");                                            
exec("git pull https://padster2015:H097729422a!@github.com/padster2015/red-fusion.git");
    echo exec("git status");                                                                     
echo "success";                                                                 
?>  