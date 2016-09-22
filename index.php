<!--this is a test -->
<style>
ul { /*simple */
    background-color: azure;
}

H1.mainTitle { /*class */
	text-align: center
}

#testId { /*id*/
	size: 3
	font-family: "Arial", "Helvetica Neue", Helvetica, sans-serif;
	font-variant: initial
	font-style: normal;
	font-weight: normal
}

a:visited { /* psudo-class*/
    color: #9932CC;
}

</style>
		<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<H1 class="mainTitle" style="color:green;">
			Welcome to Sam Borick's Page!
		</H1>
		<H3>
			Internet Systems Programming <br>
			Assignment #1 <br>
			An Elegant Web Page  
		</H3>
		<H4>
                        I'm not feeling particularly creative, and this will be more helpful to me later
                </H4>

	</head>
	<body>
		<p>
			This is a Paragraph <br>
			with a line break
		</p>
		<blockquote>
			WOOOOOOOAH, A BLOCKQUOE
		</blockquote>
		<font id="testId">Size 3 arial</font> <br>
		<font size="2" color="Comic Sans">Comic Sans</font> <br>
		<font face="verdana" color="green">NEAT, Green text</font><br>
		<hr>
		<img src = "https://upload.wikimedia.org/wikipedia/commons/c/c4/PM5544_with_non-PAL_signals.png" height = "402" width= "602"> <br>
		<a href="https://en.wikipedia.org/wiki/Test_card" target="_blank">Click here for more info about test cards</a> <br>

	<ul>
		<li>This</li>
		<li>is</li>
		<li>an</li>
		<li>unordered</li>
		<li>list</li>
	</ul> <br>

	 <ol>
                <li>This</li>
                <li>is</li>
                <li>an</li>
                <li>ordered</li>
                <li>list</li>
        </ol>

	<table>
		<tr>
			<th>wow</td>
			<th>it's</td>
			<th>a</td>
			<th>table</td>
		</tr>
		<tr>
                        <td>cool</td>
                        <td>it's</td>
                        <td>got</td>
                        <td>rows</td>
                </tr>
		<tr>
                        <td>and</td>
                        <td>there's</td>
                        <td>some</td>
                        <td>columns</td>
                </tr>


	</table>
	<br>
	<form action="action_page.php">
  		username: <input type="text" name="username"><br>
		password: <input type="password" name="password"><br>
		<input type="submit" value="Submit">
	</form>
	<br>

	<audio controls>
		<source src="mobyrunon.mp3" type="audio/mpeg">
		Your browser does not support this audio.
	</audio>

	<br>
	<hr>
	<br>

	<video width="1080" height="720" controls>
 		<source src="SampleVideo_720x480_10mb.mp4" type="video/mp4">
			Your browser does not support video
	</video>
			
	</body>
</html>
