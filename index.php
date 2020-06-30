<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/3/cerulean/bootstrap.min.css">
    <script>
    function showSuggestion(str){
        if(str.length === 0){
            document.querySelector('#output').innerHTML = '';
        } else {
            // Specify http request, request to the suggest.php along with a querry string to get the value we type in
            fetch(`suggest.php?q=${str}`, {method: 'GET'})
            // then to get a response from the promise and tget the text
            // since its a one line es6 return we dont need to include the word return
            .then(response => response.text())
            // embedd the text in the html
            .then(text => 
                document.querySelector('#output').innerHTML = text)
            //handle errors
            .catch(err => console.log(err));
        }
    }
        </script>
</head>
<body>
<div class="container">
	    <h1>Search Users</h1>
	    <form> 
	    	Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
	    </form>
	    <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
</div>
</body>
</html>