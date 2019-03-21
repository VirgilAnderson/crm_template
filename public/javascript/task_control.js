  function initializeTask(){
    // Get number passed in
    var selected = 1;

    // Add active to the selected class
    var pane = document.getElementById(selected);
    pane.classList.add("active");

    // Add active to the active pagination button
    var link_id = "link_" + selected;
    var link = document.getElementById(link_id);
    link.classList.add("active");
  }

  function selectTask(number){
    // Clear out all active classes
    clear();

    // Get number passed in
    var selected = number;

    // Add active to the selected class
    var pane = document.getElementById(selected);
    pane.classList.add("active");

    // Add active to the active pagination button
    var link_id = "link_" + selected;
    var link = document.getElementById(link_id);
    link.classList.add("active");
  }

  function clear(){
    // get all task elements
    var element = document.getElementsByClassName('task active');

    // Clear elements
    for(var i=0; i <= element.length; i++){
        element[i].className = 'task';
    }

    // Get all active task links
    var link_element = document.getElementsByClassName('page-item task_link active');

    // Clear elements
    for(var i=0; i <= link_element.length; i++) {
      link_element[i].className = 'page-item task_link';
    }
  }
  // Count how many links
  var link_count = document.getElementsByClassName('task_link').length;
  if(link_count > 0) {
    // Initialize list
    initializeTask();
  }
