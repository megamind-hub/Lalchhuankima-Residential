function loadAgeSelector()
{
var startyear = 1900;
var endyear = 2021;
for (var i = startyear;i<=endyear;i++){
    node=document.createElement("Option");
    textnode=document.createTextNode(i);
    node.appendChild(textnode);
    document.getElementById("yearselect").appendChild(node);
}
}

