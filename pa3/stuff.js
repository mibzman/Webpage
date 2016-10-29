	var counter = 0;
	function LinkButton(){
		var newbutton = document.createElement('input');
		counter++;
		newbutton.id = counter;
		newbutton.class = "btn";
		newbutton.type = "button";
		newbutton.value = document.getElementById('buttonText').value;
		
		//this is intentional.  using the DOM model, newbutton.onclick expects a method
		//if we set it as an explicit string it will work in other files
		newbutton.setAttribute('onclick', "window.open('http://" + document.getElementById('buttonLink').value + "');");
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

	function OpenPage(){
		var myWindow=window.open('');
		myWindow.document.write(document.getElementById('webpage').innerHTML);
		myWindow.document.write("<SCRIPT src='stuff.js'/>")
	}

	function MakeLink(){
		var newLink = document.createElement('a');
                counter++;
                newLink.id = counter;
                var text = document.createTextNode(document.getElementById('linkText').value);
                newLink.appendChild(text);
		newLink.href = "http://" + document.getElementById('linkLink').value;
                document.getElementById('webpage').appendChild(newLink);

	}

