// Create DOM variables
var contact_container = document.getElementById('contact_pane');


// Spinner Functions
function showSpinner() {
  var spinner = document.getElementById("spinner");
  spinner.style.display = 'block';
}

function hideSpinner() {
  var spinner = document.getElementById("spinner");
  spinner.style.display = 'none';
}

// Turn returned data to div
function appendToDiv(div, new_html) {
  // Put the new HTML into a temp div
  // This causes browser to parse it as elements.
  var temp = document.createElement('div');
  temp.innerHTML = new_html;

  // Then we can find and work with those elements.
  // Use firstElementChild b/c of how DOM treats whitespace.
  var class_name = temp.firstElementChild.className;
  var items = temp.getElementsByClassName(class_name);

  var len = items.length;
  for(i=0; i < len; i++) {
    div.appendChild(items[0]);
  }
}


// Ajax Call
function build_contact_pane() {

  showSpinner();
  var xhr = new XMLHttpRequest();
  xhr.open('GET', '../../private/shared/ajax/contact_pagination.php?contact_pane=1&uid=2', true);
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
  xhr.onreadystatechange = function () {
    if(xhr.readyState == 4 && xhr.status == 200) {
      var result = xhr.responseText;
      console.log('Result: ' + result);

      hideSpinner();
      // append results to end of blog posts
      appendToDiv(contact_container, result);

    }
  };
  xhr.send();
}

// Event Listeners

// Load first page with Ajax
build_contact_pane();
