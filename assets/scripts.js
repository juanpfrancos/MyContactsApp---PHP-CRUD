  var searchbar=document.getElementById("searchContainer");
  var addicon=document.getElementById("add");
  var icon=document.getElementById("icon");

  function showBar(){
    searchbar.style.display="flex";
    addicon.style.display="none";
    icon.setAttribute('class', 'fas fa-user-plus');
  }

  function showIcon(){
    searchbar.style.display="none";
    addicon.style.display="flex";
    icon.setAttribute('class', 'fa-solid fa-magnifying-glass');
  }

  function activateBar() {
    if (searchbar.style.display == "flex") {
      showIcon();
    } else {
      showBar();
    }
  }


  function Search() {
      var input = document.getElementById("search").value;
      var td;
      var lowerInput = input.toLowerCase();
      var table = document.getElementById("datatable");
      var row = table.getElementsByTagName("tr");
      var i, rowText;
      
      for (i = 0; i < row.length; i++) {
        td = row[i].getElementsByTagName("td")[0];
        if (td) {
          rowText = td.innerText;
          if (rowText.toLowerCase().indexOf(lowerInput) > -1) {
            row[i].style.display = "";
          } else {
            row[i].style.display = "none";
          }
        }
      }      
  }




  