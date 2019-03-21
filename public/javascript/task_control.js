
  function initializeTask(){
    // Get number passed in
    var selected = 1;

    // Add active to the selected class
    var pane = document.getElementById(selected);
    pane.classList.add("active");
  }
  initializeTask();

  function selectTask(number){
    // Clear out all active classes
    clear();

    // Get number passed in
    var selected = number;

    // Add active to the selected class
    var pane = document.getElementById(selected);
    pane.classList.add("active");
  }

  function clear(){
    // get all elements
    var element = document.getElementsByClassName('task active');
    for(var i=0; i <= element.length; i++){
        element[i].className = 'task';
    }
  }
