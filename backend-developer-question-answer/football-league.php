<?php
class LeagueTable
{
	public function __construct($players)
    {
		$this->standings = array();
		foreach($players as $index => $p)
        {
			$this->standings[$p] = array
            (
                'index' => $index,
                'games_played' => 0, 
                'score' => 0
            );
        }
	}
		
	public function recordResult($player, $score)
    {
		$this->standings[$player]['games_played']++;
		$this->standings[$player]['score'] += $score;
	}
	
	public function playerRank($rank)
    {
		// Get original array 
		$orginal = $this->standings;
		
		usort($this->standings, function($a, $b) {
			// Compare scores
		  $r = $b['score'] - $a['score'];
		  // If two players are tied on score, 
		  // then the player who has played the fewest games is ranked higher
		  if(! $r) {
			$r = $a['games_played'] - $b['games_played'];
		  }
		  // If two players are tied on score and number of games played, 
		  // then the player who was first in the list of players is ranked higher
		  if(! $r) {
			$r = $a['index'] - $b['index'];
		  }
		  return $r;        
	});
		
		// Index that got 
		$index = $this->standings[0]['index'];


		// Who was 
		$who = [];

		// Get the index of the player 
		foreach($orginal as $key=> $value) {
	
		if($value['index'] == $index) {
			
				$who[$key] = $value;
				
				break;
			}
		
	}
	
	return key($who);
	
	}
}


      
$table = new LeagueTable(array('Mike', 'john', 'Chris', 'Arnold', 'Ben'));
$table->recordResult('Mike', 1);
$table->recordResult('Mike', 3);
$table->recordResult('john', 5);
$table->recordResult('Arnold', 5);
$table->recordResult('Ben', 1);
$table->recordResult('Ben', 3);
$table->recordResult('Ben', 1);
$table->recordResult('Chris', 5);


echo "<pre>";
print_R($table->playerRank(1));
echo "</pre>";


