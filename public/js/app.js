console.log("its working");

// javascript for search form in main page
// created a javascript to set the min attribute value to today date
document.getElementById("start-date").addEventListener('click', function() {
    let data=document.getElementById("start-date");
    let newdate=new Date().toISOString().split("T")[0]; 
    data.setAttribute('min',newdate);
 });
 // created a javascript to set the min attribute value to today date
 document.getElementById("end-date").addEventListener('click', function() {
    let dataend=document.getElementById("end-date");
    let newenddate=new Date().toISOString().split("T")[0]; 
    dataend.setAttribute('min',newenddate);
 });
//  javascript for contact form in contact page
//  creating a javscript to thank the customer when they click submit button in contact form
//   document.getElementById("contact-submit").addEventListener('onclick',function(){
//     let info=document.getElementById("contact-info");
//     info.style.display=none;
//    let thankYouInfo=document.getElementById("contact-thankyou");
//    thankYouInfo.style.display=block;
//  })


   function contactfunction(){
    document.getElementById("contact-heading").style.display="none";
    document.getElementById("contact-info").style.display="none";
    document.getElementById("contact-thankyou").style.display="block";
     }
 

