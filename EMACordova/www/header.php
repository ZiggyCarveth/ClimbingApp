

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
	<!-- Javascript SDK-->
  <script src="js/jquery-1.11.1.min.js"></script> 
  <script src="js/amazon-cognito-auth.min.js"></script>
  <script src="https://sdk.amazonaws.com/js/aws-sdk-2.7.16.min.js"></script> 
  <script src="js/amazon-cognito-identity.min.js"></script>
  <script src="js/climbingApp.js"></script>

	<style>
		div.searchResults {
			background-color: lightblue;
			width: 400px;
			height: 400px;
			overflow: scroll;
		}
		table, td {
			border: 1px solid black;
		}

	</style>
  </head>
  <body>
		<?php include("header.php"); ?>



	<button id="competitions" class="btn btn-lg btn-primary btn-block" type="button" onclick="window.location.href = 'competitions.html';" >Competitions</button><br/>
	<button id="newCompetition" class="btn btn-lg btn-primary btn-block" type="button" onclick="window.location.href = 'competionCreation.html';" >New Competition</button><br/><br/>

	<div id="OrderDetails">Search:</div>
	<input type="text" id="searchTextInput"><br>


	


	<div class="searchResults">
			<table id="searchResultsTable", style="width:100%">
				<tr>
					<td>Name</td>
					<td>Location</td>
					<td>End Date</td>
					<td>Select</td>
		
				</tr>
				
			</table>

	</div>
	<script>


		$('#searchTextInput').keypress(function(event){

			var keycode = (event.keyCode ? event.keyCode : event.which);
			if(keycode == '13'){
				searchButton();	
				//searchResultsRefresh();

			}
		});
		searchResultsRefresh();
	</script>
 </body>
</html>
