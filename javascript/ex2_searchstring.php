
<!--
	Pinyapach Charonepongwanich
	58160676
	ex2_searchstring.php
-->
<html>
<head>
<script>

 function search() {
	document.getElementById("a").innerHTML= "";
	document.getElementById("b").innerHTML= "";
  	var input = document.getElementById("input").value; // get massage
  	var search = document.getElementById("search").value; // get search
  	var sensitive = document.getElementsByName("sensitive"); // get radio value
  	var value=9; // wait take value form radio choose

  	for (var i = 0; i < sensitive.length; i++) {
    	if (sensitive[i].type === 'radio' && sensitive[i].checked) {
        	value = sensitive[i].value;     
    	}
  	}

	if(input != "" && search !="" && value !="9"){ //top
		console.log(value);
		if(value=="N") { //if No
			var count = new RegExp(search, "gi");
			var test = input.match(count);
			if(test == null){
				document.getElementById("a").innerHTML= "0";
			}else{
				var num = test.length;	
				document.getElementById("a").innerHTML= num;
			}
		}
		else if(value=="Y") { // if Yes
			var count = new RegExp(search, "g");
			var test =  input.match(count);
			if(test == null) {
				document.getElementById("a").innerHTML= "0";
			}else {
				var num = test.length;
				document.getElementById("a").innerHTML= num;
			}	
		}
	}else { // down
		document.getElementById("b").innerHTML= "Please enter a value Complte";
	}		
 }

</script>
	<h2>Ex2 Search String Non Sensitive Case</h2>
<head>
<body>
	<div>
		Text Input : <textarea id="input"></textarea> 
	</div>
	<br>
	<div>
         Sensitive Case : <input type="radio" id="Y" name="sensitive" value="Y"> Yes 
						 <input type="radio" id="N" name="sensitive" value="N"> No
	</div>
	<br>
	<div>
		Search : <input type="text" name="search" id="search"> 
	</div>
	<br>	
	<div>
		&emsp; &emsp; &emsp; &emsp;
		<button name="submit" id="submit" onclick="search()"> Search </button>	
	</div>
	<br>
	<div>
		<p id="a"> </p>
		<p id="b"> </p>
	</div>
</body>

<html>
<head>
<script>

 function search() {
	document.getElementById("a").innerHTML= "";
	document.getElementById("b").innerHTML= "";
  	var input = document.getElementById("input").value; // get massage
  	var search = document.getElementById("search").value; // get search
  	var sensitive = document.getElementsByName("sensitive"); // get radio value
  	var value=9; // wait take value form radio choose

  	for (var i = 0; i < sensitive.length; i++) {
    	if (sensitive[i].type === 'radio' && sensitive[i].checked) {
        	value = sensitive[i].value;     
    	}
  	}

	if(input != "" && search !="" && value !="9"){ //top
		console.log(value);
		if(value=="N") { //if No
			var count = new RegExp(search, "gi");
			var test = input.match(count);
			if(test == null){
				document.getElementById("a").innerHTML= "0";
			}else{
				var num = test.length;	
				document.getElementById("a").innerHTML= num;
			}
		}
		else if(value=="Y") { // if Yes
			var count = new RegExp(search, "g");
			var test =  input.match(count);
			if(test == null) {
				document.getElementById("a").innerHTML= "0";
			}else {
				var num = test.length;
				document.getElementById("a").innerHTML= num;
			}	
		}
	}else { // down
		document.getElementById("b").innerHTML= "Please enter a value Complte";
	}		
 }

</script>
	<h2>Ex2 Search String Non Sensitive Case</h2>
<head>
<body>
	<div>
		Text Input : <textarea id="input"></textarea> 
	</div>
	<br>
	<div>
         Sensitive Case : <input type="radio" id="Y" name="sensitive" value="Y"> Yes 
						 <input type="radio" id="N" name="sensitive" value="N"> No
	</div>
	<br>
	<div>
		Search : <input type="text" name="search" id="search"> 
	</div>
	<br>	
	<div>
		&emsp; &emsp; &emsp; &emsp;
		<button name="submit" id="submit" onclick="search()"> Search </button>	
	</div>
	<br>
	<div>
		<p id="a"> </p>
		<p id="b"> </p>
	</div>
</body>


</html>