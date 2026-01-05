!DOCTYPE html>
<html>
<head>
 <title>Dynamic Element Creation</title>
 <style>
 .new-element {
 color: blue;
 margin: 5px;
 font-size: 16px;
 }
 </style>
</head>
<body>
 <h2>Click to Add Elements</h2>
 <button onclick="addElement()">Add New Element</button>
 <div id="container"></div>
 <script>
 function addElement() {
 const newPara = document.createElement("p");
 newPara.textContent = "This is a dynamically added paragraph.";
 newPara.classList.add("new-element");
 document.getElementById("container").appendChild(newPara);
 }
 </script>
</body>
</html>