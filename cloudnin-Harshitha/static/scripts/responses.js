function getBotResponse(input) {
    

    // Simple responses
    if (input == "hello"  || input == "hi" || input =="hai") {
        return "Hello there! <br>Please tell us your name,your age,your Contact and your issue?";
    } else if (input == "thankyou") {
        return "Thank you we will get back to you!";
    } else {
        return "Please tell us your name,your age,your Contact and your issue?<br>Enter thankyou if already sorted out";
    }
}