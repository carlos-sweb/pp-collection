<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.57.0/codemirror.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.57.0/theme/ayu-mirage.min.css" integrity="sha512-McHJYTvQc4LZQBg2bCgKgDbvGWaSe2ZiDbc3UoMS+ihFI103kl54eKblXb8tBtwhLAh0Yoogy8VXkmZTekMlzA==" crossorigin="anonymous" />
	<style>
.underline{
	text-decoration:underline;
}		
.CodeMirror { 
  border-radius:10px;
  width:100%; 
  height: auto;
  -webkit-box-shadow: 0 3px 1px -2px rgba(0,0,0,.2), 0 2px 2px 0 rgba(0,0,0,.14), 0 1px 5px 0 rgba(0,0,0,.12);
    box-shadow: 0 3px 1px -2px rgba(0,0,0,.2), 0 2px 2px 0 rgba(0,0,0,.14), 0 1px 5px 0 rgba(0,0,0,.12);
}
</style>
	<title>pp-collection.js</title>
</head>
<body>
<section class="section" >
<div class="container" >

	<h1 class="title">
        pp-collection.js
      </h1>
      <p class="subtitle">
        Simple Collection of <strong><a href="https://github.com/carlos-sweb/pp-model">pp-model.js</a></strong>
      </p>
      <p>Data generate by&nbsp;<a href="https://www.json-generator.com">https://www.json-generator.com</a></p><hr>



<p class="title is-3" >Initialize</p>
<textarea code >//Here declare model
var model = new ppModel();
// Here declare collection and defined model use
var modelCollection = ppCollection({
  "model" : model
});
// Created model using data array
var mc = new modelCollection(data);
</textarea><hr>

<p class="title is-4 underline" >forEach:<span class="has-text-info" >&nbsp;[Function]</span></p>
<p>Native Function.</p><hr>

<p class="title is-4 underline" >filter:<span class="has-text-info" >&nbsp;[Function]</span></p>
<p>Native Function.</p><hr>

<p class="title is-4 underline" >at:<span class="has-text-info" >&nbsp;[Function]</span></p>
<p>Native Function.</p><hr>

<p class="title is-4 underline" >getAll:<span class="has-text-info" >&nbsp;[Function]</span></p>
<p>Native Function.</p><hr>

<p class="title is-4 underline" >push:<span class="has-text-info" >&nbsp;[Function]</span></p>
<p>Native Function.</p><hr>

<p class="title is-4 underline" >pop:<span class="has-text-info" >&nbsp;[Function]</span></p>
<p>Native Function.</p><hr>

<p class="title is-4 underline" >unshift:<span class="has-text-info" >&nbsp;[Function]</span></p>
<p>Native Function.</p><hr>

<p class="title is-4 underline" >shift:<span class="has-text-info" >&nbsp;[Function]</span></p>
<p>Native Function.</p><hr>

<p class="title is-4 underline" >length:<span class="has-text-info" >&nbsp;[Function]</span></p>
<p>Native Function.</p><hr>

<p class="title is-4 underline" >sort:<span class="has-text-info" >&nbsp;[Function]</span></p>
<p>Native Function.</p><hr>

<p class="title is-4 underline" >pluck:<span class="has-text-info" >&nbsp;[Function]</span></p>
<p>Native Function.</p><hr>


<p class="title is-4 underline" >where:<span class="has-text-info" >&nbsp;[Function]</span></p>
<p>Native Function.</p><hr>

<p class="title is-4 underline" >findWhere:<span class="has-text-info" >&nbsp;[Function]</span></p>
<p>Native Function.</p><hr>

<p class="title is-4 underline" >parse:<span class="has-text-info" >&nbsp;[Function]</span></p>
<p>Native Function.</p><hr>

<p class="title is-2 underline" >Example:</p>


<div class="tabs">
  <ul>
    <li tab="js" class="is-active" onclick="showCodejs()"><a>Javascript</a></li>
    <li tab="html" onclick="showCodehtml()" ><a>HTML</a></li>    
  </ul>
</div>

<script>	
	var tabs = document.querySelectorAll("[tab]");
	tabs.forEach((tab)=>{
		tab.addEventListener("click",( ETab )=>{			
			Array.from(ETab.currentTarget.parentElement.children).forEach(function(li){
				if( li.classList.contains("is-active") ){
					li.classList.remove("is-active");
				}				
			});
			ETab.currentTarget.classList.add("is-active");
		});
	});
</script>

<textarea code id="codejs" >//...........
var mc = new modelCollection(data);
/**
HTML Code
&#60;table class="table" &#62;
	&#60;tbody id="tableRows" &#62;					
	&#60;/tbody&#62;
&#60;/table&#62;
**/
let element = document.getElementById("tableRows");

let tableRows = "";

var printTableRows = function( el ){
	
	// You could also use mc.forEach
	mc.getAll().forEach((Model)=>{

		tableRows +="&#60;tr&#62;";

		tableRows +="&#60;td&#62;&#60;img src='"+Model.get("picture")+"' >&#60;&#47;td&#62;";

		tableRows +="&#60;td&#62;"+Model.get("name")+"&#60;&#47;td&#62;&#60;td&#62;"+Model.get("email")+"&#60;&#47;td&#62;";

		tableRows +="&#60;td&#62;"+Model.get("balance")+"&#60;&#47;td&#62;";

		tableRows +="&#60;&#47;tr&#62;";

	});

	el.innerHTML = tableRows;

}

printTableRows( element );
//...........</textarea><br>
<textarea code id="codehtml" >&#60;table class="table" &#62;
	&#60;tbody id="tableRows" &#62;					
	&#60;/tbody&#62;
&#60;/table&#62;</textarea>
<hr>
<p class="title is-3 underline" >Result</p>

<form >
	<div class="field">
		<input id="search" class="input" type="text" autocomplete="off" >
	</div>
</form>


<table class="table" >
	<tbody id="tableRows" >					
	</tbody>
</table>


</div>
</section>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.57.0/codemirror.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.57.0/mode/javascript/javascript.min.js" integrity="sha512-9miXlEjnHTF+nVGdc2IGOLGTFW2wWkWbd1/7Ltlre+dM53ZSCUQ/PNN+jtsmYqr3ndiD5RW6XQJUm/Hz8JvyOQ==" crossorigin="anonymous"></script>

<script type="text/javascript" src="data.js" ></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pp-model.js@1.0.4/pp-model.min.js" ></script>

<script type="text/javascript" src="../pp-collection.js?v=<?=rand(0,5000000000000)?>" ></script>
<script type="text/javascript" src="index.js?v=<?=rand(0,5000000000000)?>"></script>
</body>
</html>