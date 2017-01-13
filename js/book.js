$(document).ready(function(){
          $("#nav-logo").hide();
        //function to display appointment times
          var currentDate = '';
          var dayName = '';
          $(function() {
              $(".dayOfWeek").hide();
              $('#datepicker').datepicker( {
               onSelect: function(date) {
              $(".dayOfWeek").hide();
              $('#timeLabel').html("Select Time");
               currentDate = date;
               var curDate = $(this).datepicker('getDate');
               dayName = $.datepicker.formatDate('DD', curDate);
               $("#chosenDate").html("date is " + date + " day of week is " + dayName);
                  //adjust schedule according to the days of the week
                   switch(dayName) {
                    case "Monday":
                      $('#monday').show();
                      break;

                      case "Tuesday":
                     $('#tuesday').show();
                      break;
                      
                       case "Wednesday":
                     $('#wednesday').show();
                      break;

                       case "Thursday":
                     $('#thursday').show();
                      break;

                       case "Friday":
                     $('#friday').show();
                      break;

                      default:
                      $('#weekend').show();
                   }
               },
               selectWeek: true,
               inline: true,
               startDate: '01/01/2000',
               firstDay: 1
              });
              var div = $('<div>This is a group class</div>')
              $('.group-class').append(div);

            });


    //function to stick navbar to top when scrolling
          $(window).scroll(function () {
          //if you hard code, then use console
          //.log to determine when you want the 
          //nav bar to stick.  
          console.log($(window).scrollTop())
        if ($(window).scrollTop() > 143) {
          $('.navbar-default').addClass('navbar-fixed-top');
          $("#nav-logo").show('slow');
        }
        if ($(window).scrollTop() < 144) {
          $('.navbar-default').removeClass('navbar-fixed-top');
          $("#nav-logo").hide('fast');
        }
  });
          
   })    