  function activateBar() {
    showHide();
  }

  function showHide(){
    let searchbar=document.getElementById("searchContainer");
    let addicon=document.getElementById("add");
    let icon=document.getElementById("icon")
    if (searchbar.style.display == "flex") {
        searchbar.style.display="none";
        addicon.style.display="flex";
        icon.setAttribute('class', 'fa-solid fa-magnifying-glass');
    } else {
        searchbar.style.display="flex";
        addicon.style.display="none";
        icon.setAttribute('class', 'fas fa-user-plus');
    }
  }
