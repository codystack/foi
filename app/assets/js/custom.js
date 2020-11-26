

function myFunction() {
    var input, filter, table, tr, td, i, txtValue, pseudoCode;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

$(document).ready(function() {
    let max_fields      = 5; //maximum input boxes allowed
    let wrapper   		= $(".input_fields_wrap"); //Fields wrapper
    let add_button      = $(".add_field_button"); //Add button ID
    let wrapper2   		= $(".input_fields_wrap_2"); //Fields wrapper
    let add_button2     = $(".add_field_button_2"); //Add button ID

    let x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="form-row"><div class="form-group col"><div class="form-group"><input class="form-control" type="text" name="heading[]" placeholder="heading"/></div></div> <div class="form-group col"><div class="form-group"><input class="form-control" type="text" name="body[]" placeholder="body"/></div></div><a href="#" class="remove_field"><i class="nc-icon nc-simple-remove"></i></a></div>'); //add input box
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    });

    // add course outline

    $(add_button2).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper2).append('<div class="form-row"><div class="form-group col"><div class="form-group"><input class="form-control" type="text" name="heading2[]" placeholder="heading"/></div></div> <div class="form-group col"><div class="form-group"><input class="form-control" type="text" name="body2[]" placeholder="body"/></div></div><a href="#" class="remove_field"><i class="nc-icon nc-simple-remove"></i></a></div>'); //add input box
        }
    });

    $(wrapper2).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});

//################# CHECK URL PARAM FUNCTION ##################
function queryParameters () {
    let result = {};
    let params = window.location.search.split(/\?|\&/);
    params.forEach( function(it) {
        if (it) {
            let param = it.split("=");
            result[param[0]] = param[1];
        }
    });
    return result;
}
if (queryParameters().add === "true"){
    $('#addContestantsModal').modal('show');
}
if (queryParameters().transferid){
    $('#approveTraferModal').modal('show');
}
if (queryParameters().giftid){
    $('#giftModal').modal('show');
}


// Registration Modal

if (queryParameters().success === "regsuccess"){
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Registration was successful!',
        showConfirmButton: false,
        timer: 3000
    });
    setTimeout(function(){
        let removePram = window.location.href;
        removePram = window.location.href.split("?")[0];
        window.location.assign(removePram);
    }, 2000);
    setTimeout(function(){
        window.location.href = 'login';
     }, 2000);
}

if (queryParameters().error === "regnotsuccess"){
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Email already exist!',
        showConfirmButton: false,
        timer: 3000
    });
    setTimeout(function(){
        let removePram = window.location.href;
        removePram = window.location.href.split("?")[0];
        window.location.assign(removePram);
    }, 3000);
}

if (queryParameters().error === "regwrong"){
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Something went wrong',
        showConfirmButton: false,
        timer: 3000
    });
    setTimeout(function(){
        let removePram = window.location.href;
        removePram = window.location.href.split("?")[0];
        window.location.assign(removePram);
    }, 2000);
}

// Registration Modal

// Login Modal

if (queryParameters().success === "loginsuccess"){
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Login successful!',
        showConfirmButton: false,
        timer: 3000
    });
    setTimeout(function(){
        let removePram = window.location.href;
        removePram = window.location.href.split("?")[0];
        window.location.assign(removePram);
    }, 2000);
    setTimeout(function(){
        window.location.href = 'dashboard';
     }, 2000);
}

if (queryParameters().error === "loginnotsuccess"){
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Email & Password combinations are wrong!',
        showConfirmButton: false,
        timer: 3000
    });
    setTimeout(function(){
        let removePram = window.location.href;
        removePram = window.location.href.split("?")[0];
        window.location.assign(removePram);
    }, 3000);
}

if (queryParameters().error === "loginwrong"){
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Something went wrong',
        showConfirmButton: false,
        timer: 3000
    });
    setTimeout(function(){
        let removePram = window.location.href;
        removePram = window.location.href.split("?")[0];
        window.location.assign(removePram);
    }, 2000);
}

// Login Modal


if (queryParameters().success === "updated"){
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Updated was successfully!',
        showConfirmButton: false,
        timer: 3000
    });
    setTimeout(function(){
        let removePram = window.location.href;
        removePram = window.location.href.split("?")[0];
        window.location.assign(removePram);
    }, 1000);
}
if (queryParameters().success === "deleted"){
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Deleted successfully!',
        showConfirmButton: false,
        timer: 3000
    });
    setTimeout(function(){
        let removePram = window.location.href;
        removePram = window.location.href.split("?")[0];
        window.location.assign(removePram);
    }, 1000);
}
if (queryParameters().error === "couldnotCreate"){
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'There was an error, please check your connection!',
        showConfirmButton: false,
        timer: 3000
    });
    setTimeout(function(){
        let removePram = window.location.href;
        removePram = window.location.href.split("?")[0];
        window.location.assign(removePram);
    }, 1000);
}
if (queryParameters().error === "notdeleted"){
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Something went wrong while deleting! please check your connection and try again.',
        showConfirmButton: false,
        timer: 3000
    });
    setTimeout(function(){
        let removePram = window.location.href;
        removePram = window.location.href.split("?")[0];
        window.location.assign(removePram);
    }, 1000);
}


// let numb = parseInt($("#totalAmount").text());
//
// console.log(numb);