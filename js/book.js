$(document).ready(function(){




          // hide  nav logo which only appears when nav gets stuck to top on scrolling down
          $("#nav-logo").hide();

          // slide sidebar
           $(".sidebar-nav").delay(300).show("slide", { direction: "left" }, 200);

           $('.carousel').carousel({
             interval: 5000 //changes the speed
           });

        //function to display appointment times
          var currentDate = '';
          var dayName = '';
          // $(function() {
          //     $(".dayOfWeek").hide();

          //     $('#datepicker').datepicker( {
             

          //      onSelect: function(date) {
          //     $(".dayOfWeek").hide();
          //     $('#timeLabel').html("Select Time");
          //      currentDate = date;
          //      var curDate = $(this).datepicker('getDate');
          //      dayName = $.datepicker.formatDate('DD', curDate);
          //      $("#chosenDate").html("date is " + date + " day of week is " + dayName);
          //         //adjust schedule according to the days of the week
          //          switch(dayName) {
          //           case "Monday":
          //             $('#monday').show();
          //             break;

          //             case "Tuesday":
          //            $('#tuesday').show();
          //             break;
                      
          //              case "Wednesday":
          //            $('#wednesday').show();
          //             break;

          //              case "Thursday":
          //            $('#thursday').show();
          //             break;

          //              case "Friday":
          //            $('#friday').show();
          //             break;

          //             default:
          //             $('#weekend').show();
          //          }
          //      },
          //      selectWeek: true,
          //      inline: true,
          //      startDate: '01/01/2000',
          //      firstDay: 1
          //     });
          //   });

          $(function() {
              $( "#datepicker" ).datepicker({
               minDate: 2,
               maxDate: "+3M",
                dateFormat: "DD, d MM, yy",
                onSelect: function(date) {
              $(".dayOfWeek").hide();
              $('#timeLabel').html("Select Time");
               var currentDate = date;
               var curDate = $(this).datepicker('getDate');
               dayName = $.datepicker.formatDate('DD', curDate);
               $("#chosenDate").html("date is " + date + " day of week is " + dayName);
               switch (dayName) {
                case "Monday": getShedule("monday");
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

               

                },

               beforeShowDay: function(day) {
                 var newday = day.getDay();
                  if (newday == 0 || newday == 0) {
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
              });
                });


    //function to stick navbar to top when scrolling
          $(window).scroll(function () {
          //if you hard code, then use console
          //.log to determine when you want the 
          //nav bar to stick. 
        if ($(window).scrollTop() > 143) {
          $('.navbar-default').addClass('navbar-fixed-top');
          $("#nav-logo").show('slow');
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
                     scrollTop: $('#calendar').offset().top -100
                     }, 600);
                 if($(this).attr('id') == "group-btn") {
                  //picks correct option from the calendar services dropdown menu
                  $("#selectservice").val(2).selectmenu('refresh');


                  }
                  else if($(this).attr('id') == "private-btn") {
                     $("#selectservice").val(3).selectmenu('refresh');
                   }
                  
            });

            });




   $(function() {
              $('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                  var target = $(this.hash);
                 // target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                  if (target.length) {
                    $('html, body').animate({
                      scrollTop: target.offset().top - 100
                    }, 1000);
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

// Facebook SDK for JavaScript with jQuery
 $.ajaxSetup({ cache: true });
  $.getScript('//connect.facebook.net/en_US/sdk.js', function(){
    FB.init({
      appId: '{your-app-id}',
      version: 'v2.7' // or v2.1, v2.2, v2.3, ...
    });     
    $('#loginbutton,#feedbutton').removeAttr('disabled');
    FB.getLoginStatus(updateStatusCallback);
  });



          
   });   

 // I KNOW THIS NEEDS TO BE REFACTORED CAN'T FIGURE OUT HOW YET
 //   
 // 




      // pull info from schedule.json asd displays available time depending on day of week
     function getSchedule(dayWeek){
      
      var day = dayWeek;
    $.getJSON('schedule.json', function(data) {
    var output = "<ul>";

        switch(day) {
          case "monday": 
                  $.each(data.schedule.monday, function(i, item) 
                 { 
                   output += '<li class=' + item.classType + '>' +
                    item.timeSlot + ' ' + 
                   '</li>';
                 }); break;
           case "tuesday": 
                  $.each(data.schedule.monday, function(i, item) 
                 { 
                   output += '<li class=' + item.classType + '>' +
                    item.timeSlot + ' ' + 
                   '</li>';
                 }); break;   
           case "wednesday": 
                  $.each(data.schedule.monday, function(i, item) 
                 { 
                   output += '<li class=' + item.classType + '>' +
                    item.timeSlot + ' ' + 
                   '</li>';
                 }); break; 
           case "thursday": 
                  $.each(data.schedule.monday, function(i, item) 
                 { 
                   output += '<li class=' + item.classType + '>' +
                    item.timeSlot + ' ' + 
                   '</li>';
                 }); break;   
           case "friday": 
                  $.each(data.schedule.monday, function(i, item) 
                 { 
                   output += '<li class=' + item.classType + '>' +
                    item.timeSlot + ' ' + 
                   '</li>';
                 }); break;
           case "saturday": 
                  $.each(data.schedule.monday, function(i, item) 
                 { 
                   output += '<li class=' + item.classType + '>' +
                    item.timeSlot + ' ' + 
                   '</li>';
                 }); break;
             case "sunday": 
                  $.each(data.schedule.monday, function(i, item) 
                 { 
                   output += '<li class=' + item.classType + '>' +
                    item.timeSlot + ' ' + 
                   '</li>';
                 }); break;
        }



    output += "</ul>";
    console.log(output);
    document.getElementById("schedule").innerHTML = output;
});

      }







