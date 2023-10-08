// jquery plugin for javascripts



// windows form refresh not reset data

    // local storage save value functionality

    function  local_save(id,name) {
      
    $(`#${id}`).on("input",function() {
       localStorage.setItem(`${name}`,$(`#${id}`).val()) 
    })
    $(`#${id}`).val(localStorage.getItem(`${name}`))  

    }
    // local storage save value functionality



    if(!$("#form-section-1").hasClass("hidden")) {

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
    
    }
    else if (!$("#form-section-2").hasClass("hidden")) {

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


    }
    else {


    // form section three
    local_save("cariculam-activity","cariculam-activity")
    local_save("c-institute","c-institute")
    local_save("c-start-date","hobby")
    local_save("c-end-date","c-end-date")
    local_save("c-duration","c-duration")
    local_save("c-designation","c-designation")
    local_save("c-designation","c-designation")
    local_save("cv-resume","cv-resume")
    // form section three


    }


// windows form refresh not reset data


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


// section 2 study time auto pickup





// section 2 study time auto pickup





// class car {
//     constructor( name,roll) {
//         this.name = name;
//         this.roll = roll;
    
//     }
// }


// mycar1 = new car("iftekher",200)

// mycar2 = new car("mahmud",400)
// mycar3 = new car("pervez",600)

// console.log(mycar1,mycar2,mycar3)

  






