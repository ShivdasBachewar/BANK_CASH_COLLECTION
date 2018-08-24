function sinle_agent1_report(){  
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
        document.getElementById("show_Me").innerHTML = this.responseText;
   }};
    xhttp.open("POST", "PHP/REPORT/agent_report.php", true);
   xhttp.send();
}

function sinle_subscriber_report(){
  alert('done');
}
function all_agent_report(){
  alert('done');
}
function all_subscriber_report() {
    alert('done');
}

function act_dct_agent(argument) {
    alert('done');
}
function act_dct_subscriber(argument) {
    alert('done');
}
function sinle_agent_report(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
        document.getElementById("show_Me").innerHTML = this.responseText;
   }};
    xhttp.open("POST", "PHP/REPORT/agent_report.php", true);
   xhttp.send();
}