



 function dropdown(){
    // let button = document.getElementById('dropdown-content-button');
    let list = document.getElementById('dropdownlist');
    if(list.classList.contains('shown')){
        list.classList.remove('shown');
    }else{
        list.classList.add('shown');
    }
    console.log(list.classList.toString());
    // list.classList.toggle('shown');
}
