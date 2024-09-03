<html>
<head>
	<style type="text/css">
		
	</style>
</head>
<body>
	<p id="broski"></p>
	<div>
		<input type="file" />
	</div class="output">
	<script type="text/javascript">
		const fileInput = document.querySelector("input[type=file]");
		const output = document.querySelector(".output");

		fileInput.addEventListener("change", async () => {
	  const [file] = fileInput.files;
	  filename = "N/A";
	  if (file){
	  	
	  	var filename = JSON.stringify(file.name);
	  	if (!filename.includes(".jpg") && !filename.includes(".jpeg") && !filename.includes(".png")){
	  		filename = "N/A";
	  	}
	  		$(document).ready(function () {
    		createCookie("filename", filename, "10");
		});
	  	let origin = window.location.origin;
	  	console.log(origin);
		document.getElementById("broski").innerHTML = origin;
	  	window.location.replace("create3.php");

	  }
	 });

// Function to create the cookie 
function createCookie(name, value, days) {
    let expires;

    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }

    document.cookie = escape(name) + "=" +
        escape(value) + expires + "; path=/";
}
	</script>
	

</body>
</html>