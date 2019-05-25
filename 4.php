<?php
$a = 9;
function persegi($a){
    $startNum = rand(1,10);
    $endNum = 0;

    for ($i = 0; $i < $startNum; $i++)
    {
      $endNum += $startNum;
    }

    $sisi = $a;

    for($i=0; $i<$sisi; $i++)
    {
        for($j=0; $j<$sisi; $j++)
        {
            if($i==0 || $i==$sisi-1)
            {
                echo "x";
            }
            else
            {
                if($j==0 || $j==$sisi-1)
                {
                    echo "=";
                }
                else
                {
                    echo "x";
                }
            }
        }
        echo "<br />";
    }
}

echo persegi($a);

?>