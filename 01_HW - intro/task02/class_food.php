<?php 
class Foods {
	private $name;
	private $price;
	private $quantity;
	private $expenses;
	private $expiry_date;


	public function __construct($product_name, $product_price, $product_quantity, $product_expenses, $product_expiry_date) {
		$this->name = $product_name;
		$this->price = $product_price;
		$this->quantity = $product_quantity;
		$this->expenses = $product_expenses;
		$this->expiry_date = $product_expiry_date;
		}

	public function ShowInfo() {
		echo "<strong>" . $this->name . " </strong>";
		echo "<br>";
		echo " price - " . $this->price . " BGL";
		echo "<br>";
		echo " available quantity - " . $this->quantity;
		echo "<br>";
		echo " expenses - " . $this->expenses . " BGL ";
		echo "<br>";
		echo " expiry date - " . $this->expiry_date;
		echo "<br>";
		}

	public function InStock($sold, $delivered) {
		echo "Delivered " .$delivered . " " . $this->name;
		echo "<br>";
		echo "Sold " .$sold . " " . $this->name;
		echo "<br>";
		echo "In stock " . $this->quantity = $this->quantity - $sold + $delivered . " " . $this->name;	
		echo "<br>";	
	}
	
	private function ProfitCalc($sold) {
		$profit = $this->price*$sold - $this->expenses*$sold;
		if ($profit > 0) {
			echo "The profit from " . $this->name . " is " . $profit . " BGL";
			echo "<br>";
		}
		elseif ($profit < 0) {
			echo "No profit from " . $this->name . "";
			echo "<br>";
			echo "In debt " . abs($profit) . " BGL";
			echo "<br>";
		}
		elseif ($profit == 0) {
			echo "No profit from " . $this->name;
			echo "<br>";
		}
	}
	public function printProfit($sold) {
		$this->ProfitCalc($sold);
	}

	public function scrap() {
		
		if ($this->expiry_date <= date('d-m-y')) {
			echo "<strong>Scrapped " .$this->quantity."</strong>";
			echo "<br>";
			$this->quantity = 0;
			echo "<strong>In stock " .$this->quantity. " " .$this->name. ".</strong>";
		} else {
			echo "All ". $this->quantity ." in stock is fit for sale";
		}
	}
	public function __set($name, $value) {
		echo "Setting ". $this->name . "`s '$name' to '$value'<br>";
		if (property_exists($this, $name)) 
		{
			$this -> $name = $value;
			
		}
	}
	public function __get($name) 
	{
		echo "Getting '$name'\n";
		return $this->$name;

	}

}

