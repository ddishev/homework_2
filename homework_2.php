<html>
    <head>
        <title>Homework 2</title>
        <style>
            body
            {
                font-size: 28;
                font-style: italic;
            }
        </style>
    </head>
    <body>
    <?php
    function is_prime($num) 
    {
        if($num==1 || $num%2==0)
        {   if($num==2)
            {
                return true;
            }
          return false;
        }
        else
        {
            for($i=3;$i<floor(($num)/2);$i+=2)
            {
                if($num%$i==0)
                {
                    return false;
                }
            }
            return true;
        }
}
    function find_3_prime($arr)
    { $count_prime=0;
    foreach ($arr as $value) 
    { 
      if(is_prime($value))
      {
          $count_prime++;
      }
      if($count_prime==3)
      {
       return $value; 
      }
      else
      {
          continue;
      }
    }
}
    function check_exists($arr,$num)
    {
    if(in_array($num, $arr))
    {
        echo "The number "."$num"." exist in the array!"."<br>";
    }
    else
    {
        echo "The number ".$num." does not exist in the array!"."<br>";
    }
}
    $arr=range(20, 1000, 37);
    $thirdprime=find_3_prime($arr);
    echo "The third prime number in array is: ".$thirdprime."<br>";
    check_exists($arr, 146);
    check_exists($arr, 284);
    check_exists($arr, 871);
    ?>
    </body>
</html>