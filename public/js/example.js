//Pesron constructor 
function Person(name, lastname, dob){
   this.firstname = name;
   this.lastname = lastname;
   //this.age = age;
   this.birthday = new Date(dob);
//    this.calculateAge = ()=>{
//        const diff = Date.now() - this.birthday.getTime();
//        const ageDate = new Date(diff);
//        return Math.abs(ageDate.getFullYear() - 1970);
//    } 
}
//Prototype

Person.prototype.calculateAge = ()=>{
    const diff = Date.now() - this.birthday.getTime();
       const ageDate = new Date(diff);
       return Math.abs(ageDate.getFullYear() - 1970);
}

//Get full name
Person.prototype.getFullYear = ()=>{
    return `${this.firstname} ${this.lastname}`;
}

const Steve = new Person('Steve', '9-10-1982');
console.log(Steve.firstname);
console.log(Steve.calculateAge());