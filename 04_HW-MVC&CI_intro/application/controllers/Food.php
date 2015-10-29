<?php 

//my top 3 favorite meals

class Food extends CI_Controller {


	public function print_food_table() 
	{
		$favs['dishes'] = array (
			0	=> array(
				'name'				=> 'strudel',
				'image' 			=> '<img src="'.base_url().'images/strudel.jpg" alt="strudel" width="250">',
				'main_ingredient' 	=> 'apples'),
			1 	=> array(
				'name'				=> 'fries',
				'image'				=> '<img src="'.base_url().'images/fries.jpg" alt="fries" width="250">',
				'main_ingredient'	=> 'potatoes'),
			2	=> array(
				'name'				=> 'ice-cream',
				'image'				=>	'<img src="'.base_url().'images/ice-cream.jpg" alt="ice-cream" width="250">',
				'main_ingredient'	=> 'cream'));
		$this->load->view('food_table_view', $favs);
	}

}