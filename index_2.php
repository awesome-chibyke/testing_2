<?php

    $salt = 'sha256';
    echo hasHer('jhgahjjsfhurfguefagdfyeg', $salt);
    function hasHer($password, $salt){
        return hash($salt, md5($password));
    }



    function isGood($who){
        return $me = $who;
    }


    function git_commads(){
        $command_arrays = array('git init', 'git commit', 'git push', 'git pull');
    }


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HTML 5</title>
        <style>
            /*css start here*/
            body{
                margin: 0px;
            }
            .my_container{
                width: 100%;
                height: auto;
                float: left;
            }
            .image_holder{
                width: 33.3%;
                height: auto;
                float: left;
                position: relative;
                overflow: hidden;
                margin-bottom: 0px;
                padding-bottom: 0px;
            }
            .img-resp{
                width: 100%;
                transition: all 1s ease;
                overflow: hidden;
                margin-bottom: 0px;
                padding-bottom: 0px;
            }
            .image_holder:hover .img-resp{
                -webkit-transform: scale(1.5,1.5);
                -moz-transform: scale(1.5,1.5);
                -ms-transform: scale(1.5,1.5);
                -o-transform: scale(1.5,1.5);
                transform: scale(1.5,1.5);
                opacity: 0.2;
            }
            .image_holder .link_to_detail{
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0px;
                left: 0px;
                z-index: 100;
            }
            .image_holder .text-holder{
                position: absolute;
                width: 100%;
                top: 20px;
                left: 20px;
                opacity: 0;
                transition: all 1s ease;
            }

            .image_holder:hover .text-holder{
                opacity: 1;
            }
            @media (max-width: 767px) {

                .image_holder{
                    width: 100%;
                    height: auto;
                    float: left;
                    position: relative;
                    overflow: hidden;
                    margin-bottom: 0px;
                    padding-bottom: 0px;
                }

            }
            @media (min-width: 768px) {

                .image_holder{
                    width: 33.3%;
                    height: auto;
                    float: left;
                    position: relative;
                    overflow: hidden;
                    margin-bottom: 0px;
                    padding-bottom: 0px;
                }

            }
            @media (min-width: 1200px) {

                .image_holder{
                    width: 33.3%;
                    height: auto;
                    float: left;
                    position: relative;
                    overflow: hidden;
                    margin-bottom: 0px;
                    padding-bottom: 0px;
                }

            }
            /*css stop here*/
        </style>
    </head>
    <body>
        <div class="my_container">

            <!--image holder 1-->
            <div class="image_holder">

                <!--image tag, change the link on the src attribute-->
                <img src="img/research.jpeg" class="img-resp">

                <!--link to detail-->
                <a href="https://cleantechnologyhub.com/research/" class="link_to_detail"></a>

                <!--text holder-->
                <div class="text-holder">
                    <!--<p>Projects</p>-->
                    <h2>Research</h2>
                </div>

            </div>

            <!--image holder 2-->
            <div class="image_holder">

                <!--image tag, change the link on the src attribute-->
                <img src="img/gender_energy.jpeg" class="img-resp">

                <!--link to detail-->
                <a href="https://cleantechnologyhub.com/gender-and-energy-access/" class="link_to_detail"></a>

                <!--text holder-->
                <div class="text-holder">
                    <!--<p>Projects</p>-->
                    <h2>Gender and Energy Access</h2>
                </div>
            </div>

            <!--image holder 3-->
            <div class="image_holder">

                <!--image tag, change the link on the src attribute-->
                <img src="img/consulting.jpeg" class="img-resp">

                <!--link to detail-->
                <a href="https://cleantechnologyhub.com/consulting/" class="link_to_detail"></a>

                <!--text holder-->
                <div class="text-holder">
                    <!--<p>Projects</p>-->
                    <h2>Consulting</h2>
                </div>
            </div>

            <!--image holder 4-->
            <div class="image_holder">

                <!--image tag, change the link on the src attribute-->
                <img src="img/market_access.jpeg" class="img-resp">

                <!-- link to details -->
                <a href="https://cleantechnologyhub.com/market-access/" class="link_to_detail"></a>

                <!--text holder-->
                <div class="text-holder">
                    <!--<p>Projects</p>-->
                    <h2>Market Access</h2>
                </div>
            </div>

            <!--image holder 5-->
            <div class="image_holder">
                <!--image tag, change the link on the src attribute-->
                <img src="img/training.jpeg" class="img-resp">

                <!-- link to details -->
                <a href="https://cleantechnologyhub.com/training/" class="link_to_detail"></a>
                <!--text holder-->
                <div class="text-holder">
                    <!--<p>Projects</p>-->
                    <h2>Training</h2>
                </div>
            </div>

            <!--image holder 6-->
            <div class="image_holder">
                <!--image tag, change the link on the src attribute-->
                <img src="img/incubation.jpeg" class="img-resp">
                <!--ilink to details-->
                <a href="https://cleantechnologyhub.com/incubation/" class="link_to_detail"></a>
                <!--text holder-->
                <div class="text-holder">
                    <!--<p>Projects</p>-->
                    <h2>Incubation</h2>
                </div>
            </div>
        </div>
        <!--<canvas id="my_canvas" width="400" height="400"></canvas>-->
    </body>
    <!--<script>
        console.log(Math)
        var canvas = document.getElementById('my_canvas');
        var context = canvas.getContext('2d');
        context.moveTo(30,50);
        context.lineTo(30, 120);
        context.lineTo(70, 120);
        context.closePath();
        context.stroke();
    </script>-->
</html>


<script>
    const supportedCards = {
        visa, mastercard
    };

    const countries = [
        {
            code: "US",
            currency: "USD",
            country: 'United States'
        },
        {
            code: "NG",
            currency: "NGN",
            country: 'Nigeria'
        },
        {
            code: 'KE',
            currency: 'KES',
            country: 'Kenya'
        },
        {
            code: 'UG',
            currency: 'UGX',
            country: 'Uganda'
        },
        {
            code: 'RW',
            currency: 'RWF',
            country: 'Rwanda'
        },
        {
            code: 'TZ',
            currency: 'TZS',
            country: 'Tanzania'
        },
        {
            code: 'ZA',
            currency: 'ZAR',
            country: 'South Africa'
        },
        {
            code: 'CM',
            currency: 'XAF',
            country: 'Cameroon'
        },
        {
            code: 'GH',
            currency: 'GHS',
            country: 'Ghana'
        }
    ];

    const appState = {};

    const formatAsMoney = (amount, buyerCountry) => {
        let code = "en-US";
        let currency = "USD";
        let country = "United States";
        countries.forEach((item) => {
            if (item.country == buyerCountry){
                code = "en-"+item.code;
                country = item.country;
                currency = item.currency;
            }
        });

        //return Number(amount).toLocaleString(code, { style: 'currency', currency });
        return amount.toLocaleString(code, {style: "currency", currency});
    }

    const flagIfInvalid = (field, isValid) => {
        if(isValid){
            field.classList.remove('is-invalid')
        } else {
            field.classList.add('is-invalid')
        }
    }

    const expiryDateFormatIsValid = (target) => {

        let userDate = target.value;
        let splittedDate = userDate.split("/");
        let userMonth = splittedDate[0];
        let userYear = splittedDate[1];
        let todaysDate = new Date();
        let thisMonth = todaysDate.getMonth();
        let currentYear = todaysDate.getFullYear();

        currentYear = currentYear.toString().slice(-3);
        currentYear = Number.parseInt(currentYear);

        if (userYear < currentYear) {
            flagIfInvalid(target, false);
            return false
        }

        if (userYear < currentYear && userMonth < thisMonth) {
            flagIfInvalid(target, false);
            return false
        }
        flagIfInvalid(target, true)
        return true;

    }

    const detectCardType = ({target}) => {
        const cc = document.querySelector('[data-credit-card]');
        const cType = document.querySelector('[data-card-type]');
        if(target.value[0] == '4'){
            cc.classList.add('is-visa');
            cType.src = supportedCards.visa;
            return "is-visa";
        } else if (target.value[0] == '5'){
            cc.classList.add('is-mastercard');
            cType.src = supportedCards.mastercard;

            return "is-mastercard";
        }
    }

    const validateCardExpiryDate = ({target}) => {
        let expiryDateField = target;
        let response = expiryDateFormatIsValid(expiryDateField);


        if(response){
            flagIfInvalid(target, true);
            return true;
        }else{
            flagIfInvalid(target, false);
            return false
        }

    }

    const validateCardHolderName = ({target}) => {
        let name = target.value;
        let nameSplit = name.split(" ");
        let firstName = "";
        let secondName = "";
        if(nameSplit.length > 2){
            flagIfInvalid(target, false);
            return false;
        }
        if(nameSplit.length < 2){
            flagIfInvalid(target, false);
            return false;
        }
        if (nameSplit > 2 || nameSplit < 2) {
            flagIfInvalid(target, false);
            return false;
        }

        firstName = nameSplit[0];
        secondName = nameSplit[1];

        if (firstName.length < 3) {
            //flag as invalid
            flagIfInvalid(target, false);
            return false;
        }
        if (secondName.length < 3) {
            //flag as invalid
            flagIfInvalid(target, false);
            return false;
        }
        //flag as valid
        flagIfInvalid(target, true);
        return true;
    };

    const validateWithLuhn = (digits) => {
        let total, final;
        for(i = 0; i < digits.length; i++){
            if(i % 2 === 0){
                console.log(digits[i]);
                total = digits[i] * 2;
                console.log('total ' + total);

                //checking for double more than 9
                if(total <= 9){
                    digits[i] = total;
                }
                else if(total > 9){
                    console.log('digit '+ digits[i])
                    total = total - 9;
                    digits[i] = total;
                }
                else{
                    return
                }
                //console.log(digits)

                //suming all the final digits
                const reducer = (totalAll, currentItem) =>{
                    //will return the total array value
                    return totalAll + currentItem
                }
                //final has the whole number
                final = digits.reduce(reducer, 0);
            }
        }
        console.log(digits)
        if(final % 10 === 0){
            console.log('valid')
            return true
        }
        else{
            console.log('invalid')
            return false
        }
    }
    const validateCardNumber = () => {
        let selectedDiv = document.querySelector('[data-cc-digits]');

        let cardNumber = [];
        let firstSet = document.querySelector('[data-cc-digits] input:nth-child(1)').value;
        [...firstSet].forEach(c =>cardNumber.push(parseInt(c)) );
        let secondSet = document.querySelector('[data-cc-digits] input:nth-child(2)').value;
        [...secondSet].forEach(c =>cardNumber.push(parseInt(c)) );
        let thirdSet = document.querySelector('[data-cc-digits] input:nth-child(3)').value;
        [...thirdSet].forEach(c =>cardNumber.push(parseInt(c)) );
        let fourthSet = document.querySelector('[data-cc-digits] input:nth-child(4)').value;
        [...fourthSet].forEach(c =>cardNumber.push(parseInt(c)) );


        let validate = validateWithLuhn(cardNumber);

        if(validate){
            selectedDiv.classList.remove('is-invalid');
            return validate;
        }else{
            selectedDiv.classList.add('is-invalid');
            return validate;
        }
    }


    const uiCanInteract = () => {
        const detectCard = document.querySelector('div[data-cc-digits] input:first-child');
        detectCard.addEventListener('blur', detectCardType, false);

        const validateCard = document.querySelector('div[data-cc-info] input:first-child');
        validateCard.addEventListener('blur', validateCardHolderName, false);

        const vacExpiry = document.querySelector('div[data-cc-info] input:last-child');
        vacExpiry.addEventListener('blur', validateCardExpiryDate, false);

        const btn = document.querySelector('[data-pay-btn]');
        btn.addEventListener('click', validateCardNumber, false);

        detectCard.focus()

    }

    const displayCartTotal = ({results}) => {
        const [data] = results;
        const {itemsInCart, buyerCountry} = data;

        appState.items = itemsInCart;
        appState.country = buyerCountry;


        appState.bill = itemsInCart.reduce((a, c) => {
            return (a.price * a.qty) + (c.price * c.qty);
        });


        appState.billFormatted = formatAsMoney(appState.bill, appState.country);

        document.querySelector("span[data-bill]").textContent = appState.billFormatted;
        console.log(appState.billFormatted);
        uiCanInteract();
    }

    const fetchBill = () => {
        const api = "https://randomapi.com/api/006b08a801d82d0c9824dcfdfdfa3b3c";

        fetch(api)

            .then((response) => { return response.json()})
            .then((data) => displayCartTotal(data))
            .catch((error) => console.log(error))
    }

    const startApp = () => {
        fetchBill();
    };

    startApp();
</script>