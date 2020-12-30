//active nav
const lists = document.getElementById("menuList").children;

function activeList() {
  if (window.location.pathname === currentHost) {
    lists[index].style.borderBottom = "3px solid #ccc";
  }
}

activeList();
