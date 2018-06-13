function yesaid(){
  document.getElementById('appforaid').style.display= "block";
  document.getElementById('addaidbutton').style.display= "block";

}
function noaid(){
  document.getElementById('appforaid').style.display= "none";
  document.getElementById('addaidbutton').style.display= "none";
}

function second(){
  document.getElementById("secondyearessays").style.display = "block";

}
function first(){
  document.getElementById("secondyearessays").style.display = "none";

}

var num= 1;
function addfamily(){
  num++;
  var x = document.getElementById("family");
  x.appendChild(document.createTextNode("Name:"));
  var name = document.createElement("input");
  name.type="text";
  name.name="name"+num;
  name.style="width: 165px;";
  x.appendChild(name);
  x.appendChild(document.createTextNode(" Relation:"));
  var rel = document.createElement("input");
  rel.type="text";
  rel.name="fam"+num;
  rel.style="width: 165px;";
  x.appendChild(rel);
  x.appendChild(document.createTextNode("   College:"));
  var col = document.createElement("input");
  col.type="text";
  col.name="college"+num;
  col.style="width: 165px;";
  x.appendChild(col);
  x.appendChild(document.createElement("br"));
}
var aidnum=1;
function addnewaid(){
  aidnum++;
  var x = document.getElementById("appforaid");
  var input = document.createElement("input");
  input.type = "text";
  input.name="aid"+aidnum;
  x.appendChild(input);
  x.appendChild(document.createElement('br'));
}

var scholnum=1;
function addscholarship(){
  scholnum++;
  var x = document.getElementById("recievedaid");
  x.appendChild(document.createTextNode("Name of Aid:"));
  var input = document.createElement("input");
  input.type="text";
  input.name="earnedaid"+scholnum;
  x.appendChild(input);
  x.appendChild(document.createTextNode(" Amount: "));
  var amount= document.createElement("input");
  amount.type="number";
  amount.name="aidamount"+scholnum;
  x.appendChild(amount);
  x.appendChild(document.createElement("br"));
}
function nofamily(){
  var x = document.getElementById("firsttocollege").value;
  if(x=="yes"){
    document.getElementById("family").style.display = "none";
  }
}
function yesfamily(){
  var x = document.getElementById("notfirsttocollege").value;
  if(x=="no"){
    document.getElementById("family").style.display = "block";
  }
}
var empnum=1;
function addJob(){
  empnum++;
  var x = document.getElementById('employmentcontainer');
  x.appendChild(document.createElement('br'));
  x.appendChild(document.createTextNode('Employer:'));
  var input = document.createElement("input");
  input.type="text";
  input.name="emp"+empnum;
  input.style="width: 165px;";
  x.appendChild(input);
  x.appendChild(document.createTextNode(" From:"));
  var from = document.createElement("input");
  from.type="date";
  from.name="start"+empnum;
  from.style="width: 165px";
  x.appendChild(from);
  x.appendChild(document.createTextNode(" to:"));
  var to = document.createElement("input");
  to.type="date";
  to.name="end"+empnum;
  to.style="width: 165px;";
  x.appendChild(to);
  x.appendChild(document.createElement('br'));
  x.appendChild(document.createTextNode('Hours per week:'));
  var hours = document.createElement("input");
  hours.type="number";
  hours.name="hours"+empnum;
  hours.style="width: 80px;";
  x.appendChild(hours);
  x.appendChild(document.createTextNode(" Wage($/hour):"));
  var  wage = document.createElement("input");
  wage.type="number";
  wage.name="wage"+empnum;
  wage.style="width: 80px;";

  x.appendChild(wage);
  x.appendChild(document.createElement('br'));

}
var exnum=1;
function addextracurr(){
  exnum++;
  var x = document.getElementById('extracurcontainer');
  x.appendChild(document.createElement('br'));
  x.appendChild(document.createTextNode('Activity:'));
  var input = document.createElement("input");
  input.type="text";
  input.name="extracurr"+exnum;
  input.style="width: 165px;";
  x.appendChild(input);
  x.appendChild(document.createTextNode(" From:"));
  var from = document.createElement("input");
  from.type="date";
  from.name="extrastart"+exnum;
  from.style="width: 165px;";
  x.appendChild(from);
  x.appendChild(document.createTextNode(" to:"));
  var to = document.createElement("input");
  to.type="date";
  to.name="extraend"+exnum;
  to.style="width: 165px;";
  x.appendChild(to);
  x.appendChild(document.createElement('br'));
  x.appendChild(document.createTextNode('Hours per week:'));
  var hours = document.createElement("input");
  hours.type="number";
  hours.name="extracurrhour"+exnum;
  hours.style="width: 80px;";
  x.appendChild(hours);
  x.appendChild(document.createTextNode(" Position:"));
  var  pos = document.createElement("input");
  pos.type="text";
  pos.name="extracurrpos"+exnum;
  pos.style="width: 165px;";
  x.appendChild(pos);
  x.appendChild(document.createElement('br'));

}
var volnum=1;
function addVol(){
  volnum++;
  var x = document.getElementById('volunteer');
  x.appendChild(document.createElement('br'));
  x.appendChild(document.createTextNode('Organization:'));
  var input = document.createElement("input");
  input.type="text";
  input.name="volorg"+volnum;
  input.style="width: 165px;";
  x.appendChild(input);
  x.appendChild(document.createTextNode(" From:"));
  var from = document.createElement("input");
  from.type="date";
  from.name="volstart"+volnum;
  from.style="width: 165px;";
  x.appendChild(from);
  x.appendChild(document.createTextNode(" to:"));
  var to = document.createElement("input");
  to.type="date";
  to.name="volend"+volnum;
  to.style="width:165px;";
  x.appendChild(to);
  x.appendChild(document.createElement('br'));
  x.appendChild(document.createTextNode('Hours per week:'));
  var hours = document.createElement("input");
  hours.type="number";
  hours.name="volhours"+volnum;
  hours.style="width: 80px;";
  x.appendChild(hours);
  x.appendChild(document.createTextNode(" Position:"));
  var  pos = document.createElement("input");
  pos.type="text";
  pos.name="volpos"+volnum;
  pos.style="width: 165px;";
  x.appendChild(pos);
  x.appendChild(document.createElement('br'));

}
var sportnum=1;
function addSport(){
  sportnum++;
  var x = document.getElementById('sportcontainer');
  x.appendChild(document.createElement('br'));
  x.appendChild(document.createTextNode('Sport: '));
  var input = document.createElement("input");
  input.type="text";
  input.name="sport"+sportnum;
  input.style="width: 165px;";
  x.appendChild(input);
  x.appendChild(document.createTextNode(" From:"));
  var from = document.createElement("input");
  from.type="date";
  from.name="sportstart"+sportnum;
  from.style="width: 165px;";
  x.appendChild(from);
  x.appendChild(document.createTextNode(" to:"));
  var to = document.createElement("input");
  to.type="date";
  to.name="sportend"+sportnum;
  to.style="width: 165px;";
  x.appendChild(to);
  x.appendChild(document.createElement('br'));
  x.appendChild(document.createTextNode('Hours per week:'));
  var hours = document.createElement("input");
  hours.type="number";
  hours.name="sporthours"+sportnum;
  hours.style="width: 80px;";
  x.appendChild(hours);
  x.appendChild(document.createTextNode(" Position:"));
  var  pos = document.createElement("input");
  pos.type="text";
  pos.name="sportpos"+sportnum;
  pos.style="width: 165px;";
  x.appendChild(pos);
  x.appendChild(document.createElement('br'));

}
var sibnum= 1;
function addSibling(){
  sibnum++;
  var x = document.getElementById("siblingcontainer");
  x.appendChild(document.createTextNode("Full Name:"));
  var input = document.createElement("input");
  input.type="text";
  input.name="siblingname"+sibnum;
  input.style="width: 165px;";
  x.appendChild(input);
  x.appendChild(document.createTextNode("   Age:"));
  var age = document.createElement("input");
  age.type="number";
  age.name="siblingage"+sibnum;
  age.style="width: 80px;";
  x.appendChild(age);
  x.appendChild(document.createTextNode("   School:"));
  var school = document.createElement("input");
  school.type="text";
  school.name="siblingschool"+sibnum;
  school.style="width: 165px;";
  x.appendChild(school);
  x.appendChild(document.createElement("br"));
  x.appendChild(document.createElement("br"));
}

function get_action(form){
  form.action = '/submit.php?c='+numcol+'&r='+num+'&a='+aidnum+'&s='+scholnum+'&e='+empnum+'&ex='+exnum+'&v='+volnum+'&sp='+sportnum+'&si='+sibnum;

}
function showfaq(n){
  var x = document.getElementById("faq" + n);
  var y = document.getElementById("faq_q"+n);
    if (x.style.display === "none") {
        x.style.display = "block";
        y.text = "-";
    } else {
        x.style.display = "none";
        y.text = "+";
    }

}
function hide_p_info(){
  var x = document.getElementById('p_info');
  var y = document.getElementById('p_info_link');
  if(x.style.display === "none"){
    x.style.display = "block";
    y.text = "-";
  }else{
    x.style.display = "none";
    y.text="+";
  }
}
function hide_ed_info(){
  var x = document.getElementById('ed_info');
  var y = document.getElementById('ed_info_link');
  if(x.style.display === "none"){
    x.style.display = "block";
    y.text="-";
  }else{
    x.style.display = "none";
    y.text="+";
  }
}
function hide_e_info(){
  var x = document.getElementById('e_info');
  var y = document.getElementById('e_info_link');
  if(x.style.display === "none"){
    x.style.display = "block";
    y.text="-";
  }else{
    x.style.display = "none";
    y.text="+";
  }
}
