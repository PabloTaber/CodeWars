<?php

function smaller(array $nums): array 
{

    foreach ($nums as $key => $num) 
    {
        $count = 0;
        for ($i = $key + 1; $i < count($nums); $i++) { 
            if ($num > $nums[$i]) {
                $count++;
            }
        }
        $nums[$key] = $count;
    }

  return $nums;
}