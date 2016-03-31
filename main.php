<?php 

include("layout.php"); //this includes layout.php which contains the navbar and footer

echo(' 
	<div id="side_by_side">
	<div id="calendar_Div">
		<div class="input-group date" data-provide="datepicker-inline">
	    <input type="text" class="form-control">
	    <div class="input-group-addon">
	        <span class="glyphicon glyphicon-th"></span>
	    </div>
	</div>
		
	</div>
	<div class="table-responsive" id="for_table">
		<table class="table table-hover">
		  <thead>
		    <tr id="mainthead">
		      <th>March 31, 2016</th>
		    </tr>
		    <tr id="subthead">
		      <th>Client</th>
		      <th>Company</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>Benitez, Sasa</td>
		      <td>Ateneo de Manila University</td>
		    </tr>
		    <tr>
		      <td>Cruz, Angelica</td>
		      <td>Sari-Sari Store</td>
		    </tr>
		    <tr>
		      <td>Santos, Jose</td>
		      <td>Rainbow Shop</td>
		    </tr>
		    <tr>
		      <td>dela Costa, Horacio</td>
		      <td>Ice Cream Shop</td>
		    </tr>
		    <tr>
		      <td>Ricci, Matteo</td>
		      <td>JSEC Enterprisep</td>
		    </tr>
		  </tbody>
		</table>
	</div>
	</div>

	<div class="table-responsive" id="for_2ndtable"> 
		<table class="table table-hover">
		  <thead>
		    <tr id="mainthead">
		      <th colspan="2">Pending Payments</th>
		    </tr>
		    <tr id="subthead">
		      <th id="for_Date">Date</th>
		      <th>Client</th>
		      <th>Company</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>Jan-20-2015</td>
		      <td>Benitez, Sasa</td>
		      <td>Ateneo de Manila University</td>
		    </tr>
		    <tr>
		      <td>Feb-13-2015</td>
		      <td>Cruz, Angelica</td>
		      <td>Sari-Sari Store</td>
		    </tr>
		    <tr>
		      <td>Mar-05-2015</td>
		      <td>Santos, Jose</td>
		      <td>Rainbow Shop</td>
		    </tr>
		    <tr>
		      <td>May-21-2015</td>
		      <td>dela Costa, Horacio</td>
		      <td>Ice Cream Shop</td>
		    </tr>
		    <tr>
		      <td>July-26-2015</td>
		      <td>Ricci, Matteo</td>
		      <td>JSEC Enterprisep</td>
		    </tr>
		  </tbody>
		</table>
	</div>
');

?>