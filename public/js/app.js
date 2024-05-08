console.log("its working");
// created a javascript to set the min attribute value to today date
document.getElementById("start-date").addEventListener('click', function() {
    let data=document.getElementById("start-date");
    let newdate=new Date().toISOString().split("T")[0]; 
    data.setAttribute('min',newdate);
 });
 document.getElementById("end-date").addEventListener('click', function() {
    let dataend=document.getElementById("end-date");
    let newenddate=new Date().toISOString().split("T")[0]; 
    dataend.setAttribute('min',newenddate);
 });
 

