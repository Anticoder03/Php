<?php


function ChechVote($age)
{
      if ($age >= 18 && $age <= 120) {
          echo "<h1>You Can Vote.</h1>";
        } else {
          echo "<h1>You Are Not Eligible For Voting.</h1>";
      }
      
}

ChechVote(10);
ChechVote(30);
ChechVote(130);

?>