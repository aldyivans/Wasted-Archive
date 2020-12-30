function show() {
  const dropdownList = document.getElementById("dropdownList");

  if (dropdownList.style.height === "330px") {
    dropdownList.style.height = "0px";
  } else {
    dropdownList.style.height = "330px";
  }
}
