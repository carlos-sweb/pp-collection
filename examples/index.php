<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.57.0/codemirror.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.57.0/theme/ayu-mirage.min.css" integrity="sha512-McHJYTvQc4LZQBg2bCgKgDbvGWaSe2ZiDbc3UoMS+ihFI103kl54eKblXb8tBtwhLAh0Yoogy8VXkmZTekMlzA==" crossorigin="anonymous" />
	<style>
.CodeMirror {  
  height: auto;
  -webkit-box-shadow: 0 3px 1px -2px rgba(0,0,0,.2), 0 2px 2px 0 rgba(0,0,0,.14), 0 1px 5px 0 rgba(0,0,0,.12);
    box-shadow: 0 3px 1px -2px rgba(0,0,0,.2), 0 2px 2px 0 rgba(0,0,0,.14), 0 1px 5px 0 rgba(0,0,0,.12);
}
</style>
	<title>pp-collection.js</title>
</head>
<body>

<section class="section">
    <div class="container">
      <h1 class="title">
        pp-collection.js
      </h1>
      <p class="subtitle">
        Simple Collection of <strong><a href="https://github.com/carlos-sweb/pp-model">pp-model.js</a></strong>
      </p>
      <p>Data generate by&nbsp;<a href="https://www.json-generator.com">https://www.json-generator.com</a></p>
    </div>
</section>
<section class="section" >
<div class="container" >

<p class="title is-3" style="text-decoration:underline;" >Initialize</p>
<textarea class="" id="code1" >//Here declare model
var model = new ppModel();
// Here declare collection and defined model use
var modelCollection = ppCollection({
  "model" : model
});
// Created model using data array
var mc = new modelCollection(data);</textarea>
			<hr>
			<table class="table" >
				<tbody id="myDataShow" >					
				</tbody>
			</table>

		</div>
</section>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.57.0/codemirror.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.57.0/mode/javascript/javascript.min.js" integrity="sha512-9miXlEjnHTF+nVGdc2IGOLGTFW2wWkWbd1/7Ltlre+dM53ZSCUQ/PNN+jtsmYqr3ndiD5RW6XQJUm/Hz8JvyOQ==" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pp-model.js@1.0.4/pp-model.min.js" ></script>
<script type="text/javascript" src="../pp-collection.js?v=<?=rand(0,5000000000000)?>" ></script>
<script type="text/javascript" src="index.js?v=<?=rand(0,5000000000000)?>"></script>
</body>
</html>