<?php require "front_header.html"; ?>


	<body>
		<p> factorial output: </p>
		<font id = "output"></font>

<SCRIPT LANGUAGE = "Javascript">
	function TakeInput(){
		var value = parseInt(prompt("Please enter a positive number", "8"));

		if (value != null) {
                	if (value < 0) {
                        	alert("The value you entered was negative");
				return TakeInput();
                	}
        	}else {
			alert("Please enter a value");
                        return TakeInput();
		}
		return value;	
	}
	function Factorial(input){
		if (input == 0 ){
			return 1;
		}else{
			var nextValue = input - 1;
	                var output = Factorial(nextValue);
		}
		return input * output;
	}



	var val = TakeInput();

	var output = Factorial(val);

	document.getElementById("output").innerHTML = output;
	//note: many browsers limit the max font size so many large values look the same
	document.getElementById("output").size = output;
	
	if (output %2 == 0){
		 document.getElementById("output").color = "green";
	}else {
		 document.getElementById("output").color = "red";

	}

</SCRIPT>

	</body>
</html>
