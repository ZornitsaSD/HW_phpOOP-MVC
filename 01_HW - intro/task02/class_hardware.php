<?php 

class Hardware {
	private $model;
	private $date_production;
	private $quantity;
	private $price;
	private $expenses;

	public function __construct($prod_model, $prod_date_production, $prod_quantity, $prod_price, $product_expenses) {
		$this->model = $prod_model;
		$this->date_production = $prod_date_production;
		$this->quantity = $prod_quantity;
		$this->price = $prod_price;
		$this->expenses= $product_expenses;
	}
	public function ShowInfo() {
		echo " Model - " .$this->model;
		echo "<br>";
		echo " Release date - " .$this->date_production;
		echo "<br>";
		echo " Quantity - " .$this->quantity;
		echo "<br>";
		echo " Price - " .$this->price . " BGL ";
		echo "<br>";
		echo " Expenses - " .$this->expenses . " BGL ";
		echo "<br>";
	}
	
	public function InStock($sold, $delivered, $broken) {
		
		$date = date('Y-m');
		$diff = abs(strtotime($date) - strtotime($this->date_production));
		$diff = round($diff/60/60/24/30);
		if ($diff>24) {
			echo "In stock - for scrap " . $this->quantity . " " . $this->model;		
			echo "<br>";
			$this->quantity = 0;
			echo "In stock - fit for sale " . $this->quantity . " " . $this->model;	
			echo "<br>";	
			echo "Delivered " .$delivered . " " . $this->model;
			echo "<br>";
			echo "Sold " .$sold . " " . $this->model;
			echo "<br>";
			echo "Broken " .$broken . " " . $this->model;
			echo "<br>";

		} else {
			echo "In stock - fit for sale " . $this->quantity = $this->quantity - $sold + $delivered - $broken . " " . $this->model;	
			echo "<br>";	
			echo "Delivered " .$delivered . " " . $this->model;
			echo "<br>";
			echo "Sold " .$sold . " " . $this->model;
			echo "<br>";
			echo "Broken " .$broken . " " . $this->model;
			echo "<br>";
		}


		
	}

	private function discount() {
		$date = date('Y-m');
		if ($this->date_production != $date) {
			$diff = abs(strtotime($date) - strtotime($this->date_production));
			$diff = round($diff/60/60/24/30);	
			return $diff;	
		}
	}


	public function actualPrice() {
		$this->discount();
		echo "current discount is " . $this->discount() . "%";
		echo "<br>";
		$discount = 100 - $this->discount();
		$this->price = $this->price*$discount/100;
		echo "Discounted price is " . $this->price . " BGL";
		echo "<br>";
	}

	public function profit($sold, $broken) {
		$profit = $sold*($this->price) - $sold*$this->expenses - $broken*$this->expenses;
		echo "The profit from " . $this->model . ' on price ' . $this->price . " BGL is " . $profit . " BGL.";
	}

	public function __set($name, $value) {
		echo "Setting " . $name. " to " . $value. "<br>";
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

