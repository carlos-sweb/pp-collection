<section class="section" >
		<div class="container" >
  			<h1 class="title">{{ title }}</h1>
				<p class="subtitle">{{ subtitle }}&nbsp;<strong>
					<a href="https://github.com/carlos-sweb/pp-model">pp-model.js</a></strong>
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
</textarea>
</div>
</section>