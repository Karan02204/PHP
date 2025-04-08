<?php 
// dice roll battle with php operators

// Function to simulate a dice roll
function rollDice() {
    return rand(1, 6);
}

// Simulate two players rolling a dice
$player1Roll = rollDice();
$player2Roll = rollDice();

// Display the results
echo "Player 1 rolled: " . $player1Roll . "<br>";
echo "Player 2 rolled: " . $player2Roll . "<br>";

// Determine the winner
if ($player1Roll > $player2Roll) {
    echo "Player 1 wins!";
} elseif ($player1Roll < $player2Roll) {
    echo "Player 2 wins!";
} else {
    echo "It's a tie!";
}
?>