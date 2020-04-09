
var scriptSrc = document.currentScript.src;
var timezone_offset_minutes = new Date().getTimezoneOffset();
timezone_offset_minutes = timezone_offset_minutes == 0 ? 0 : -timezone_offset_minutes;
var betswitch = document.getElementById('betswitch');
betswitch.addEventListener('change', () => {
  saveStatus(betswitch.checked);
});

$(document).ready(function() {
  getBetStatus();
 
});

function getBetStatus(){
  var path = scriptSrc.replace('/js/scripts.js','').trim();
  var apiUrl = path + '/getBetStatus.php';
  $.ajax({
      url: apiUrl,
      method: 'GET',
      contentType: 'application/json',
    
      success: function(result) {
          var betStatus = $.parseJSON(result);
          if (betStatus.result.length == 0) {
          }else{
            betStatus = betStatus.result.value;
            if (betStatus == 1) {
              betswitch.checked  = true;
              $('#betlabel').text("BETTING is ON");
              $('#betlabel').removeClass("text-danger");
              $('#betlabel').addClass("text-success");

            }else {
              betswitch.checked = false;
              $('#betlabel').text("BETTING is OFF");
              $('#betlabel').removeClass("text-success");
              $('#betlabel').addClass("text-danger")
            }
          }
      },
      error: function(jqXHR, status, err) {
          toastr.error('Error!');
      }
  });
}
function saveStatus(betStatus) {
  var data = {'status': betStatus };
  var path = scriptSrc.replace('/js/scripts.js','').trim();
  var apiUrl = path + '/betSwitch.php';
  $.ajax({
      url: apiUrl,          
      method: 'POST',
      contentType: 'application/json',
      data: JSON.stringify(data),
      success: function(response) {
         if (betStatus == true){
          $('#betlabel').text("BETTING is ON");
          $('#betlabel').removeClass("text-danger");
          $('#betlabel').addClass("text-success");
         }else {  
           $('#betlabel').text("BETTING is OFF");
           $('#betlabel').removeClass("text-success");
           $('#betlabel').addClass("text-danger")
        }
      },
      error: function (jqXHR, status, err) {
            toastr.error('---');
      }
  });
}
function SaveSultadaDetails() {
    // get values
    var path = scriptSrc.replace('/js/scripts.js','').trim();

    var game = $("#game").val();
    var nof =  $("#nof").val();
    var maxBet = $("#maxbet").val();
    console.log(game);
    var data = { 'gameName': game, 'nofs': nof , 'timezone' : timezone_offset_minutes}
    console.log(JSON.stringify(data));
    var apiUrl =  path + '/saveSultada.php';
    $.ajax({
        url: apiUrl,
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(data),
        success: function(result){
            $("#update_betamount").modal("hide");
            $(document).Toasts('create', {
                class: 'bg-success', 
                autohide: true,

                title: 'Success',

                subtitle: 'Add Sultada',
                delay: 2000,
                body: 'Successfully added new Sultada..'
              })
            
        },
        error:function(jqXHR, status, err){
          //  toastr.error('error');
        }
    })
}
function SaveMaxBet() {
  // get values
  
  var path = scriptSrc.replace('/js/scripts.js','').trim();
  var maxBet = $("#maxbet1").val();
  console.log('max ' + maxBet);
  var data = { 'maxbet': maxBet}
  var apiUrl =  path + '/saveMaxBet.php';
  $.ajax({
      url: apiUrl,
      method: 'POST',
      contentType: 'application/json',
      data: JSON.stringify(data),
      success: function(result){

          $(document).Toasts('create', {
              class: 'bg-success', 
              autohide: true,

              title: 'Success',
              subtitle: 'Maximum Bet',
              delay: 2000,
              body: 'Successfully updated.'
            })
          
      },
      error:function(jqXHR, status, err){
        //  toastr.error('error');
      }
  })

}
function saveOdds()
 {
  var path = scriptSrc.replace('/js/scripts.js','').trim();
  var walaodds = $("#walaodds").val();
  var meronodds = $("#meronodds").val();
  
  var data = { 'meron': meronodds, 'wala': walaodds}
  var apiUrl =  path + '/saveOdds.php';
  $.ajax({
      url: apiUrl,
      method: 'POST',
      contentType: 'application/json',
      data: JSON.stringify(data),
      success: function(result){
          $("#update_odds").modal("hide");
          $(document).Toasts('create', {
              class: 'bg-success', 
              autohide: true,

              title: 'Success',
              subtitle: 'Odds',
              delay: 2000,
              body: 'Successfully updated.'
            })
          
      },
      error:function(jqXHR, status, err){
        //  toastr.error('error');
      }
  })

 }
function SaveBetSwitch() {
  // get values
  var path = scriptSrc.replace('/js/scripts.js','').trim();
  // var game = $("#game").val();
  // var nof =  $("#nof").val();
  // var maxBet = $("#maxbet").val();
  // var data = { 'gameName': game, 'nofs': nof , 'timezone' : timezone_offset_minutes}
  var apiUrl =  path + '/betSwitch.php';
  $.ajax({
      url: apiUrl,
      method: 'POST',
      contentType: 'application/json',
     // data: JSON.stringify(data),
      success: function(result){
          $("#reset").modal("hide");
          $(document).Toasts('create', {
              class: 'bg-success', 
              autohide: true,

              title: 'Success',
              subtitle: 'Bet Switch',
              delay: 2000,
              body: 'Successfully open / close betting..'
            })
          
      },
      error:function(jqXHR, status, err){
        //  toastr.error('error');
      }
  })

}
function newGame() {
   // get values
   var path = scriptSrc.replace('/js/scripts.js','').trim();
   var apiUrl =  path + '/newGame.php';
   $.ajax({
       url: apiUrl,
       method: 'POST',
       contentType: 'application/json',
       success: function(result){
          // $("#update_betamount").modal("hide");
           $(document).Toasts('create', {
               class: 'bg-success', 
               autohide: true,

               title: 'Success',

               subtitle: 'New Game Started',
               delay: 2000,
               body: 'Successfully added new Sultada..'
             })
           
       },
       error:function(jqXHR, status, err){
         //  toastr.error('error');
       }
   })
}
function declareWinner() {
  var side = $('#divwinner input:radio:checked');
  //chk.attr('value');
  console.log(side.val());
  var data = {'side': side.val() };
  var path = scriptSrc.replace('/js/scripts.js','').trim();
  var apiUrl = path + '/declareWinner.php';
  $.ajax({
      url: apiUrl,          
      method: 'POST',
      contentType: 'application/json',
      data: JSON.stringify(data),
      success: function(response) {
        //TODO: PROGRESS BAR FOR WINNERS
        //COUNT WINNERS
      },
      error: function (jqXHR, status, err) {
            toastr.error('---');
      }
  });
}




