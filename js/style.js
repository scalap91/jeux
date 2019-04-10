var container = document.getElementById('container');
container.src = element.rel;

var tabs = document.getElementById('tabs').getElementsByTagName("a");
for (var i = 0; i < tabs.length; i++) {
  if (tabs[i].rel == element.rel)
    tabs[i].className = "selected";
  else
    tabs[i].className = "";
}
