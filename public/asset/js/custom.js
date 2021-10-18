

blockdates();

//block date only select date before 15 date
function blockdates(){
    
    var dateToday = new Date();
    var dtToday = dateToday;
    var ndtToday = dateToday;
    dtToday.setDate(dtToday.getDate() - 14);
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
 
    $('#positive_date').attr('max', maxDate);

    //block by default negetive, not old than positive date
    blockNegativeDate(dtToday);
    //disabled negative date
    document.getElementById("negative_date").disabled = true;
}

//block negetive, not old than aurgument date  date
function blockNegativeDate(ndate){
    ndate.setDate(ndate.getDate() + 1);
    var nmonth = ndate.getMonth() + 1;
    var nday = ndate.getDate();
    var nyear = ndate.getFullYear();
    if(nmonth < 10)
    nmonth = '0' + nmonth.toString();
    if(nday < 10)
        nday = '0' + nday.toString();
    
    var nmaxDate = nyear + '-' + nmonth + '-' + nday;
    $('#negative_date').attr('min', nmaxDate);
}

$('#positive_date').change(function (event) {

    //remove naetive date disable
    document.getElementById("negative_date").disabled = false;
    var pdate = $(this).val();
    var pdateObj = new Date(pdate);
    blockNegativeDate(pdateObj);
    
});

//Age validation, age msut be number
$('.age').keypress(function (event) {
    var keycode = event.which;
    agevalue = $(this).val();
    if (!(event.shiftKey == false &&   (keycode >= 48 && keycode <= 57))) {
        event.preventDefault();
    }
});

//Pone no must be number
$('#phone_no').keypress(function (event) {
    var keycode = event.which;
    if (!(event.shiftKey == false &&   (keycode >= 48 && keycode <= 57)))  {
        event.preventDefault();
    }
});

