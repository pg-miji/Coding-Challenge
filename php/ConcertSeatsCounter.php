<?php
/**
 * In the audience seats of the concert,
 * the seats are arranged in concentric circles (same center circle) with a natural radius around the stage in the center.
 * A circle with radius 1 has 1 seat, a circle with radius 2 has 2 seats, and in this way a circle with radius D has D seats.
 *
 * In this show, we only use seats in a circle with a radius greater than or equal to D1 and less than or equal to D2 (D1 ≤ D2).
 * However, when a seat is considered a point, the seat covered by the stage center by another seat is not used, and the unused seat is used.
 *
 * Write a program that takes radius D1 and D2 as input and outputs the number of seats used.
 */
$input = [3,6];
echo countAvailableSeats($input);

/**
 * @param array $input
 * @return int
 */
function countAvailableSeats(array $input)
{
    $availableAngles = [];
    for($i = $input[0]; $i <= $input[1]; $i++){
        $distance = 360 / $i;

        $angle = 0;
        while($angle < 360){
            $angle += $distance;
            if(!in_array($angle, $availableAngles)){
                $availableAngles[] = $angle;
            }
        }
    }
    return count($availableAngles);
}
