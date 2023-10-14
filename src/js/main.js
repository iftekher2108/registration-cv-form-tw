// jquery plugin for javascripts



// form section one hide 



$("#btn-section-1").click(function(e){
    e.preventDefault()
    $("#form-section-1").animate({
        height:"0px",
        opacity:"0",
    })
    $("#form-section-2").animate({ left: "0%" })


})


// form section one hide




// form section two prev 

$("#btn-section-2-prev").click(function(e){
    e.preventDefault()
 
    $("#form-section-2").animate({ left: "100%" })
       $("#form-section-1").animate({
        opacity:"1",
        height:"100%",
    })

})


// form section two prev


// form section two hide

$("#btn-section-2").click(function(e){
    e.preventDefault()
    $("#form-section-2").animate({
        opacity:"0",
        right:"100%"})
    $("#form-section-3").animate({
        opacity:"1",
        left:"0%"})

})

// form section two hide  


// form section three prev

$("#btn-section-3-prev").click(function(e){
    e.preventDefault()
    $("#form-section-2").animate({
        opacity:"1",
        right:"0%"})
    $("#form-section-3").animate({
        opacity:"0",
        left:"100%"})

})


// form section three prev



// windows form refresh not reset data

    // local storage save value functionality

    function  local_save(id,name) {
      
    $(`#${id}`).on("input",function() {
       localStorage.setItem(`${name}`,$(`#${id}`).val()) 
    })
    $(`#${id}`).val(localStorage.getItem(`${name}`))  

    }
    // local storage save value functionality


        // form section one 
    local_save("fname","frist_name")
    local_save("lname","last_name")
    local_save("a-designation","a-designation")
    local_save("email","email")
    local_save("phone","phone")
    local_save("brith-date","brith-date")
    local_save("pre_address","pre_address")
    local_save("par_address","par_address")
    local_save("gender","gender")
    // form section one
    

    // form section two
    local_save("career-objective","career-objective")
    local_save("e-institute","e-institute")
    local_save("e-start-date","e-start-date")
    local_save("e-end-date","e-end-date")
    local_save("e-duration","e-duration")
    local_save("e-department","e-department")
    local_save("degree","degree")
    local_save("result","result")
    local_save("technical-skills","technical-skills")
    local_save("comunication-lan","comunication-lan")
    local_save("hobby","hobby")
    // form section two




    // form section three
    local_save("cariculam-activity","cariculam-activity")
    local_save("c-institute","c-institute")
    local_save("c-start-date","hobby")
    local_save("c-end-date","c-end-date")
    local_save("c-duration","c-duration")
    local_save("c-designation","c-designation")
    local_save("c-designation","c-designation")
    // form section three



    $("#photo").on("input",function(e) {
       var photo_path = e.target.files[0].name;
        localStorage.setItem("photo", `${photo_path}`);
    });

    $("#photo").val(localStorage.getItem("photo"));


// windows form refresh not reset data



$("#local-clear").on("click",function() {
    localStorage.clear();
    sessionStorage.clear()
})

console.log($("#local-clear"));




    // ajax data display

window.onload = function() {

        $("#tbody").load("./data/cv-data.php");

    }



// $("#delete").click(function(){

//     $.ajax({
//         url:"../data/delete.php",
//         method:"DELETE",
//         success: function() {
//             $("#tbody").load("./data/cv-data.php");
//         }
//     })
// });








    // ajax data display







        // $("#lname").on("blur",function() {
    //     localStorage.setItem("frist_name",$("#fname").val()) 
    // })
    // $("#fname").val(localStorage.getItem("frist_name"))


    // $("").on("",function() {
    //     localStorage.setItem("frist_name",$("#fname").val()) 
    // })
    // $("#fname").val(localStorage.getItem("frist_name"))


    // $("").on("",function() {
    //     localStorage.setItem("frist_name",$("#fname").val()) 
    // })
    // $("#fname").val(localStorage.getItem("frist_name"))



    // $("").on("",function() {
    //     localStorage.setItem("frist_name",$("#fname").val()) 
    // })
    // $("#fname").val(localStorage.getItem("frist_name"))



    // $("").on("",function() {
    //     localStorage.setItem("frist_name",$("#fname").val()) 
    // })
    // $("#fname").val(localStorage.getItem("frist_name"))



    // $("").on("",function() {
    //     localStorage.setItem("frist_name",$("#fname").val()) 
    // })
    // $("#fname").val(localStorage.getItem("frist_name"))






















//   jquery plugin for javascripts


  






