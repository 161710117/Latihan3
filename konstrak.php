<?php
class sepatu
{
	public $namasepatu;
	public $ukuran;
	public $warna;

	public function __construct($namasepatu, $ukuran, $warna)
	{
		$this->namasepatu = $namasepatu;
		$this->ukuran = $ukuran;
		$this->warna = $warna;
	}

	public function get_namasepatu()
	{
		return $this->namasepatu;
	}
	public function get_ukuran()
	{
		return $this->ukuran;
	}
	public function get_warna()
	{
		return $this->warna;
	}
}
?>