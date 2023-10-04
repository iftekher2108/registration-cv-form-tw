// console.log('iftekher mahmud pervez')


// education popup show

let education =document.querySelector("form .education"),
    add_btn =document.querySelector("form button");

// console.log(add_btn);




// education popup show




// section 2 study time auto pickup

let start_date = document.querySelector("#start-date"),
    end_date = document.querySelector("#end-date"),
    durations = document.querySelector("#study-time");



function change() {  

        const start_data = new Date(start_date.value)
       const start_year = start_data.getFullYear()
    
        const end_data = new Date(end_date.value)
       const end_year = end_data.getFullYear()

        durations.value = end_year - start_year +' '+ "years"

}

// section 2 study time auto pickup


class car {
    constructor( name,roll) {
        this.name = name;
        this.roll = roll;
    
    }
}


mycar1 = new car("iftekher",200)

mycar2 = new car("mahmud",400)

console.log(mycar1,mycar2)

  






