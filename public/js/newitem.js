function newItem() {
  const newItemElement = document.querySelector("#new-item");

  const newItemElementGroup = document.createElement("div");
  const createNewInput = document.createElement("input");
  const createNewDeleteButton = document.createElement("span");
  const createNewBreakLine = document.createElement("br");

  createNewDeleteButton.innerHTML = "-";
  createNewDeleteButton.setAttribute("onclick", "destroyItem(event)");
  createNewDeleteButton.className = "destroyItem";
  createNewInput.setAttribute("name", "extra-item[]");

  newItemElementGroup.appendChild(createNewInput);
  newItemElementGroup.appendChild(createNewDeleteButton);
  newItemElementGroup.appendChild(createNewBreakLine);

  newItemElement.appendChild(newItemElementGroup);
}

function destroyItem(event) {
  event.target.parentElement.remove();
}
