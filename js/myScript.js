var d=Date();
document.write(d);

function loadData(pakge) {

 if(pakge == "but1"){
 
 alert(" PLAN 1 SELECTED PRESS 'Ok' TO CONTINUE");
 
 document.getElementById("para").innerHTML=" <h2> You SELECTED PLAN 1 <br> Your Time seassion Is : 8.30AM to 10.30AM <br> Your Trainer Is : Mr.K.M.S.Kularathna </h2> <br>";
   }

if(pakge == "but2"){
 
 alert(" PLAN 2 SELECTED PRESS 'Ok' TO CONTINUE");
 
 document.getElementById("para").innerHTML=" <h2> You SELECTED PLAN 2 <br> Your Time seassion Is : 11.00AM to 1.00PM <br> Your Trainer Is : Mr.G.N.K.Pusella </h2> <br>";
   }

if(pakge == "but3"){
 
 alert(" PLAN 3 SELECTED PRESS 'Ok' TO CONTINUE");

 document.getElementById("para").innerHTML=" <h2> You SELECTED PLAN 3 <br> Your Time seassion Is : 1.30PM to 3.30PM <br> Your Trainer Is : Ms.K.D.Chathurika </h2> <br>";
   }

if(pakge == "but4"){
 
 alert(" PLAN 4 SELECTED PRESS 'Ok' TO CONTINUE");
  
 document.getElementById("para").innerHTML=" <h2> You SELECTED PLAN 4 <br> Your Time seassion Is : 4.00PM to 6.00PM <br> Your Trainer Is : Mr.C.A.Ariyadasa </h2> <br>";
   }
}


function loadData1(pakge) {

 if(pakge == "but1"){
 
 alert(" USER 1 SELECTED PRESS 'Ok' TO CONTINUE");
 document.getElementById("img").src = "images/us1.jpg";
 document.getElementById("para").innerHTML=" <h2> ACCOUNT DETAILS <br><br> User Name : D.k.S.Anura <br> Age : 15 <br> Trainer Name  : Mr.K.M.S.Kularathna <br> Selected Plan : Plan 1 </h2> <br>";
   }

if(pakge == "but2"){
 
 alert(" USER 2 SELECTED PRESS 'Ok' TO CONTINUE");
 document.getElementById("img").src = "../images/us2.jpg";
 document.getElementById("para").innerHTML=" <h2> ACCOUNT DETAILS <br><br> User Name : A.D.Sunil <br> Age : 19 <br> Trainer Name  : Mr.C.A.Ariyadasa <br> Selected Plan : Plan 4 </h2> <br>";
   }

if(pakge == "but3"){
 
 alert(" USER 3 SELECTED PRESS 'Ok' TO CONTINUE");
 document.getElementById("img").src = "../images/us3.jpg";
 document.getElementById("para").innerHTML=" <h2> ACCOUNT DETAILS <br><br> User Name : K.S.Kanchana <br> Age : 35 <br> Trainer Name  : Ms.K.D.Chathurika <br> Selected Plan : Plan 3 </h2> <br>";
   }

if(pakge == "but4"){
 
 alert(" USER 4 SELECTED PRESS 'Ok' TO CONTINUE");
 document.getElementById("img").src = "../images/us4.jpg";
 document.getElementById("para").innerHTML=" <h2> ACCOUNT DETAILS <br><br> User Name : M.A.Dasun <br> Age : 20 <br> Trainer Name  : Mr.G.N.K.Pusella <br> Selected Plan : Plan 2 </h2> <br>";
   }
}
