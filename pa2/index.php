<?php require "front_header.html"; ?>


	<body>
		<p> factorial output: </p>
		<font id = "output"></font>

		<form>
			Enter email:
			<input id = "email1" type="text">
			<input type="button" value="Validate" onClick="Validate();">
			<font id = "email1Output"></font>
		</form>

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


	function Validate(){
		var email = document.getElementById("email1").value;
		var local = email.match(/.+(?=@)/);
		var newEmail = "";
		
		for (i = 0; i < local[0].length; i++) {
			//newEmail += local[0][i].strike();
			var output = !IsValidChar(local[0][i]);
			if (output){
				newEmail += local[0][i].strike();
			}else{
				newEmail += local[0][i];
			}
			
		}
		newEmail = CheckDoublePeriods(newEmail);
		
		var afterAt = email.substring(email.indexOf("@") + 1);
		var newAfter = "";
		var j = 0;
		if (afterAt[0] == "-"){
			newAfter += afterAt[0].strike(); //reeeealy hard to see, but not allowed
			j = 1;
                }
		
		
		for (j; j < afterAt.length; j++){
			var output = !IsValidDomainChar(afterAt[j]);
                        if (output){
                                newAfter += afterAt[j].strike();
                        }else{
                                newAfter += afterAt[j];
                        }
		}
			

		document.getElementById("email1Output").innerHTML = newEmail + "@" + newAfter;

	}
	
	function CheckDoublePeriods(newEmail){
		var doublePeriod = newEmail.indexOf("..");
                if (doublePeriod > 0){
                        var str1 = newEmail.substring(0, doublePeriod);
                        var offender = newEmail.substring(doublePeriod, doublePeriod + 2);
                        var str2 = newEmail.substring(doublePeriod + 2);
                        //newEmail = str1 + offender.strike() + str2;
                        return str1 + offender.strike() +  CheckDoublePeriods(str2);
                }else {
			return newEmail;
		}

	}

	function IsValidDomainChar(n){

		if (isNumeric(n)){
               	        return true;
                }
                if (isLetter(n)){
                        return true;
                }
                if (n.length === 1 && n.match(/[-]|[.]/)){
                        return true;
                }

                return false;
	}
	
	
	function IsValidChar(n){
	
		if (isNumeric(n)){
			return true;
		}
		if (isLetter(n)){
			return true;
		}
		if (isSpecial(n)){
			return true;
		}
	
		return false;
	}
	
	function isNumeric(n) {
		return !isNaN(parseFloat(n)) && isFinite(n);
	}
	
	function isLetter(n){
		return n.length === 1 && n.match(/[a-z]/i);
	}
	
	function isSpecial(n) {
		return n.length === 1 && n.match(/[{]|[}]|[!]|[#]|[$]|[%]|[&]|[']|[*]|[+]|[-]|[\/]|[=]|[?]|[\^]|[_]|[`]|[|]|[~]|[.]/);
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
