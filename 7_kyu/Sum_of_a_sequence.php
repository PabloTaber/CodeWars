<?php
function sequence_sum(int $begin, int $end, int $step): int {
    
    $total = 0;
    
    for($i=$begin; $i<=$end; $i+=$step){
      $total += $i;
    }
    
    return $total;
  }