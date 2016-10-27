<?php require "front_header.html"; ?>
	<body>

	<p class = "h1"> Sam Borick's Page Generator</p>
	<table class= "table table-bordered table-sm" style="width: 50%;">
		<thead>
			<tr>
				<th>Item</td>
				<th>Description</td>
				<th>Option</td>
				<th>Action</td>
			</tr>
		</thead>
		<tbody>
			<tr>
                                <td>HTML Text</td>
                                <td>Adds HTML plaintext</td>
                                <td>
                                        <input type="text" class="form-control" placeholder="Text" id="HTMLText">
                                </td>
                                <td><input id = "HTMLButton" value="Add" onClick="HTML();" type="button"></td>
                        </tr>

			<tr>
                                <td>HTML Line Break</td>
                                <td>Adds HTML Line Break</td>
                                <td>None</td>
                                <td><input id = "Break" value="Add" onClick="LineBreak();" type="button"></td>
                        </tr>
			
			<tr>
                                <td>HTML Ordered List</td>
                                <td>Adds an Ordered List</td>
                                <td>
					<input type="number" class="form-control" placeholder="Number of list items" id="NumOrdered" min="0">
				</td>
                                <td><input id = "Ordered" value="Add" onClick="Ordered();" type="button"></td>
                        </tr>

			<tr>
                                <td>HTML Unordered List</td>
                                <td>Adds an Unordered List</td>
                                <td>
                                        <input type="number" class="form-control" placeholder="Number of list items" id="NumunOrdered" min="0">
                                </td>
                                <td><input id = "unOrdered" value="Add" onClick="unOrdered();" type="button"></td>
                        </tr>



			<tr>
        	                <td>Button Link</td>
                	        <td>A button that opens some link in a new tab</td>
	                        <td>
					<input type="text" class="form-control" placeholder="Link to open" id="buttonLink">
					<input type="text" class="form-control" placeholder="Button Name" id="buttonText">
				</td>
				<td><input id = "linkButton" value="Add" onClick="LinkButton();" type="button"></td>
	                </tr>
		</tbody>
	</table>
	
	<br>

	<div class="panel panel-default" style="width: 50%;">
		<div class="panel-heading"><p class="h3">Your Page</p></div>
		<div id="webpage" class="panel-body"></div>
		<div class="panel-footer">
			<input class="btn-danger" id = "deleteButton" value="Delete last element" onClick="DeleteElement();" type="button">
			<input class="btn-primary" id = "linkButton" value="Open Page in new window" onClick="OpenPage();" type="button">
		</div>
	</div>

<SCRIPT LANGUAGE = "Javascript">
	var counter = 0;
	function LinkButton(){
		var newbutton = document.createElement('input');
		counter++;
		newbutton.id = counter;
		newbutton.class = "btn";
		newbutton.type = "button";
		newbutton.value = document.getElementById('buttonText').value;
		newbutton.onclick = function(){
			window.open("http://" + document.getElementById('buttonLink').value);
		};
		document.getElementById('webpage').appendChild(newbutton);

	}

	function HTML(){
		var newText = document.createElement('H4');
		counter++;
                newText.id = counter;
		var text = document.createTextNode(document.getElementById('HTMLText').value);
		newText.appendChild(text);
		document.getElementById('webpage').appendChild(newText);

	}

	function LineBreak(){
		var br = document.createElement('br');
		counter++;
                br.id = counter;
                document.getElementById('webpage').appendChild(br);
	}

	function Ordered(){
		var newList = document.createElement('ol');
		counter++;
                newList.id = counter;
		for (var i = 1; i <= document.getElementById('NumOrdered').value; i++){
			newList.appendChild(TakeListItem(i));
		}
		document.getElementById('webpage').appendChild(newList);
	}

	function unOrdered(){
                var newList = document.createElement('ul');
		counter++;
                newList.id = counter;
                for (var i = 1; i <= document.getElementById('NumunOrdered').value; i++){
                        newList.appendChild(TakeListItem(i));
                }
                document.getElementById('webpage').appendChild(newList);
        }

	function TakeListItem(i){ //taken from my pa2
		var value = prompt("Please enter the " + i + "th  member value");
		var newText = document.createElement('li');
		var text = document.createTextNode(value);
		newText.appendChild(text);
		return newText;	
	}

	function DeleteElement(){
		if(counter > 0){
			var DeadMan = document.getElementById(counter);
			document.getElementById('webpage').removeChild(DeadMan);
			counter--;
		}
	}


</SCRIPT>

	</body>
</html>
