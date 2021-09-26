<?php
	class animal{
		public $jumlah_kaki,$bisa_terbang;
	} 

	class Kucing extends animal
	{
		
		function bersuara()
		{
			return "meow meow"
		}
	}


	class Anjing extends animal
	{
		
		function bersuara()
		{
			return "guk gukkk"
		}
	}

	class Elang extends animal
	{
		
		function bersuara()
		{
			return "miiipppp"
		}
	}

	class Angsa extends animal
	{
		
		function bersuara()
		{
			return "kwak kwak kwak"
		}
	}

//Kucing
	$kunpan = new Kucing;
	$kunpan->jumlah_kaki = 4;
	$kunpan->bisa_terbang ="Tidak Bisa Terbang";

	echo "kunpan adalah Kucing <br>";
	echo "Punya kaki sebanyak:" . $kunpan->jumlah_kaki . "<br>";
	echo $kunpan->bisa_terbang . "<br>";
	echo "Suaranya" . $kunpan->bersuara() . "<br>";

	echo "<br>";

//Anjing
	$mo = new Anjing;
	$mo->jumlah_kaki = 4;
	$mo->bisa_terbang ="Tidak Bisa Terbang";

	echo "mo adalah Anjing <br>";
	echo "Punya kaki sebanyak:" . $mo->jumlah_kaki . "<br>";
	echo $mo->bisa_terbang . "<br>";
	echo "Suaranya" . $mo->bersuara() . "<br>";

	echo "<br>";

//Elang
	$mou = new Elang;
	$mou->jumlah_kaki = 2;
	$mou->bisa_terbang ="Bisa Terbang";

	echo "mou adalah Elang <br>";
	echo "Punya kaki sebanyak:" . $mou->jumlah_kaki . "<br>";
	echo $mou->bisa_terbang . "<br>";
	echo "Suaranya" . $mou->bersuara() . "<br>";

	echo "<br>";

//Angsa
	$mu = new Angsa;
	$mu->jumlah_kaki = 2;
	$mu->bisa_terbang ="Bisa Terbang";

	echo "mu adalah Angsa <br>";
	echo "Punya kaki sebanyak:" . $mu->jumlah_kaki . "<br>";
	echo $mu->bisa_terbang . "<br>";
	echo "Suaranya" . $mu->bersuara() . "<br>";

?>