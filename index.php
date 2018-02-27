<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exchange rate</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js" ></script>
  </head>
  <body>
    <div class="container">
      <form action="calculate-result.php" method="post">
        <div class="form-group">
          <labelfor ="formGroupExampleInput"><img src="image/thai.png" class="rounded" alt="Cinque Terre" width="50"> จำนวนเงินไทย </label>
          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรุณากรอกเป็นจำนวนเงิน" name="thb" action="calculate-result.php">
        </div>
        <div class="form-group">
        <label >สกุลเงินที่ต้องการคำนวน</label>
          <!-- <select class="form-control" name="type">
            <option value="usd">USD</option>
            <option value="jyp">JYP</option>
            <option value="krw">KRW</option>
            <option value="gbp">GBP</option>
            <option value="eur">EUR</option>
          </select> -->
          <div id="myDropdown">
            <select id="demo-htmlselect">
               <option value="usd" data-imagesrc="https://www.bot.or.th/thai/financialmarkets/_layouts/application/Images/flagUSD.png"
                   data-description="Description with Facebook">USD</option>
               <option value="jyp" data-imagesrc="https://www.bot.or.th/thai/financialmarkets/_layouts/application/Images/flagJPY.png"
                   data-description="Description with Twitter">JYP</option>
               <option value="krw" selected="selected" data-imagesrc="https://www.bot.or.th/thai/financialmarkets/_layouts/application/Images/flagKRW.png"
                   data-description="Description with LinkedIn">KRW</option>
               <option value="gbp" data-imagesrc="https://www.bot.or.th/thai/financialmarkets/_layouts/application/Images/flagGBP.png"
                   data-description="Description with Foursquare">GBP</option>
               <option value="eur" data-imagesrc="https://www.bot.or.th/thai/financialmarkets/_layouts/application/Images/flagEUR.png"
                       data-description="Description with Foursquare">EUR</option>
           </select>
         </div>

        </div>
        <input type="hidden" name="type" class="d">
        <button class="btn btn-primary bt" role="button" type="submit">Calculate</button>
      </form>
    </div>
    <script type="text/javascript">
                var x;
       $('#myDropdown').ddslick({
       onSelected: function (data) {
       console.log(data.selectedData.value);
       x = data.selectedData.value;
       }
       });
       $(".bt").click(function(){
       $('.d').attr({
       "value" : x,
       });
       // alert(datas);
       });
    </script>
  </body>
</html>
