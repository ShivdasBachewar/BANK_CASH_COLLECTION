function show_All_Agents(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("show_Me").innerHTML = this.responseText;
    }};
    xhttp.open("POST", "PHP/show_agents.php", true);
    xhttp.send();
}


function show_report(){
    var xhtt = new XMLHttpRequest();
    xhtt.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("show_Me").innerHTML = this.responseText;
    }};
    xhtt.open("POST", "PHP/report.php", true);
    xhtt.send();      
}

function manageClient(){

}

function add_new_agent(){
    var xhtt = new XMLHttpRequest();
    xhtt.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("show_Me").innerHTML = this.responseText;
    }};
    xhtt.open("POST", "PHP/add_new_agent.php", true);
    xhtt.send();      
}

function edit_delete_agent(){
    adv_search=0;
    var xhtt = new XMLHttpRequest();
    xhtt.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("show_Me").innerHTML = this.responseText;
    }};
    xhtt.open("POST", "PHP/edit_agent_detail.php", true);
    xhtt.send();      
}

function active_deactive_agent(param){
	//alert(param);
    var xhtt = new XMLHttpRequest();
    xhtt.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("show_Me").innerHTML = this.responseText;
    }};
    xhtt.open("POST", "PHP/active_deactive_agent.php?param="+param, true);
    xhtt.send();      
}


function show_home() {
    var xhtt = new XMLHttpRequest();
    xhtt.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("show_Me").innerHTML = this.responseText;
    }};
    xhtt.open("POST", "PHP/show_home.php", false);
    xhtt.send();
}

