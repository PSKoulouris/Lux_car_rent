console.log("its working");

// javascript for search form in main page
// created a javascript to set the min attribute value to today date
document.getElementById("startdate").addEventListener('click', function() {
    let data=document.getElementById("startdate");
    let newdate=new Date().toISOString().split("T")[0]; 
    data.setAttribute('min',newdate);
 });
 // created a javascript to set the min attribute value to today date
 document.getElementById("enddate").addEventListener('click', function() {
    let dataend=document.getElementById("enddate");
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
document.getElementById("startdate").addEventListener('change', function() {
   let data=document.getElementById("startdate").value;
   // let newdate=new Date().toISOString().split("T")[0]; 
   // data.setAttribute('min',newdate);
   console.log(data);
});
document.getElementById("enddate").addEventListener('change', function() {
   let data=document.getElementById("enddate").value;
   // let newdate=new Date().toISOString().split("T")[0]; 
   // data.setAttribute('min',newdate);
   console.log(data);
});

document.getElementById("quote").addEventListener('click',function(){
   let startdate=document.getElementById("startdate").value;
   let enddate=document.getElementById("enddate").value;
   let rate=document.getElementById("dailyrate").value;
   let form=document.getElementById("bookingform");
   const dayone=new Date(startdate);
   const daytwo=new Date(enddate);
   const time=Math.abs(daytwo-dayone);
   const days=Math.ceil(time/(1000*60*60*24));
   console.log(days);
   const quote=rate*days;
   console.log(quote);
   // let result=document.createElement("p");
   // result.textContent=
   // form.appendChild(result);

   
   
    document.getElementById("output").innerHTML=quote;
  
   let rate1=document.getElementById("amount").setAttribute('value',quote);
   console.log(rate1);
})


   function contactfunction(){
      // e.preventdefault();
    document.getElementById("contact-heading").style.display="none";
    document.getElementById("contact-info").style.display="none";
    document.getElementById("contact-thankyou").style.display="block";
     }
     
 

  
