<?php $this->load->view('templates/header');?>
<sidebar id="left">
	<ul>
		<li>
			<?php echo '<a href="'.base_url().'methods/index">METHOD ONE</a>';?>
		</li>
		<li>
		<?php echo '<a href="'.base_url().'methods/method_two">METHOD TWO</a>';?>

		</li>
		<li>
			<a href="">link</a>
		</li>
	</ul>
</sidebar>
<sidebar id="right">
	<ul>
		<li>
			<a href="">link</a>
		</li>
		<li>
			<a href="">link</a>
		</li>
		<li>
			<a href="">link</a>
		</li>
	</ul>
</sidebar>
<main>
	<div>
		<?php $this->load->view($dynamic_view);?>
	</div>
</main>
<?php $this->load->view('templates/footer');?>

