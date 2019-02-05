<?php

class PlanBudynkuzoknami
{
	public $ilość_okien = 0;
	
	function ustaw_ilosc_okien($nowa_ilosc_okien)
	{
		$this->ilosc_okien = $nowa_ilosc_okien;
}
function pobierz_ilosc_okien()
{
	return $this->ilosc_okien;
}

}

class planbudynkuzgarazem extends PlanBudynkuzoknami
{
	public $ilosc_miejsc_postojowych = 7;
	function ustaw_ilosc_miejsc_postojowych($nowa_ilosc_miejsc_postojowych)
	{
		$this->ilosc_miejsc_postojowych = $nowa_ilosc_miejsc_postojowych;
}
function pobierz_ilosc_miejsc_postojowych()
{
	return $this->ilosc_miejsc_postojowych;
}
}

class planbudynkupietrowego extends planbudynkuzgarazem
{
	public $ilosc_pieter = 4;
		function ustaw_ilosc_pieter($nowa_ilosc_pieter)
	{
			$this->ilosc_pieter = $nowa_ilosc_pieter; // $this to odwołanie do metody wewnatrz klasy
}
		function pobierz_ilosc_pieter()
{
			return $this->ilosc_pieter;
}
	
}


$budynek1 = new PlanBudynkuzoknami; //nowy obiekt z nazwą klasy
$budynek2 = new PlanBudynkuzoknami;
$budynek3 = new planbudynkuzgarazem;
$budynek3 = new planbudynkupietrowego;
$budynek4 = new planbudynkupietrowego;

$budynek1->ustaw_ilosc_okien(2);
$budynek2->ustaw_ilosc_okien(4);
$budynek3->ustaw_ilosc_okien(1);
$budynek3->ustaw_ilosc_pieter(1);
$budynek3->ustaw_ilosc_miejsc_postojowych(9);
$budynek4->ustaw_ilosc_okien(5);
$budynek4->ustaw_ilosc_pieter(12);

echo 'Budynek 1 ma ' .$budynek1->pobierz_ilosc_okien(). ' okna </br>';
echo 'Budynek 2 ma ' .$budynek2->pobierz_ilosc_okien(). ' okna </br>';
echo 'Budynek 3 ma ' .$budynek3->pobierz_ilosc_okien(). ' okna i garaz na ' .$budynek3->ilosc_miejsc_postojowych. ' miejsce postojowe oraz ' .$budynek3->ilosc_pieter. ' pieter <br>';
echo 'Budynek 4 ma ' .$budynek4->pobierz_ilosc_okien(). ' okien i garaz na ' .$budynek4->ilosc_miejsc_postojowych. ' miejsce postojowe oraz ' .$budynek4->ilosc_pieter. ' pieter <br>';