<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--- custom css file link -->
        <link rel="stylesheet" href="style.css">

    </head> 
    <body>

        <div class="container">
        
           <form action="">
              <div class="row">

                <div class="col">

                    <h3 class="title">details</h3>

                    <div class="inputbox">
                        <span>full name :</span>
                        <input type="text" placeholder="chandith wicky">
                    </div>
                    <div class="inputbox">
                        <span>email :</span>
                        <input type="email" placeholder="chandith@example.com">
                    </div>
                    <div class="inputbox">
                        <span>address :</span>
                        <input type="text" placeholder="house - street - locality">
                    </div>
                    <div class="inputbox">
                        <span>city :</span>
                        <input type="text" placeholder="sooriyawewa">
                    </div>

                    <div class="flex">
                        <div class="inputbox">
                            <span>state :</span>
                            <input type="text" placeholder="srilanka">
                        </div>
                        <div class="inputbox">
                            <span>phone :</span>
                            <input type="text" placeholder="+94 123456789">
                        </div>
                    </div>

                </div>

                <div class="col">

                    <h3 class="title">payment</h3>

                    <div class="inputbox">
                        <span>cards accepted :</span>
                        <img src="card_img.png" alt="">
                    </div>
                    <div class="inputbox">
                        <span>name on card :</span>
                        <input type="text" placeholder="mr. chandith wicky">
                    </div>
                    
                    <div class="inputbox">
                        <span>credit card number :</span>
                        <input type="number" placeholder="1111-2222-3333-4444">
                    </div>
                    <div class="selection">
                        <span>expiry month :</span>
                        <select aria-placeholder="january">
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        
                    </div>

                    <div class="flex">
                        <div class="inputbox">
                            <span>expiry year :</span>
                            <input type="number" placeholder="2023">
                        </div>
                        <div class="inputbox">
                            <span>cvv :</span>
                            <input type="text" placeholder="123">
                        </div>
                    </div>

                </div>

              </div>

              <input type="submit" value="proceed to checkout" class="submit-btn">

            </form>
        
        </div>

    </body>
    
</html>