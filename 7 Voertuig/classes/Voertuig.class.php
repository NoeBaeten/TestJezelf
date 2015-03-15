<?php
	class Voertuig {

		private $m_sMerk;
		private $m_iAantalPassagiers;
		private $m_iAantalDeuren;

		public function __set($p_sProperty, $p_vValue) {

			switch($p_sProperty) {

				case "Merk":
				$this->m_sMerk = $p_vValue;
				break;

				case "AantalPassagiers":
					if($p_vValue > 6)
					{
						throw new Exception("Het maximum aantal passagiers is 6.");
					}
					else
					{
						$this->m_iAantalPassagiers = $p_vValue;
						break;
					}

				case "AantalDeuren":
					if($p_vValue > 1 && $p_vValue < 6)
					{
						$this->m_iAantalDeuren = $p_vValue;
						break;
					}
					else
					{
						throw new Exception("De auto moet tussen de 2 en de 5 deuren bevatten.");
					}
			}

		}

		public function __get($p_sProperty) {

			switch ($p_sProperty) {

				case "Merk":
				return $this->m_sMerk;
				break;
				
				case "AantalPassagiers":
				return $this->m_iAantalPassagiers;
				break;

				case "AantalDeuren":
				return $this->m_iAantalDeuren;
				break;
			}

		}

		public function Reserveer() {

			echo "Reservatie voor: <br />";
			echo "Merk is: " . $this->m_sMerk . "<br />";
			echo "Aantal passagiers: " . $this->m_iAantalPassagiers . "<br />";
			echo "Aantal deuren: " . $this->m_iAantalDeuren;

		}
	}
?>