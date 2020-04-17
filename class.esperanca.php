<?php
	class Esperanca
	{
		private $i = 0;
		
		public function getN($n,$sides)
		{
			$this -> processaValor($n,$sides);
		}
		
		private function processaValor($n,$sides)
		{
			$i = $this -> i;
						
			while($i != $n)
			{
				$vetor[$i] = rand(1,$sides);
				$i++;
			}
			
			$this -> processaArray($vetor);
		}
		
		private function processaArray($vetor)
		{
			$cont = count($vetor);
			$soma = 0;

			foreach($vetor as $item)	
			{
				$soma += $item;
			}
			$this -> enviaResultado($soma/$cont);
		}
		
		public function enviaResultado($result)
		{
			echo $result;
		}
	}
?>