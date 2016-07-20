<?php namespace App;
/*class Customer
{
	private $dompet;
	public function __construct(Dompet $dompet)
	{
		$this->dompet = $dompet;
	}
	public function cekDompet()
	{
		return $this->dompet->cekIsi();
	}
}*/

class Customer
{
	private $payment;

	public function __construct(PaymentMethod $payment)
	{
		$this->payment = $payment;
	}

	public function setPayment(PaymentMethod $payment)
	{
		$this->payment = $payment;
	}

	public function cekPayment()
	{
		return $this->payment->cekIsi();
	}
}

?>