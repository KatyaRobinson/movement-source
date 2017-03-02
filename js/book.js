$(document).ready(function(){
         DATE = '';
         DAYNAME = '';
         TIME = '';

          Datepicker();
          $("#customer-info").css("opacity", "0");
          resetForm();


          // set calensdar to display all dates
          $("#selectservice").val(1);

          // hide  nav logo which only appears when nav gets stuck to top on scrolling down
          $("#nav-logo").hide();

          // slide sidebar
           $(".sidebar-nav").delay(300).show("slide", { direction: "left" }, 200);

           $('.carousel').carousel({
             interval: 5000 //changes the speed
           });

        //function to display calandar and time slots avaiable to appointent
          var currentDate = '';
          var dayName = '';

          function Datepicker() {
              $( "#datepicker" ).datepicker({
               minDate: 2,
               maxDate: "+3M",
                /*dateFormat: "DD, d MM, yy",*/
                dateFormat: "yy-mm-dd",
                onSelect: function(date) {
              $(".dayOfWeek").hide();
              $('#timeLabel').html("Select Time");
               var currentDate = date;
               var curDate = $(this).datepicker('getDate');
               dayName = $.datepicker.formatDate('DD', curDate);
               DAY = $.datepicker.formatDate('d', curDate);
               MONTH = $.datepicker.formatDate('MM', curDate);
               YEAR = $.datepicker.formatDate('yy', curDate);
               DATE = date;
               //updates the date if user chooses a different one
              $("#selected-options").html("");
               //$("#selected-options").html("You have selected " + DATE);
               DAYNAME = dayName;
              // $("#chosenDate").html("date is " + date + " day of week is " + dayName);
               switch (dayName) {
                case "Monday": getSchedule("monday");
                                break;
                case "Tuesday": getSchedule("tuesday");
                                break;
                case "Wednesday" :getSchedule("wednesday");
                                break;
                case "Thursday" :getSchedule("thursday");
                                break;
                case "Friday" :getSchedule("friday");
                                break;
                case "Saturday" :getSchedule("saturday");
                                break;
                case "Sunday" : getSchedule("sunday");
                                break;

               }

               $("body, html").animate({ 
                     scrollTop: $('#schedule').offset().top - 200
                     }, 300);
               

                },

               beforeShowDay: function(day) {
                 var newday = day.getDay();
                  if (newday == 0) {
                 return [false, ""]
                  }
                else {
              var disabledDays = [""];   // add if days need to be disabled     
              var m = day.getMonth(), d = day.getDate(), y = day.getFullYear();
              for (i = 0; i < disabledDays.length; i++) {
              if($.inArray((m+1) + '-' + d + '-' + y,disabledDays) != -1) {
               return [false];
              }
            }
          return [true];
            }
              } 
              });
                };




// show mon, tue, and wed only
  function showGroupClassDays(day){
                    var newday = day.getDay();
                  if (newday == 0 || newday == 4 || newday == 5 || newday == 5 || newday == 6) {
                 return [false, ""]
                  }
                else {
              var disabledDays = ["10-25-2013"];        
              var m = day.getMonth(), d = day.getDate(), y = day.getFullYear();
              for (i = 0; i < disabledDays.length; i++) {
              if($.inArray((m+1) + '-' + d + '-' + y,disabledDays) != -1) {
               return [false];
              }
            }
          return [true];
            }
              } 
// show tue only
function showMatClassDays(day){
                    var newday = day.getDay();
                  if (newday == 0 || newday == 1|| newday == 3|| newday == 4 || newday == 5 || newday == 5 || newday == 6) {
                 return [false, ""]
                  }
                else {
              var disabledDays = ["10-25-2013"];        
              var m = day.getMonth(), d = day.getDate(), y = day.getFullYear();
              for (i = 0; i < disabledDays.length; i++) {
              if($.inArray((m+1) + '-' + d + '-' + y,disabledDays) != -1) {
               return [false];
              }
            }
          return [true];
            }
              } 


//show all days
function showAllDays(day){
                    var newday = day.getDay();
                  if (newday == 0) {
                 return [false, ""]
                  }
                else {
              var disabledDays = ["10-25-2013"];        
              var m = day.getMonth(), d = day.getDate(), y = day.getFullYear();
              for (i = 0; i < disabledDays.length; i++) {
              if($.inArray((m+1) + '-' + d + '-' + y,disabledDays) != -1) {
               return [false];
              }
            }
          return [true];
            }
              }           


    //function to stick navbar to top when scrolling
          $(window).scroll(function () {
          
        if ($(window).scrollTop() > 143) {
          $('.navbar-default').addClass('navbar-fixed-top');

            if($(window).width() > 800){
               $("#nav-logo").show('slow'); 
             }
        }
        if ($(window).scrollTop() < 144) {
          $('.navbar-default').removeClass('navbar-fixed-top');
          $("#nav-logo").hide('fast');
        }
  });

        // change padding of wrapper on load depending on the window width
          $(function(){
            Resize();
          });

    // move container on page resize to accomodate for sidevar menu
          $(window).resize(function(){
            Resize();

          });

          var Resize = function(){
            var $windowWidth = $(window).width();
             var wrapper = $("#wrapper");
             if ($windowWidth < 1670 && $windowWidth > 761){
              wrapper.css("padding-left", 250);
            }

            else if($windowWidth > 1670 || $windowWidth < 761){
              wrapper.css("padding-left", 0);
            }
          }



  // Scrolls down to the calendar when button is pressed on Services page
          $(function(){

                // when the Secure My Appt button is clicked 
                $(".aptRequest").click(function(){
                $("body, html").animate({ 
                     scrollTop: $('#calendar').offset().top-100
                     }, 300);
                // show group class schedule
                 if($(this).attr('id') == "group-btn") {
                  //picks correct option from the calendar services dropdown menu
                  $("#selectservice").val(2);
                   var val = getValue();
                    updateCalendar(val);

                  }
                  // show private classes
                  else if($(this).attr('id') == "private-btn") {
                     $("#selectservice").val(3).selectmenu('refresh');
                   }
                   else {
                    $("#selectservice").val(1).selectmenu('refresh');
                   }
                  
            });


            });


 $("#selectservice").change(function(){
  var val = getValue();
  updateCalendar(val);
 });

function updateCalendar(val){
   $("#schedule").html('');
   switch (val){
      case "2":  $('#datepicker').datepicker( "option", "beforeShowDay", showGroupClassDays); break;
      case "4":  $('#datepicker').datepicker( "option", "beforeShowDay", showMatClassDays); break;
      default: $('#datepicker').datepicker( "option", "beforeShowDay", showAllDays);
  }
}



  // disable days to see which days available for particular classes
  function getValue(){
   var val = $("#selectservice option:selected").val();
   return val;
  
  }



   $(function() {
              $('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                  var target = $(this.hash);
                  // target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                  if (target.length) {
                    $('html, body').animate({
                      scrollTop: target.offset().top - 100
                    }, 300);
                    return false;
                  }
                }
              });
            });

// makes sidebar list item "active" on click and press

 $(document).on("scroll", onScroll);

 $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
         var target = this.hash,
         menu = target;
        $target = $(target);
              
       /*$('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 600, function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });*/
    });

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('.sidebar-nav li a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#sidebar ul li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}



       
// the "bring me to top" arrow
$(function(){
  //Check to see if the window is top if not then display button
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.arrow').fadeIn();
    } else {
      $('.arrow').fadeOut();
    }
  });
  
  //Click event to scroll to top
  $('.arrow').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });
});




      // pull info from schedule.json asd displays available time depending on day of week
     function getSchedule(dayWeek){
      $("#schedule").html = "";
      var day = dayWeek;
    $.getJSON('schedule.json', function(data) {
    var output = "<ul>";

        switch(day) {
          case "monday": 
                  $.each(data.schedule.monday, function(i, item) 
                 { 
                   output += '<a class=' + item.classType + '>' +
                    item.timeSlot + ' ' + 
                   '</a>';
                 }); break;
           case "tuesday": 
                  $.each(data.schedule.tuesday, function(i, item) 
                 { 
                   output += '<a class=' + item.classType + '>' +
                    item.timeSlot + ' ' + 
                   '</a>';
                 }); break;   
           case "wednesday": 
                  $.each(data.schedule.wednesday, function(i, item) 
                 { 
                   output += '<a class=' + item.classType + '>' +
                    item.timeSlot + ' ' + 
                   '</a>';
                 }); break; 
           case "thursday": 
                  $.each(data.schedule.thursday, function(i, item) 
                 { 
                   output += '<a class=' + item.classType + '>' +
                    item.timeSlot + ' ' + 
                   '</a>';
                 }); break;   
           case "friday": 
                  $.each(data.schedule.friday, function(i, item) 
                 { 
                   output += '<a class=' + item.classType + '>' +
                    item.timeSlot + ' ' + 
                   '</a>';
                 }); break;
           case "saturday": 
                  $.each(data.schedule.saturday, function(i, item) 
                 { 
                   output += '<a class=' + item.classType + '>' +
                    item.timeSlot + ' ' + 
                   '</a>';
                 }); break;
             case "sunday": 
                  $.each(data.schedule.sunday, function(i, item) 
                 { 
                   output += '<a class=' + item.classType + '>' +
                    item.timeSlot + ' ' + 
                   '</>';
                 }); break;
        }



    output += "</ul>";
    document.getElementById("schedule").innerHTML = output;
});

      }

      function displaySelectedDay(){
        $("#selected-options").html("You have selected <strong>" + DAYNAME + ', ' + DAY + ' ' + MONTH + ' ' + YEAR + ', ' + TIME + "</strong>");
      }

function resetForm(){
   $(this).closest('form').find("input[type=text], textarea").val('');
}

// when timeSlot is picked
$(function(){
  $("#schedule").on('click', 'a', (function(e){
     e.preventDefault();
     $("#schedule ul a").removeClass("selected-time");
     $(this).addClass("selected-time");
     var classType = $("#selectservice option:selected").text();
    TIME = $(this).text();
       $("#customer-info").css("opacity", "1");
        $("body, html").animate({ 
                     scrollTop: $('#schedule').offset().top - 200
                     }, 300);

       displaySelectedDay();

     })

  )
     
});




});   


