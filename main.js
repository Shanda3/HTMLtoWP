var listItem = document.getElementById("ourList").getElementsByTagName("li");

for (i = 0; i < listItem.length; i++) {
  listItem[i].innerHTML = "Hello world";
}
