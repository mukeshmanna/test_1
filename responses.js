function getBotResponse(input) {
    // Simple responses
    if (input == "hello") {
        return "Hello there! What can I do for you?";
    } else if (input == "hi") {
        return "Hi there! What can I do for you?";
    } else if (input == "Sports") {
        return "Keywords/Commands: <br/><br/> <strong>Sports</strong> - it will show our sports. <br/> <strong>about</strong> - it will show the 'about us'. <br/> <strong>clubs</strong>- it will show 'Clubs'. <br/>  <strong>how to enroll</strong> - it will show the instruction. <br/> ";
    } else if (input == "sports") {
        return "Hi there! <br /><br /> There are 4 types of Sports are available:<br> 1.Cricket <br>2. basket ball<br> 3.kabbadi <br>4.Tennis";
    } else if (input == "clubs") {
        return "Hi there! <br /><br /> There are 4 types of Clubs are available:<br> 1.NSS <br>2.NCC<br> 3.RRC <br>4.Culturals";
    } else if (input == "Enroll") {
        return "Hi there! <br /><br /> <strong>To enroll please click into enroll button and there you will see form to fill the details!";

    /*
    } else if (input == "hi") {
        return "Hi there! What can I do for you?";
    } else if (input == "hi") {
        return "Hi there! What can I do for you?";
    } else if (input == "hi") {
        return "Hi there! What can I do for you?";
    } else if (input == "hi") {
        return "Hi there! What can I do for you?";
    } else if (input == "hi") {
        return "Hi there! What can I do for you?";
    } else if (input == "hi") {
        return "Hi there! What can I do for you?";
    } else if (input == "hi") {
        return "Hi there! What can I do for you?";
    */
   
    } else {
        return "Try asking something else!";
    }
}