<?php
include "../vendor/autoload.php";

$seed1 = 0;
$seed2 = 1;
$player1 = new \App\Design\Strategy\Player("Taro", new \App\Design\Strategy\WinningStrategy($seed1));
$player2 = new \App\Design\Strategy\Player("Hana", new \App\Design\Strategy\ProbStrategy($seed2));

for ($i = 0; $i < 1000; $i++) {
    $nextHand1 = $player1->nextHand();
    $nextHand2 = $player2->nextHand();
    if ($nextHand1->isStrongerThan($nextHand2)) {
        echo sprintf("Winner:%s\n", $player1->toString());
        $player1->win();
        $player2->lose();
    } elseif ($nextHand2->isStrongerThan($nextHand1)) {
        echo sprintf("Winner:%s\n", $player2->toString());
        $player2->win();
        $player1->lose();
    } else {
        echo sprintf("Even...");
        $player1->even();
        $player2->even();
    }
}

echo sprintf("Total result:");
echo sprintf($player1->toString() . "\n");
echo sprintf($player2->toString() . "\n");