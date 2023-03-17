 function darkMode() {  
  let element = document.body;  
  let darkModeActivated = element.classList.toggle("dark-mode"); 

  if(darkModeActivated) {
    localStorage.setItem("darkMode","on")
  }
  else {
    localStorage.removeItem("darkMode")
  }
}

if(localStorage.getItem("darkMode")) {
  darkMode()
}

/*function lightMode() {  
    var element = document.body;  
    var content = document.getElementById("DarkModetext");
    element.className = "light-mode";  
    content.innerText = "Dark Mode is OFF";
    element.classList.toggle("light-mode"); 
 
  if(content) {
    localStorage.setItem("lightMode","off")
  }
  else {
    localStorage.removeItem("lightMode")
  }
}

if(localStorage.getItem("lightMode")) {
  lightMode()
}
*/

/*
  function darkMode() {  
    var element = document.body;  
    var content = element.classList.toggle("dark-mode");  


    if(content) {
      localStorage.setItem("darkMode","on")
    }
    else {
      localStorage.removeItem("darkMode")
    }
    if(localStorage.getItem("darkMode")) {
    darkMode()}
  } 
  
  function lightMode() {  
      var element = document.body;  
      var content =element.classList.toggle("light-mode");  
  
  
    if(content) {
      localStorage.setItem("lightMode","on")
    }
    else {
      localStorage.removeItem("lightMode")
    }
    if(localStorage.getItem("lightMode")) {
    lightMode() }
  }
  */