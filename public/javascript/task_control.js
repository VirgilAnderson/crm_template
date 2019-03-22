// variables
var task_pane = document.getElementById('task_pane');

function set_task_pane(page){
  console.log('Setting pane to: ' + page);
  task_pane.setAttribute('data-page', page);
}

function initializeTask(){
  // Get number passed in
  var selected = 1;

  // Add active to the selected class
  var pane = document.getElementById(selected);
  pane.className = 'task active';

  // Add active to the active pagination button
  var link_id = "link_" + selected;
  var link = document.getElementById(link_id);
  link.classList.add("active");

  // Set prev and next button display
  set_prev_next_task(selected);

  // Set data pane
  set_task_pane(selected);

}

function selectTask(number){
  // Clear out all active classes
  clear_task();

  // Get number passed in
  var selected = number;

  // Add active to the selected class
  var pane = document.getElementById(selected);
  pane.classList.add("active");

  // Add active to the active pagination button
  var link_id = "link_" + selected;
  var link = document.getElementById(link_id);
  link.classList.add("active");

  // Set prev and next button display
  set_prev_next_task(selected);

  // Set data pane
  set_task_pane(selected);
}

function clear_task(){
  // get all task elements
  var element = document.getElementsByClassName('task active');

  // Clear elements
  for(var i=0; i <= element.length; i++){
      element[i].className = 'task';
  }

  // Get all active task pagination links
  var link_element = document.getElementsByClassName('page-item task_link active');

  // Clear elements
  for(var i=0; i <= link_element.length; i++) {
    link_element[i].className = 'page-item task_link';
  }
}

function next_task_pane() {
  // Get current page
  var current_page = Number(document.getElementById('task_pane').getAttribute('data-page'));
  var next_page = current_page + 1;

  // Add one and call set page function
  selectTask(next_page);
}

function prev_task_pane(){
  // Get current page
  var current_page = Number(document.getElementById('task_pane').getAttribute('data-page'));
  var prev_page = current_page - 1;

  // Add one and call set page function
  selectTask(prev_page);
}

function hide_prev_task_button(){
  button = document.getElementById('prev_task_button');
  button.style.display = 'none';
}

function hide_next_task_button(){
  button = document.getElementById('next_task_button');
  button.style.display = 'none';
}

function show_prev_task_button(){
  button = document.getElementById('prev_task_button');
  button.style.display = 'block';
}

function show_next_task_button(){
  button = document.getElementById('next_task_button');
  button.style.display = 'block';
}

function set_prev_next_task(page){
  // Set page var to int
  var current = Number(page);

  //get total number of panes
  var total = Number(document.getElementById('task_pane').getAttribute('total-panes'));

  console.log(total);

  // if current page = 1 hide prev else show
  if(current == 1){
    hide_prev_task_button();
  } else {
    show_prev_task_button();
  }

  // if current page = total panes hide next else show
  if(current == total){
    hide_next_task_button();
  } else {
    show_next_task_button();
  }
}

// Count how many links
var link_count = document.getElementsByClassName('task').length;
if(link_count > 0) {
  // Initialize list
  initializeTask();
}
