$('.datetimepicker').datetimepicker({
    icons: {
        time: "fas fa-clock",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
    }
});

// ---------------------------------item_info input increment script--------------------------------------
$(document).ready(function(){
    var count = 0;
    $('#pills-livingroom .living_room_items_input').each(function (index, value) {
    count += parseInt($(value).attr('value'));
    });
    $('.living_room_item_count').text(count);
})

$(document).ready(function(){
    var count = 0;
    $('#pills-bedroom .bed_room_items_input').each(function (index, value) {
    count += parseInt($(value).attr('value'));
    });
    $('.bed_room_item_count').text(count);
})

$(document).ready(function(){
    var count = 0;
    $('#pills-kitchen .kitchen_room_items_input').each(function (index, value) {
    count += parseInt($(value).attr('value'));
    });
    $('.kitchen_room_item_count').text(count);
})

$(document).ready(function(){
    var count = 0;
    $('#pills-other .other_items_input').each(function (index, value) {
    count += parseInt($(value).attr('value'));
    });
    $('.other_item_count').text(count);
})


$(document).ready(function(){
    var count=0
    $('.data-indv-count').each(function(index,value){
        count +=parseInt($(value).text());
    });
    $('.total_items_count').text(count);
})




$('.btn-number1').click(function (e) {
    e.preventDefault();
    fieldName = $(this).attr('data-field');
    type = $(this).attr('data-type');
    var input = $("#pills-livingroom input[name='" + fieldName + "']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if (type == 'minus') {
            if (currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            }
            if (parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }
        } else if (type == 'plus') {
            input.val(currentVal + 1).change();
        }
    } else {
        input.val(input.val());
    }

});
$('.living_room_items_input').focusin(function () {
    $(this).data('oldValue', $(this).val());
});
$('.living_room_items_input').focusout(function () {
    if (isNaN($(this).val()) || $(this).val() == '') {
        alert("please enter a valid number");
    }
});
$('.living_room_items_input').change(function () {
    minValue = parseInt($(this).attr('min'));
    valueCurrent = parseInt($(this).val());
    name = $(this).attr('name');
    if (valueCurrent >= minValue || isNaN(valueCurrent)) {
        $(".btn-number1[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
});
$(".living_room_items_input").keydown(function (e) {
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode >= 35 && e.keyCode <= 39)) {
        return;
    }
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});


$('.btn-number2').click(function (e) {
    e.preventDefault();
    fieldName = $(this).attr('data-field');
    type = $(this).attr('data-type');
    var input = $("#pills-bedroom input[name='" + fieldName + "']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if (type == 'minus') {
            if (currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            }
            if (parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }
        } else if (type == 'plus') {
            input.val(currentVal + 1).change();
        }
    } else {
        input.val(input.val());
    }

});
$('.bed_room_items_input').focusin(function () {
    $(this).data('oldValue', $(this).val());
});
$('.bed_room_items_input').focusout(function () {
    if (isNaN($(this).val()) || $(this).val() == '') {
        alert("please enter a valid number");
    }
});
$('.bed_room_items_input').change(function () {
    minValue = parseInt($(this).attr('min'));
    valueCurrent = parseInt($(this).val());
    name = $(this).attr('name');
    if (valueCurrent >= minValue || isNaN(valueCurrent)) {
        $(".btn-number2[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
});
$(".bed_room_items_input").keydown(function (e) {
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode >= 35 && e.keyCode <= 39)) {
        return;
    }
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});


$('.btn-number3').click(function (e) {
    e.preventDefault();
    fieldName = $(this).attr('data-field');
    type = $(this).attr('data-type');
    var input = $("#pills-kitchen input[name='" + fieldName + "']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if (type == 'minus') {
            if (currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            }
            if (parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }
        } else if (type == 'plus') {
            input.val(currentVal + 1).change();
        }
    } else {
        input.val(input.val());
    }

});
$('.kitchen_room_items_input').focusin(function () {
    $(this).data('oldValue', $(this).val());
});
$('.kitchen_room_items_input').focusout(function () {
    if (isNaN($(this).val()) || $(this).val() == '') {
        alert("please enter a valid number");
    }
});
$('.kitchen_room_items_input').change(function () {
    minValue = parseInt($(this).attr('min'));
    valueCurrent = parseInt($(this).val());
    name = $(this).attr('name');
    if (valueCurrent >= minValue || isNaN(valueCurrent)) {
        $(".btn-number3[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
});
$(".lkitchen_room_items_input").keydown(function (e) {
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode >= 35 && e.keyCode <= 39)) {
        return;
    }
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});


$('.btn-number4').click(function (e) {
    e.preventDefault();
    fieldName = $(this).attr('data-field');
    type = $(this).attr('data-type');
    var input = $("#pills-other input[name='" + fieldName + "']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if (type == 'minus') {
            if (currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            }
            if (parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }
        } else if (type == 'plus') {
            input.val(currentVal + 1).change();
        }
    } else {
        input.val(input.val());
    }

});
$('.other_items_input').focusin(function () {
    $(this).data('oldValue', $(this).val());
});
$('.other_items_input').focusout(function () {
    if (isNaN($(this).val()) || $(this).val() == '') {
        alert("please enter a valid number");
    }
});
$('.other_items_input').change(function () {
    minValue = parseInt($(this).attr('min'));
    valueCurrent = parseInt($(this).val());
    name = $(this).attr('name');
    if (valueCurrent >= minValue || isNaN(valueCurrent)) {
        $(".btn-number4[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
});
$(".other_items_input").keydown(function (e) {
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode >= 35 && e.keyCode <= 39)) {
        return;
    }
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});


// ---------------------------------item_info input increment script end -------------------------------------



$('.input-group-hover').hover(function () {
    if ($(this).find('.input-group-prepend').hasClass('invisible')) { $(this).find('.input-group-prepend').removeClass('invisible') };
    if ($(this).find('.input-group-append').hasClass('invisible')) { $(this).find('.input-group-append').removeClass('invisible') };
}, function () {
    if ($(this).find('.input-group-prepend')) { $(this).find('.input-group-prepend').addClass('invisible') };
    if ($(this).find('.input-group-append')) { $(this).find('.input-group-append').addClass('invisible') };
})





// increase val------------decrease val----------------------//


function increaseValue() {
    var value = parseInt(document.getElementById('inc_dec_val').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('inc_dec_val').value = value;
}

function decreaseValue() {
    var value = parseInt(document.getElementById('inc_dec_val').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('inc_dec_val').value = value;
}

// ===================================================

function increaseValue2() {
    var value = parseInt(document.getElementById('inc_dec_val2').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('inc_dec_val2').value = value;
}

function decreaseValue2() {
    var value = parseInt(document.getElementById('inc_dec_val2').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('inc_dec_val2').value = value;
}

// ==============================------------

function increaseValue3() {
    var value = parseInt(document.getElementById('inc_dec_val3').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('inc_dec_val3').value = value;
}

function decreaseValue3() {
    var value = parseInt(document.getElementById('inc_dec_val3').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('inc_dec_val3').value = value;
}
// -----------------------------------
function increaseValue4() {
    var value = parseInt(document.getElementById('inc_dec_val4').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('inc_dec_val4').value = value;
}

function decreaseValue4() {
    var value = parseInt(document.getElementById('inc_dec_val4').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('inc_dec_val4').value = value;
}


// -------------------------------------------------------------//









// =============================== adding active class==========================================================//
$(document).ready(function () {
    $('.add-active').click(function () {
        if ($('.add-active').hasClass('btn-success')) { $('.add-active').removeClass('btn-success'); }
        $(this).addClass('btn-success');
    });
});


$(document).ready(function () {
    $('.add-active2').click(function () {
        if ($('.add-active2').hasClass('btn-success')) { $('.add-active2').removeClass('btn-success'); }
        $(this).addClass('btn-success');
    });
});

$(document).ready(function () {
    $('.add-active3').click(function () {
        if ($('.add-active3').hasClass('btn-success')) { $('.add-active3').removeClass('btn-success'); }
        $(this).addClass('btn-success');
    });
});

$(document).ready(function () {
    $('.add-active4').click(function () {
        if ($('.add-active4').hasClass('btn-success')) { $('.add-active4').removeClass('btn-success'); }
        $(this).addClass('btn-success');
    });
});


$(document).ready(function () {
    $('.add-active5').click(function () {
        if ($('.add-active5').hasClass('btn-success')) { $('.add-active5').removeClass('btn-success'); }
        $(this).addClass('btn-success');
    });
});

$(document).ready(function () {
    $('.add-active6').click(function () {
        if ($('.add-active6').hasClass('btn-success')) { $('.add-active6').removeClass('btn-success'); }
        $(this).addClass('btn-success');
    });
});

// ===============================active class ends=============================================================//

// google maps script----------------------------------------------------------//


function hide_city() {
    document.getElementById('city_condition').style.display = 'none';
}
function show_city() {
    document.getElementById('city_condition').style.display = 'block';
}

var from, to;

var directionsService = new google.maps.DirectionsService();
google.maps.event.addDomListener(window, 'load', function () {


    new google.maps.places.SearchBox(document.getElementById('from'));
    new google.maps.places.SearchBox(document.getElementById('to'));
    
});



function getdistance() {
    from = document.getElementById("from").value;
    to = document.getElementById("to").value;
    var service = new google.maps.DistanceMatrixService();
    service.getDistanceMatrix({
        origins: [from],
        destinations: [to],
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.METRIC,
        avoidHighways: false,
        avoidTolls: false
    }, function (response, status) {
        if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
            var distance = response.rows[0].elements[0].distance.text;
            var duration = response.rows[0].elements[0].duration.text;
            var lbl_distance = distance;
            var lbl_duration = duration;

            document.getElementById('flashmsg').innerHTML = "Calculated Distance Is : " + lbl_distance + " " + "and" + " " + "Travel Duration Is : " + lbl_duration;
        }
        else {
            alert("Unable to calculate distance.");
        }
        var info = [];
        var details = {};
        details.dist = lbl_distance;
        details.dur = lbl_duration;
        info.push(details)
        console.log(info)
        $.ajax({
            url: "./estimate/api",
            method: "post",
            data: { info: JSON.stringify(info) },
        })
    });
}
// google maps script end------------------------------------------------------//

// show msg script----------------------------------------//

function showmsg() {
    // document.getElementById('flashmsg').style.display = "block";
    document.getElementById('next').disabled = false;
    document.getElementById('next').style.pointerEvents = "auto";
}
// show msg script ends----------------------------------------------------//

// to top script-----------------------------------------------------------//

var btn = $('#to-top');

$(window).scroll(function () {
    if ($(window).scrollTop() > 100) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function () {
    $('html, body').animate({ scrollTop: 0 }, '300');
});



// to top ends--------------------------------------------------//





// count items script=========================================

// var items_value = 0;

// $(".items_input").map(function() {
//    items_value = items_value+this.value;
// }).get();




$('.living_room_items_input').on('change', function () {
    var items_value = total_items_value = 0;
    $(".living_room_items_input").each(function () {
        items_value += parseInt($(this).val());
    });
    $('.living_room_item_count').html(items_value);
    $('.living_room_item_count').attr('data-indv-value', items_value);
    $(".data-indv-count").each(function (index,value) {
        total_items_value += parseInt($(value).text());
    });
    $('.total_items_count').html(total_items_value);

});


$('.bed_room_items_input').on('change', function () {
    var items_value2 = total_items_value = 0;
    $(".bed_room_items_input").each(function () {
        items_value2 += parseInt($(this).val());
    });
    $('.bed_room_item_count').html(items_value2);
    $('.bed_room_item_count').attr('data-indv-value', items_value2);
    $(".data-indv-count").each(function (index,value) {
        total_items_value += parseInt($(value).text());
    });
    $('.total_items_count').html(total_items_value);

});

$('.kitchen_room_items_input').on('change', function () {
    var items_value3 = total_items_value = 0;
    $(".kitchen_room_items_input").each(function () {
        items_value3 += parseInt($(this).val());
    });
    $('.kitchen_room_item_count').html(items_value3);
    $('.kitchen_room_item_count').attr('data-indv-value', items_value3);
    $(".data-indv-count").each(function (index,value) {
        total_items_value += parseInt($(value).text());
    });
    $('.total_items_count').html(total_items_value);
});

$('.other_items_input').on('change', function () {
    var items_value4 = total_items_value = 0;
    $(".other_items_input").each(function () {
        items_value4 += parseInt($(this).val());
    });
    $('.other_item_count').html(items_value4);
    $('.other_item_count').attr('data-indv-value', items_value4);
    $(".data-indv-count").each(function (index,value) {
        total_items_value += parseInt($(value).text());
    });
    $('.total_items_count').html(total_items_value);
});


// $('.living_room_item_count').on('change',function(){
//     var total_items_value = 0;
//     $(".data-indv-count").each(function() {
//         total_items_value += parseInt( $(this).attr('data-indv-value'));
//     });
// });


// count items script ends====================================








// ------------------------------------------------------------------------- admin pannel script---------------------------(table)------//
// ====================filter script---------------------------//
$(document).ready(function () {
    $("#myInput2").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable2 tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

$(document).ready(function () {
    $("#myInput4").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable4 tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

$(document).ready(function () {
    $("#myInput5").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable5 tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

$(document).ready(function () {
    $("#myInput7").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable7 tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
// ================================filter script ends======================//




// ----------------------------------------postman validation-----------------------------------------------------//
function submiting(){
  
    var name=document.getElementById("name").value;
    var email=document.getElementById("email").value;
    var phone=document.getElementById("phone").value;
    var bname=document.getElementById("bname").value;
    var bweb=document.getElementById("bweb").value;
    var bphone=document.getElementById("bphone").value;

    console.log(name,email,phone,bname,bweb,bphone)

    var data={
     name: name,
     email:email ,
     phone: phone,
     business_name: bname,
     business_contact_no: bphone,
     business_website_url: bweb,
     verification_key: "uhubukjgguib",
     is_phone_verified:0 ,
     legally_authorised: 1,
     accept_terms_conditions: 1
 }

 var jsondata=JSON.stringify(data);
 console.log(jsondata);

 fetch('http://boxigo.in/boxigo-backend-api/product/vendor_request_create_service.php',{
    headers:{"Content-Type":"application/json"},
    mode:"no-cors",
    method:"post",
    body:jsondata
 })
 .then(res=>res.json())
 .then(data=>{
    console.log(data);
 }).catch(e=>{
    console.log("error",e);
 })


}


// drop down menu in header

$(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});



// ----------------------------------------postman validation-----------------------------------------------------//