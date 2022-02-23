  function activateBar() {
    showHide();
  }

  function showHide(){
    let container=document.getElementById("searchContainer");
    if (container.style.display == "flex") {
        container.style.display="none";
    } else {
        container.style.display="flex";
    }
  }
