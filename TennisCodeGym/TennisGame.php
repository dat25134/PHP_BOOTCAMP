<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/27/2018
 * Time: 6:20 PM
 */
const point0 = "Love";
const point1 = "Fifteen";
const point2 = "Thirty";
const point3 = "Forty";
const higher3 = "Deuce";
const All = "-All";
class TennisGame
{
    public $score = '';

    public function TheSameScore($player1_score){
            switch ($player1_score)
            {
                case 0:
                    $this->score = point0.All;
                    break;
                case 1:
                    $this->score = point1.All;
                    break;
                case 2:
                    $this->score = point2.All;
                    break;
                case 3:
                    $this->score = point3.All;
                    break;
                default:
                    $this->score = higher3;
                    break;

            }   
    }
    public function ScoreHighter4($player1Name,$player2Name,$player1_score,$player2_score){
        $minusResult = $player1_score-$player2_score;
            if ($minusResult==1) $this->score ="Advantage $player1Name";
            else if ($minusResult ==-1) $this->score ="Advantage $player2Name";
            else if ($minusResult>=2) $this->score = "Win for $player1Name";
            else $this->score ="Win for $player2Name";
    }
    public function ScoreLower4($tempScore,$player1_score,$player2_score){
        for ($i=1; $i<3; $i++)
        {
            if ($i==1) $tempScore = $player1_score;
            else { $this->score.="-"; $tempScore = $player2_score;}
            switch($tempScore)
            {
                case 0:
                    $this->score.=point0;
                    break;
                case 1:
                    $this->score.=point1;
                    break;
                case 2:
                    $this->score.=point2;
                    break;
                case 3:
                    $this->score.=point3;
                    break;
            }
        }
    }
    public function getScore($player1Name, $player2Name, $player1_score, $player2_score)
    {
        $tempScore=0;

        if ($player1_score==$player2_score) {
                $this->TheSameScore($player1_score);
        }
        else if ($player1_score>=4 || $player2_score>=4)
        {
            $this->ScoreHighter4($player1Name,$player2Name,$player1_score,$player2_score);
        }
        else
        {
           $this->ScoreLower4($tempScore,$player1_score,$player2_score);
        }
    }

    public function __toString()
    {
        return $this->score;
    }
}