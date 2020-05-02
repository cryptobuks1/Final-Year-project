<div class="box box-danger">
	
	<div class="box-header with-border">
    
    	<h3 class="box-title">Customers</h3>
  
  	</div>

  	<div class="box-body">
  		
		<div class="chart-responsive">
			
			<div class="chart" id="bar-chart2" style="height: 300px;"></div>

		</div>

  	</div>

</div>

<script>

    var bar = new Morris.Bar({
        element: 'bar-chart2',
        resize: true,
        data: [
            {y: '2016', a: 100},
            {y: '2017', a: 50},
            {y: '2018', a: 20},
            {y: '2019', a: 64},
            {y: '2020', a: 73},
            {y: '2020', a: 73},
            {y: '2020', a: 73}
        ],
        barColors: ['#0af'],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['sales'],
        preUnits: '€',
        hideHover: 'auto'
    });



</script>