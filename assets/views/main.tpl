<html>
<head>
    <title>{{title}}</title>
</head>

<h1>PHPixie and Mustache test</h1>
<h2>{{title}}</h2>

<p>Date: {{current_date}}</p>
<hr/>
<p>Some message: "{{message}}"</p>
<p>Some message: "{{message | case.upper}}"</p>
<p>Some message: "{{message | case.lower}}"</p>
<p>Some message: "{{message | case.first}}"</p>

<p>Some name: "{{name}}"</p>

<h3>Item list</h3>
<ul>
{{#items}}
    <li>{{ . }}</li>
{{/items}}
</ul>

{{#is_color}}
<ul>
{{#color}}
  <li style="color:{{.}}">{{.}}</li>
{{/color}}
</ul>
{{/is_color}}

<hr/>
<p>Current date: <b>{{date}}</b></p>

