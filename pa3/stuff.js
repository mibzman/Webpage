	var counter = 0;
	function LinkButton(){
		var newbutton = document.createElement('input');
		counter++;
		newbutton.id = counter;
		newbutton.setAttribute("class", "btn");
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
		CSS += "</style>";
		 myWindow.document.write(CSS);
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

	function MakeImg(){
		var newImg = document.createElement('img');
                counter++;
                newImg.id = counter;
                newImg.src = document.getElementById('ImageLink').value;
		newImg.height = document.getElementById('ImageHeight').value;
		newImg.width = document.getElementById('ImageHeight').value;
                document.getElementById('webpage').appendChild(newImg);
	}
	
	var CSS = "<style>";
	var CSScounter = 0;
	
	function addProperty(){
		var div = document.createElement('div');
		div.style = "display:inline-block;";
		div.class = "css";
		//div.id = "css";
		div.id = CSScounter;

		var Prop = document.createElement('input');
		Prop.id = "Prop"+ CSScounter;
		Prop.type = "text";
		Prop.class = "form-control";
		Prop.placeholder = "Property";

		var Val = document.createElement('input');
		Val.id = "Val" + CSScounter;
                Val.type = "text";
		Val.class = "form-control";
                Val.placeholder = "Value";

		var col = document.createElement('b');
		col.innerHTML = ":";

		var br = document.createElement('br');
		br.id = "br" + CSScounter;

		var scol = document.createElement('b');
                scol.innerHTML = ";";
		CSScounter++;
		div.appendChild(Prop);
		div.appendChild(col);
		div.appendChild(Val);
		div.appendChild(scol);
		//div.appendChild(br);

		document.getElementById('CSSblock').appendChild(div);
	}

	function MakeCSS(){
		var selector = document.getElementById("CSSSelector");
		switch(selector.selectedIndex){
			case 0:
				CSS += "H4";
				break;
			case 1:
				CSS += "br";
				break;
			case 2:
                                CSS += "ol";
                                break;
			case 3:
                                CSS += "ul";
                                break;
			case 4:
                                CSS += "a";
                                break;
			case 5:
                                CSS += ".btn";
                                break;
			case 6:
                                CSS += "img";
                                break;
			default:
                                CSS += "unk";
		}
		CSS += "{";
		for(i=0; i < CSScounter; i++){
			CSS += document.getElementById('Prop' + i).value + ":" + document.getElementById('Val' + i).value + ";";
			document.getElementById('CSSblock').removeChild(document.getElementById(i));
		}
		CSS += "}";
		CSScounter = 0;
	}

	function RemoveCSS() {
		CSS = "<style";
	}
